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
define('DB_NAME', 'wordpress-db');

/** MySQL database username */
define('DB_USER', 'wordpress-user');

/** MySQL database password */
define('DB_PASSWORD', 'Emergingstar24');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '-vLB6aosI,t%Z+j5,eGn|0#]9iqS4$w`d8jWsA]L)<ML:?$/)b7?~wHuf%f?99,n');
define('SECURE_AUTH_KEY',  '7zZC~Uo3W)PCZ><`FPwN]m>m|v?2H$.W|yk,DC{PZ~&^S4kH4>MHHd*Q2-$o8EN4');
define('LOGGED_IN_KEY',    'gCr@?YDkGH]oC24`j/GSvxPbUv@#1Z`Bl-EAdj]e-8W-XcHtyD@=#@E?=5hxMZ.p');
define('NONCE_KEY',        'i~P@,CW?e#n(PIlCN/<7B5GX`%06PjvV%cO-!m%mC~=d!Zj]Tx2yk~Mvb8UC-%_W');
define('AUTH_SALT',        'IkK>{YQcoq+#@^|Fps$su{Exb??,DC<GZclhizxXb>T&?(,z0Pc|COFnUqfB>m-T');
define('SECURE_AUTH_SALT', 'H(/TwCo J!R)^B@ucR;f3u|z-ab;tX2m]QtHo4ppwZF8$5@@RcM3J*?Bq}JfWKQC');
define('LOGGED_IN_SALT',   'Ti!3N -hfoh8hI3Jtpd:<cxS*L[mxri;5bb$vjHsu=iUxP@$27kmj2lBhw-5UqSa');
define('NONCE_SALT',       '+j2a{A2b9bN-D_OHwU.G2I/JQp~TxY#</U+Q)<.hO^D~~e+S~?S$SwDXFu@h]1,[');

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
