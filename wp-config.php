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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'raspberry');

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
define('AUTH_KEY',         'mq22/DW#U_`KC,XSrCR>h~%GxA[D8Ac{!>_}BpkG;cw4YP%CYyS3R~)-!z4<<{p]');
define('SECURE_AUTH_KEY',  '`0&2HnvQ)fh(BRswaoM!M`uIT[9-S8XZSf-(X<w;Wvv*tcg=~_vbOJ&lv?0c]pj<');
define('LOGGED_IN_KEY',    'yYzAD|]Gu2#V%+bs{8/j,jz@kyr7cH96>Y|l&.@tF|87q[sFzwT-4/|9uLdMEV}S');
define('NONCE_KEY',        'c;*~W*Z-.-g@{.Zb|Ix)]e)G7<uWy;<}j8{8uIMRk+C|Jx[&,[R&l`5{+~kjQ.#0');
define('AUTH_SALT',        '(*d,Se|g}cT)x=VO1F0V+b+li[g@%1J.mXxZKp+Xz75,1B91sj7xA>`JwfkJf>7|');
define('SECURE_AUTH_SALT', 'oI43KDfC<Uc:s:x2yzJy.t)#S:{Rd}EK*D=Xi^$Mg,tO&Os|2?wkXs&El8?zsVqJ');
define('LOGGED_IN_SALT',   'D5.8%g6Q#75+gs`8U.vdX[UA:c<[Vmr_qe]N IM.L+Iw0R!XFFH X-R)ONl&NKZ0');
define('NONCE_SALT',       'izEzS4Yc`-]/8v=~2t|qw!GUD xAH&BP*KWh/i[k-BKvW5#W)v&jCkEt %I_ NQ9');

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

