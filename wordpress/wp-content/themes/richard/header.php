<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title>LAPSUS</title>
	<link href="<?php bloginfo('stylesheet_directory') ?>/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory') ?>/js/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory') ?>/js/slick/slick-theme.css">
	<?php //wp_head(); ?>
</head>
<body>
<nav>
	<ul class="main-nav">
		<?php wp_nav_menu ( array( 'theme_location' => 'navegation')
		);?>
	</ul>
</nav>
