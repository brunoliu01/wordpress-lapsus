<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'feedback');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'LF1Lv``brr ]zi>s$Yg[PfccL8s_N6])wU=(1~#6$_)V(#repqJC*Yz$C3C/S8E%');
define('SECURE_AUTH_KEY',  '@a%KQrqf:QyY6X/]-RCPRMo>X%4+hHjJzD9=2C-i/45!z=@?2 G G9[@@#gd=)Lt');
define('LOGGED_IN_KEY',    'a}9NMd5PU(^jJOy9#HYsayD&~{fCV:b}[iPQ5M^-eUz^MHE!zMZ]:miKr%-7ahx]');
define('NONCE_KEY',        'N PvH4J2NrXoxX9nDz*s,:K8:-~)n[vo$]aGF(^.uw7KI9U.yJE&>I?df%}w>CuV');
define('AUTH_SALT',        ']L}I=z/sSL]n!6!X.8UF%bE`FDw&R(h(S@9byde`_Q67^5QgI|Sn7&</y-MC6U`s');
define('SECURE_AUTH_SALT', '_%P=6$nm/nrk71hPn?Mwu~9a/q^|8&AWmeM8<LGJdL/a{xTH-b:VJjhfEwe-,Rm-');
define('LOGGED_IN_SALT',   'H2~hD<I_a!,,},<H,O0R/NCudJ3*^`?%CxLD!AN6I]t5vqg*w<jcZop^wczuz;?!');
define('NONCE_SALT',       '4`X+lxDBwXMc$ZimzaWO6uYAE$pxyp=H( ,?(wK khxew:{szb4Sn9f.x5)FBc_c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
