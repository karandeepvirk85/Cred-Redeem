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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'paidsurvey' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '61171nt=g@~yQ=HA{~>vAzdq7J>4=an1Tt4f->U AXW*FKoMcj{Uu^aBCfs ~FXI' );
define( 'SECURE_AUTH_KEY',  '_AjgaB[f#?UU^u>kos*%ATCcav]g6?H^K=,*(]]SRyaN]o,%wL1RC:CTJYL;QU71' );
define( 'LOGGED_IN_KEY',    'ZIX  DD[KhGX+l[kZ@=~Z819k,IsO_9cHKR0!c#`&h2:vA?6VdnhJiLRl0C sW~[' );
define( 'NONCE_KEY',        'J+,:J#Clh:8wnbZmMs7aGIi|qa$c.w>H)iZhm-=a3(=-oR4e0OtXO5e.0s7&-0oy' );
define( 'AUTH_SALT',        '7frlc(qdb`YE0btg:?b ~V2cs.W*|RvF-TUYG%wU0L9O[vm!y v}d4a8-i;Xe,Ea' );
define( 'SECURE_AUTH_SALT', '+-(: MevrQ+vKm .je-k,q37IDbarlyX+mpW0}n1~h|4veOrqe~hBNHIw,RR?Mf]' );
define( 'LOGGED_IN_SALT',   '4cb;^?IDhlQG4HpKBwmn!DpU{6/=@=HGP*rOSIViqT<h[xfKG4G)Kys_goRQo<n2' );
define( 'NONCE_SALT',       'kLoTX+y{9=8)Vx,;gepTK{#IS9=@zq[or5os.WQh?2f;t);~~*owH]X@PTtu`/JD' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
