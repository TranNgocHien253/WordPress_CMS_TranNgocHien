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
define( 'AUTH_KEY',         '4#oFj{`>XN@$cT:?7.{5Cj+p7bLRzU(xJbu[]><>>gJ`U?|JY$4C/vQIh$S~bt]<' );
define( 'SECURE_AUTH_KEY',  ':.0GlUeyIlq?ss~{ Xsv_hfEg+4VvO3 ..jWBT)sMXc+C>5IY5eFJzy+%N9]A|a%' );
define( 'LOGGED_IN_KEY',    '@I{w[-X6)*%Z: M=4?g9;|*Js6iX:atI8Fhhf>2Zsm3&Z*A9((QB/NqquYL7%e&N' );
define( 'NONCE_KEY',        'Tv:eR.!WqyRz,p5HS{u?l~oN>]&t!*nh k]o.X)cg$.2Im*P2Y7XoWS0`l{RpV8d' );
define( 'AUTH_SALT',        'o#J}Cw|*m z:]a^*N92Ya$_md2:iv]ynVOlLq+Lr1;>A{}3C`W+7yYsZ%^7pGZxl' );
define( 'SECURE_AUTH_SALT', 'rFu}-eObUrU7dfos/mn]=Ep ajA:k*OSYE6b-~Lbuh,AR#u/;Y<@;%xp=OcAMM4t' );
define( 'LOGGED_IN_SALT',   '+-oDC5,v:cmg`H0>Ek5AX J6gyomj$z2/l(W~3%3S<]K{bz^4$e#mmoQ]![F?/%;' );
define( 'NONCE_SALT',       '% {)9h4<I&8YPUht6Vcb]F>N9MR6s6/@F7~&*_qxvg<x7@1pbS4zUs$#IKB$,-&E' );

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
