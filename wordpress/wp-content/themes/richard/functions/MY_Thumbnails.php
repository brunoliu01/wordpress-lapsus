
<?php

/*
	*Thumbnails for the images in the template
 */
if (function_exists('add_image_size')) {
    set_post_thumbnail_size(134, 108);
    add_image_size('postTypeEstreno_detail', 430, 650, true);
    add_image_size('postTypeEstreno_mask', 516, 549, true);
    add_image_size('postTypePost_block', 514, 545, true);
    add_image_size('postTypePost_block2', 680, 480, true);
    add_image_size('postTypePost_gallery', 1547, 694, true);
}

define("IMAGE_FILETYPE", "(bmp|gif|jpeg|jpg|png)", true);

?>