class Exchange < ActiveRecord::Base

  acts_as_taggable
  acts_as_paranoid

  belongs_to :item, -> { with_deleted }, :foreign_key => "item_to"
  belongs_to :user, -> { with_deleted }
  has_many :exchange_messages
  has_many :credits
  accepts_nested_attributes_for :exchange_messages, 
    allow_destroy: true, 
    reject_if: :all_blank

  scope :waiting, -> { where(accepted: nil) }
  default_scope { order("created_at DESC") }

  acts_as_messageable

  def from_item
    Item.with_deleted.find_by_id(item_from)
  end

  def to_item
    item
  end

  def from_user
    self.user
  end

  def to_user
    Item.with_deleted.find_by_id(item_to).user
  end

  def item
    Item.unscoped { super }
  end

end

