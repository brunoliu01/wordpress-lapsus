<?php

	$postID = $post->ID;
	$title = get_the_title();
	$permalink = get_the_permalink();
	$thumbID = get_post_thumbnail_id($post->ID);
	$img = wp_get_attachment_image_src($thumbID, 'postTypePost_block');
	$img_contacto = get_field('img_contacto');
	$descripcion_texto = get_field('descripcion_texto');
	$descripcion_texto2 = get_field('descripcion_texto2');
	$descripcion_texto3 = get_field('descripcion_texto3');
?>

<div class="sub-cont-text">
				<div>
					<img class="img-contacto" src="<?php echo $img_contacto['url']; ?>">
				</div>
				<p class="line-cont"><?php echo $descripcion_texto?><br><?php echo $descripcion_texto2?><br><?php echo $descripcion_texto3?></p>
</div>
