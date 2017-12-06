<?php

	$postID = $post->ID;
	$title = get_the_title();
	$permalink = get_the_permalink();
	$thumbID = get_post_thumbnail_id($post->ID);


	$titulo_que_hacemos = get_field('titulo_que_hacemos');
	$descripcion_que_hacemos = get_field('descripcion_que_hacemos');
	$imagen_que_hacemos = get_field('imagen_que_hacemos');





?>


<div class="blue-contenido">
	<img class="img-second" src="<?php echo $imagen_que_hacemos['url'] ;?>">
	<p class="paragraph-center"><?php echo $titulo_que_hacemos ?></p>
	<P class="text-blue" ><?php echo $descripcion_que_hacemos ?></P>
</div>
