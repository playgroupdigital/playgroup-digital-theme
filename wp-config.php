<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpresspgd');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'NJ#4F#DO)Aa^ImeAe2zr}7-@^T!f4(%A?kc^jSz*[kY5KPprwaYf6%B; 0pT{(3D');
define('SECURE_AUTH_KEY',  '-3$xQ%0Xq!5mz}C(%DfF1n4(k-6hp|{S*VeXX>|onT=-y&!a+2xcb{H 78qf2ztI');
define('LOGGED_IN_KEY',    '@/+R.#zZ`G5lC%AtqNJ(I`_ J(*n8@n?$yuFbQys8oSx2t<p /taWc)^d6-CGO#5');
define('NONCE_KEY',        '|@])?{}z1^F}_rY)-0QQ3EyeYK&.yD6[^yo$Rm:rd,T?f.37kF5sJ4[0d}GF4]}-');
define('AUTH_SALT',        'gS[(hFB9DLr6-6zR^`Wzi4,ab,-:*$|U_$bPiDBuMz/x]swKYnUI^Bx$s|u_Rz9}');
define('SECURE_AUTH_SALT', 'fz>PBl`sX8!m=%E{)]D< ]J=n|uTPFkbSfR?+PZNB{d@f`1tCEZ*^Xs!+<-*|]jd');
define('LOGGED_IN_SALT',   'Cy5W[&!b>3W+*JhjZMlayE&174dVroi}_|VSaG~(;#J<xl*eU{h;<#^sm~AV|nBF');
define('NONCE_SALT',       'umCvPi<HYrMKlV Ct62TtN+[>+v]G<[[}Va$,a{dcC.c&-&Bpzov2Vt_|I?n)gVX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
