<?php

	$postID = $post->ID;
	$title = get_the_title();
	$permalink = get_the_permalink();
	$thumbID = get_post_thumbnail_id($post->ID);
	$img = wp_get_attachment_image_src($thumbID, 'postTypePost_block');
	$imagen_clientes = get_field('imagen_clientes');


?>


<div class="slide " style="background-image:url(<?php echo $imagen_clientes['url']; ?>);"></div>
