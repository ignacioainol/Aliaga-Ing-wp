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
define('DB_NAME', 'aliaga_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456789');

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
define('AUTH_KEY',         '7RJR3gO)koo5cL~Py#R&NPT%JsrDac8^tL5qr;^kK~S),S3d_Yn4YcxIuHG%8XTh');
define('SECURE_AUTH_KEY',  'JOpTS1;6 Jb&W=W]iOpZCu]GR[8K#M]mIB %Cbqxl{]aJgSm 2{=4L iO$mK5:Ez');
define('LOGGED_IN_KEY',    'ux#?mZtsEC;.8E!WGd8~_e6@6*&?M`[^O3S7*o#nyW+Dp:^.szl3zc&TPZg^/bAA');
define('NONCE_KEY',        'xZCE?Qh{YTjZDW-GZ&Do*EFyi]Tkrt-&lTgMYi#dp)=b%NPv= KkkfV_=CC=N8x2');
define('AUTH_SALT',        'h ddt0 GLcP{7BB<-xI#MRtF&B;U!`^Yq#*rrNiW@2*iQ}1hC0.VT(R,lK.{]U)^');
define('SECURE_AUTH_SALT', '|;Bjjmv|/]yQk}9#*7($FqWj6Pbf,8Myfuy+EkX<.8@6{pP,[jpB{(?+-JW5>W?(');
define('LOGGED_IN_SALT',   '}?^6 ;7nE&mG215zF&|B$|qO*^W1T`j:(eW01#r)jz+bKZ^NEd{[N~,+$bW79G3a');
define('NONCE_SALT',       ',&/8>hV,o gJ3d;RJVTu2CD7|.b5%,G=AZ([cQZH<x}Y8U[<R2tq_{,uU1VR3iYW');

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
