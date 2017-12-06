<?php

	$postID = $post->ID;
	$title = get_the_title();
	$permalink = get_the_permalink();
	$thumbID = get_post_thumbnail_id($post->ID);
	$img = wp_get_attachment_image_src($thumbID, 'postTypePost_block');
	$imagen_parallax = get_field('imagen_parallax');
	$titulo_parallax = get_field('titulo');

?>


<div class="parallax style="background-image:url(<?php echo $imagen_parallax['url'] ;?>);"">
			<p class="text-parallax">
				<?php echo $titulo_parallax ?>
			</p>
</div>
