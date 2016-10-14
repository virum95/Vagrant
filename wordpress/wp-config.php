
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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'wppass');

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
define('AUTH_KEY',         'O[]KV!+A5kUQ<h,{!(y}5k;r-=h;z_U/mGSqoB{HOy@Rr#(k1aM98!|V)//[oNzu');
define('SECURE_AUTH_KEY',  'WI6]+5XD/yoQDzTHgagh]VSrPh~Kz:)XhC<*_wdFGlCMP4`r8(YCzI|j9M]HTJMg');
define('LOGGED_IN_KEY',    'v==8D&c]M+5Ul@q 5|9~h#b,-*}]T//$/Pm([v((DzK6=k=,h5Fee?7-%a*4Rzm=');
define('NONCE_KEY',        '/OI_(naH+RFh/8D~JYN}0BHE~4PB.)d-TedGi$L,JdJ)!g, :i<eS91)BwF]d/ d');
define('AUTH_SALT',        ']H^9Iyg%@XLsqgW)^mvv.8qDA[Z6M.sXr<bsIu>Z-{q9R$aXs,v}5zw{.StJUCi`');
define('SECURE_AUTH_SALT', '*>kU9q `|T/.ab5?0,)YEn>}/&$F_KC,R.BSS{d }ECN8?tBR-G8:!XKXEjocbM5');
define('LOGGED_IN_SALT',   '<HvJ,8skieZrJ0dT+vaWkrLuZz?%5}c6<DjhW$xj8VPo%AK)RP]!9vjz^c$(.Q<}');
define('NONCE_SALT',       'RZ&G46[qJ_zUr[xJ[dyg<-we0rFaF1~:KpO.ai&joVUdi[@kOor%Xy@_a`15#`KK');

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
