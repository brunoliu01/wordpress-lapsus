<?php

	$postID = $post->ID;
	$title = get_the_title();
	$permalink = get_the_permalink();
	$thumbID = get_post_thumbnail_id($post->ID);
	$titulo_del_slider = get_field('titulo_del_slider');
	$descripcion_del_slider = get_field('descripcion_del_slider');
	$imagen_del_slider = get_field('imagen_del_slider');
  $link_de_enlace = get_field('link_de_enlace');




?>

<div class="slide slide1" style="background-image:url(<?php echo $imagen_del_slider['url'] ;?>);">
  <div class="slide-text">
    <h1><?php echo $titulo_del_slider ;?></h1>
    <h3><?php echo $descripcion_del_slider ;?></h3>
  </div>
  <a class="slide-button" href="<?php echo $permalink; ?>">ESTOY INTERESADO</a>
</div>
