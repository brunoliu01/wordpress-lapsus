<?php

	$postID = $post->ID;
	$title = get_the_title();
	$permalink = get_the_permalink();
	$thumbID = get_post_thumbnail_id($post->ID);
	$img = wp_get_attachment_image_src($thumbID, 'postTypePost_block');
	$imagen_novedades = get_field('imagen_novedades');
	$titulo_novedades = get_field('titulo_novedades');
	$encargado_novedades = get_field('encargado_novedades');
	$descripcion_novedades = get_field('descripcion_novedades');
?>


<div class="img-section">
	<div class="img-prueba"  style="background-image:url(<?php echo $imagen_novedades['url'] ;?>);"></div>
	<div class="content-text">
		<p class="title"><?php echo $titulo_novedades?></p>
		<p class="subtitle"><?php echo $encargado_novedades?></p>
		<div class="content-description">
			<p class="description"><?php echo $descripcion_novedades?></p>
		</div>
	</div>
</div>
