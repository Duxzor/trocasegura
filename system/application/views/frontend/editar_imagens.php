<div class="page-title page-title3">
	<div class="in">
		<h1>Meus dados</h1>
		<ul class="breadcrumbs">
			<li><a href="<?php echo $base_url; ?>">Home</a></li>
			<li>Meus dados</li>
		</ul>
	</div>
</div>
<!-- /page-title -->

<article class="user-area" id="tabs-1">
	<aside>
        <div class="avatar">
			<a class="change-photo" href="<?php echo $base_url . URL_USUARIO_MEUS_DADOS; ?>">Alterar imagem &nbsp;»</a>
			<div class="img"><img alt="<?php echo trim($user['name']); ?>" src="<?php echo $base_url . URL_UPLOAD_IMAGE . $user['avatar'];?>"></div>
			<strong class="name"><?php echo trim(strtok($user['name'], ' ')); ?></strong>
		</div>
		<ul class="side-menu">
			<li><a href="#tab-1-1">Editar Imagens</a></li>
		</ul>
	</aside>
	<div class="column">
		<div class="block ie-fix">
			<div id="tab-1-1">
				<div class="toy-info">
				    <?php 
            			if (count($formxUpdateToyImages->get_form_errors())) {
            		    	foreach($formxUpdateToyImages->get_form_errors() as $error) {
            			        echo '<p style="color:#990000">' . $error . '</p>';
            		    	}
            			} elseif ($formxUpdateToyImages->is_sucess()) {
            			    echo '
                                <h2 style="color:#A2D246">
                                    Imagems alteradas
                                </h2>
            			    
                                <div class="separator">
                                    <a href="'. $base_url . URL_USUARIO_EDITAR_BRINQUEDO . $toyId . '" class="btn-new">Voltar</a>
                                </div>';
            			}
            			
            			if ($formxUpdateToyImages->is_sucess() === false) {
                            echo $formxUpdateToyImagesView;
                        }
                    ?>
				</div>
			</div>
		</div>
	</div>
</article>
<!-- /user-area -->