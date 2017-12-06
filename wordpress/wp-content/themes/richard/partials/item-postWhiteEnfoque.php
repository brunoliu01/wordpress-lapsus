<?php

	$postID = $post->ID;
	$title = get_the_title();
	$permalink = get_the_permalink();
	$thumbID = get_post_thumbnail_id($post->ID);
	$img = wp_get_attachment_image_src($thumbID, 'postTypePost_block');
	$imagen_enfoque = get_field('imagen_enfoque');


?>


		<p class="enfoque-text">ENFOQUE</p>
		<img  class="enfoque" src="<?php echo $imagen_enfoque['url']; ?>">
