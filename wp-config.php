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
define( 'DB_NAME', 'r4F3m3LEJY' );

/** MySQL database username */
define( 'DB_USER', 'r4F3m3LEJY' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pnyRMp5x8Q' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=3eRfHqP/IA#x5H%bA<wgPdI(,E@6ORDfMDNh.IyOn0]7w^zUjH<!K&H.9Zjzw=*' );
define( 'SECURE_AUTH_KEY',  '&*FL@-RfWNv-i6NL )]k(k4G1G>?HBqyoLikt3cmnE{t@aX,LTZM^~huT^UUB98 ' );
define( 'LOGGED_IN_KEY',    '(ttNS]$|{oFZ?6$)1d+q>cf]T<n|}G=E3,s;jH|SSP`}x4W:DCqXfhvnP]NEpW?^' );
define( 'NONCE_KEY',        '31wDs1R7dd26S*,%BNu5+B0z5sw=vexBvTwS3RYP#Z+aa|T_Uu<YDXl>=;K ?$,D' );
define( 'AUTH_SALT',        'fhs~4uD8GIh0g.P+4jG(oq|8q!{A_%m;5#L1fQ?_!Zj[L%(PF:7RTk~)&p@YUrI`' );
define( 'SECURE_AUTH_SALT', 'b5rop/x0`XT,vH}O!Wf]V+!V>R.;KUnX6V0cqUpk/bVH>}Emqxh14qsqI7@q2Bi5' );
define( 'LOGGED_IN_SALT',   'Y8nvu|1-MkxcHEz8{7{S4Dd`8TF363)V9PpU-5[-W;/&*hD*>+/V9[ob2{J,^4[u' );
define( 'NONCE_SALT',       'p!7>_W=<sU[3x.s=/=eTHs}IKl^Sqq>w4}VwYx4:kiIlw=9 60lj|@z[<d((WH6r' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
