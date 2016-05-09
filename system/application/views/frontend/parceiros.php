<div class="page-title">
	<div class="in">
		<h1>Parceiros</h1>
		<ul class="breadcrumbs">
			<li><a href="<?php echo $base_url; ?>">Home</a></li>
			<li>Parceiros</li>
		</ul>
	</div>
</div>
<!-- /page-title -->
<article class="partners-area">
	<h2>Quer ser nosso parceiro?</h2>
	<p>Fale com a gente! Teremos um enorme prazer em receber o seu e-mail. <a href="mailto:parceiros@quintaldetrocas.com.br">Clique aqui</a>.</p>
	<!--<h2>Conheça nossos parceiros e apoiadores</h2>-->
	<ul class="partner-list">
	   <?php 
	       foreach ($partners as $partner) {
        ?>
            <li class="ie-fix">
        <?php 
                echo sprintf('<a href="%s" target="_blank">', $partner->url);
                echo sprintf('<div class="img"><span class="tbl-cell"><img src="%s" alt="%s"></span></div>', $base_url . URL_UPLOAD_IMAGE . $partner->cover_image, $partner->name);
                echo sprintf('<strong class="name">%s</strong></a>', $partner->name);
	   ?>
	       </li>
        <?php } ?>
	</ul>
</article>
<!-- /partners-area -->