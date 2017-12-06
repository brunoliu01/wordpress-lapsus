<?php

	$postID = $post->ID;
	$title = get_the_title();
	$permalink = get_the_permalink();
	$thumbID = get_post_thumbnail_id($post->ID);
	$img = wp_get_attachment_image_src($thumbID, 'postTypePost_block');
	$excerpt = get_the_excerpt();
	$category = get_the_category();
	$imagen_de_skills = get_field('imagen_de_skills');
	$nombre_skills = get_field('nombre_skills');
	$porcentaje_del_skill = get_field('porcentaje_del_skill');
?>


<p><?php echo $excerpt ;?></p>