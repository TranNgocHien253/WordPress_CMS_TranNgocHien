<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ' Tr{UGpe9?,^=Z^!oD~jU^Pw4=!_-tA0$tTS~8zdeWPMNw[E~w4?{j1X:Ah?Wq{!' );
define( 'SECURE_AUTH_KEY',  'zIcBK$x;$/t*xnCNYO2LL[h. AXM{YLG^0fxr}OEGlfuk7nf0GZ=7^A^AL$T#>ja' );
define( 'LOGGED_IN_KEY',    'h#:VfFeB1X9-j47+pD=YYNV]Q&&!UA{-$:-6 EL-3JIR=pD>WG<_1^EJlhrcMo5`' );
define( 'NONCE_KEY',        '-6G,dKUv.~Dc5_9,Q7c3917R.LoO-6M+@n&kbAJ;*szb9vDGEnixQ~^c}..2(g?x' );
define( 'AUTH_SALT',        '4cKZ376re(}%dC#B<4Rm%xi<|~Ek##:&%@nXG?,@ ]6*6b^oA?ArEpqEEkvVSYfx' );
define( 'SECURE_AUTH_SALT', 'tE1M%X#F@G7FkuUZLgp`mu=PZP-+A|Jj4iswH;XE,5;H=b3ls@QR38#6_H%%(tuT' );
define( 'LOGGED_IN_SALT',   '/A`Y`4lp^yVv${8yi>7:[qD7}-rTk54K)Vw6`+lxukn>0`=^`xC)_[%~FSwe;/!D' );
define( 'NONCE_SALT',       '<GIhWy@QY-C|==R=TIGH.$h:Da7BkfSi0Z[H@>V3f:1cF&)f<_r=lw%F@byF!Z6t' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_cms';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
