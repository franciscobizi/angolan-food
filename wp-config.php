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
define('DB_NAME', 'wp_db');

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
define('AUTH_KEY',         '>dVoU/1H~O|ZDu,!`(i8wbI80F$%pXPiwk^,r9xW7yu_/}8Ach2oD}a5%;m@9*vV');
define('SECURE_AUTH_KEY',  'Cy:vr[|D)q0IkwJ:R;ms6V/KQ?O:j%5utakNNJU=ibQ~qN4@F@ ==eTo38torxzn');
define('LOGGED_IN_KEY',    'ge)BmR*[,zd #2HUv5H.3FsI0jIxq^2+f.H]vfljM@&Z*%zD {<bj,4ETX8?!?w.');
define('NONCE_KEY',        'Y`yqqgx#G3Uxm4<~afu*7.UcwAO]6D842Z V?Ay(CRKtxf}r3^iP)d=0,ghh|u$=');
define('AUTH_SALT',        '-jP7j~HaBN G`<J>28ssB{<@H#/~(wMsob^lSmQY1ZR5s`6^mqJx@&/y8Lllc~Jr');
define('SECURE_AUTH_SALT', 'J{8p~!_pL4e=K]M`y*i!r@js~eCWgefg1(1gj+>m]1w?<dD^&-g87qNLIS+lF&gc');
define('LOGGED_IN_SALT',   'Gm=7c[T|Q(0rwB{Shs?mrw!JJk>%<b6.d*$WGQe;-3%f5I^Ot7)-@$5BPG9fo[!g');
define('NONCE_SALT',       'f@Nu?JE&Ql<1f-?xFwppXx8g]%et>,FJ|w>3Jk+4>BI8qs2`#xD1tcwDp[T]S`bb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wt_';

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
