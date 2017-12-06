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
<div class="Hab html">
	<div class="content">
		<img  src="<?php echo $imagen_de_skills['url'] ;?>" alt="test">
	</div>
	<div class="content-hab">
		<div>
			<p><?php echo $nombre_skills ;?></p>
			<h3><?php echo $porcentaje_del_skill ;?>%</h3>
		</div>
	</div>
</div>
			