<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dentistryWP' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'T=pl-QvWn.:+yO@(SUO|AEiB1uh(*Xkf F^DQ,WfmA5)Sji~][NbuU+9[CT|:QK)' );
define( 'SECURE_AUTH_KEY',  'u;90xiMXmG5,.Xl?]b/*eIDIDmV`|=Jv==Ut%n,bXL=%zui2g3 Q:1MXZm&0*b=^' );
define( 'LOGGED_IN_KEY',    'XCMjW(;yndw~TK#xW|{Mz!l$QTf&HV36>ghC /4wia7|p-8e&,2d<6b }(@x=wU.' );
define( 'NONCE_KEY',        'xw>|>X:1c(2aNFRZx4~<g%V0O-[)w#9yUrOA9!j g2wAi2P35$B]NPYJ,)Bd>!z)' );
define( 'AUTH_SALT',        'q|nhdU@d,2p[E)k9ui!;gpVq3=|cBSN@HW?x0cnSL- -hngarz(S75XR-LtlI@U:' );
define( 'SECURE_AUTH_SALT', 'G:.a&K]o p=M,,rKL*{YnzO|g)r|&MV].j&g05{>S>W3B_F-xX9-?Ao+%%=@xED3' );
define( 'LOGGED_IN_SALT',   'ttyKUmgk-+hND_PVR5FqLLD,e,CM~&&Es:NIZ`9A~.>F3vKUf3}~i7+u6fjG])+$' );
define( 'NONCE_SALT',       'D:(EQIB98k;n^l(8?Ofu6oFZ,a1Um-VE8)X>p6fjz 9-BC]Ox~#y(8WeHGlK_e&M' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
