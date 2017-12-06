<?php

	$postID = $post->ID;
	$title = get_the_title();
	$permalink = get_the_permalink();
	$thumbID = get_post_thumbnail_id($post->ID);
	$img = wp_get_attachment_image_src($thumbID, 'postTypePost_block');
	$excerpt = get_the_excerpt();
	$category = get_the_category();
	$subtitulo = get_field('the_subtitulo');
	$foto = get_field('foto');
	$edad = get_field('edad');
	$nombre_completo = get_field('nombre_completo');
	$cargo_actual = get_field('cargo_actual');
	$tiempo_de_experiencia = get_field('tiempo_de_experiencia');
	$descripcion = get_field('descripcion');




?>
<section class="AcercaMi" name="hola">
		<a name="vista2"></a>
		<div class="content-acercaMi">
			<h2>Acerca de Mi</h2>
			<div class="perfil-info">
				<div class="perfil">
					<div class="ocultar-perfil" >
							<div class="foto-perfil">
									<div class="foto" style="background-image: url(<?php echo $foto['url'];?>);">
										
									</div>
								</div>
								<p>Nombre: <span><?php echo $nombre_completo ;?></span></p>
								<p>Años: <span><?php echo $edad ;?></span></p>
								<p>Cargo Actual: <span><?php echo $cargo_actual ;?></span> </p>
								<p>Tiempo de Experiencia: <span><?php echo $tiempo_de_experiencia ;?></span></p>
					</div>
				</div>
				<div class="info">
					<p><?php echo $descripcion ;?></p>
				</div>
			</div>
		</div>	
	</section>