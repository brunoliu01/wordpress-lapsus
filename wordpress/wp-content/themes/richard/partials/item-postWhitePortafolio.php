<?php

	$postID = $post->ID;
	$title = get_the_title();
	$permalink = get_the_permalink();
	$thumbID = get_post_thumbnail_id($post->ID);
	$img = wp_get_attachment_image_src($thumbID, 'postTypePost_block');
	$excerpt = get_the_excerpt();
	$category = get_the_category();
	$imagen_del_portafolio = get_field('imagen_del_portafolio');
	$link_portafolio = get_field('link_portafolio');





?>

<div class="box-porfolio web1" style="background-image:url(<?php echo $imagen_del_portafolio['url'] ;?>);">
	<div class="hover-porfolio">
		<div>
			<a href="<?php echo $link_portafolio ;?>"><i class="fa fa-link" aria-hidden="true"></i></a>
		</div>
	</div>
</div>
			