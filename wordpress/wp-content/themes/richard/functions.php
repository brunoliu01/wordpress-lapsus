<?php
/**
 * Custom Functions
 *
 * @package WordPress
 * @author jorge@jorgecanari
 *
 */
 $BaseURL = "http://" . $_SERVER['HTTP_HOST'] . str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
 define('BASE_URI', $BaseURL);
 define('THEME_DIR', get_template_directory());
 define('THEME_URI', get_template_directory_uri());
 
 define('THEME_NAME', "joel-plantilla");
 define('THEME_VERSION', "1.0.1");
 
 define('LIBS_DIR', THEME_DIR . '/functions');
 define('LIBS_URI', THEME_URI . '/functions');
 define('LANG_DIR', THEME_DIR . '/languages');
 
 /**
  * Load functions default theme
  */
 require_once LIBS_DIR . '/MY_DefaultFunctions.php';
 
 /**
  * Load Utilities
  */
 require_once LIBS_DIR . '/MY_Utils.php';
 
 /**
  * Load Thumbnails
  */
 require_once LIBS_DIR . '/MY_Thumbnails.php';
 
 /**
  * Load Custom Theme
  */
 require_once LIBS_DIR . '/MY_CustomTheme.php';
 
 /**
  * Load Call Ajax
  */
 require_once LIBS_DIR . '/MY_CallAjax.php';

?>