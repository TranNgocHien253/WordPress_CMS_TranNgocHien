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
define( 'AUTH_KEY',         '3+,<kF6,mLN{upI5eVd~zM$.ZUeZQg kVgf]l;G!nyy Tr^ZD`#z1D|W(M}WVR5n' );
define( 'SECURE_AUTH_KEY',  '),1{IDD]@!z=lxqKS0e_Wq@8N_OSVcRYTq;c&o1=fA>VJ#N7,NVNhwc}5,f56i^y' );
define( 'LOGGED_IN_KEY',    ')(?#N}a#b{PAOR3ZW7.zGmZC!1.>(d2yS;ekHV|`B|3$DnR Ez`#8g/k#/<G/jq/' );
define( 'NONCE_KEY',        'qXW3%vuA75ivm&y(<JdZo`{SrjQ!ehT,d!gzVm&En=a!f-DBQDSh9#h]+9Pj EXD' );
define( 'AUTH_SALT',        '3d.;}4LQ>XlIw pIQs`(QZ%y5E_%O<Naq6+R+vl^!b[rL1}:@<8?H:%:VJ+D2WO9' );
define( 'SECURE_AUTH_SALT', '[A6YD2o4(SuPjIMoL/Z@K]xexendbaF6{@D&}wh#FH9Ac+Re}HLo{ vX1j<Bkc1n' );
define( 'LOGGED_IN_SALT',   '-&$.Ro(U<y%+jsB:)J]8ft&]U.THIO?dCCn[fTBDwk[fJ*t2pl*u??F45OyHU=oT' );
define( 'NONCE_SALT',       'yt/rOw%ar0RO]m=@pMr(xE0mp3<[,(bNgBZ]t7cD3D6cHiu?~{iG8WkIwD$SnTZN' );

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
