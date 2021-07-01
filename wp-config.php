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
define( 'DB_NAME', 'ergocoach' );

/** MySQL database username */
define( 'DB_USER', 'laravel' );

/** MySQL database password */
define( 'DB_PASSWORD', 'laravel' );

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
define( 'AUTH_KEY',         ']i,y-DtZ~R<#/|koZ=b{2Y7C>RdB,][yM=s`>97(*INi9`]QPN%2?EV4LlVB5:@K' );
define( 'SECURE_AUTH_KEY',  'l8,*YR,N,b|t)ioDox/|OmOuC5]ySMlqsg2<RQT}OC&?Qq~^v.ar-eJau{N1=5]q' );
define( 'LOGGED_IN_KEY',    'i$w&rtgaFM!]kRIHlWn0k{U_K7!A;L)Ia*dsx2D0Hm.).WXi<=.W?ZjkCyG]ydsh' );
define( 'NONCE_KEY',        ']_jVND.R5$5`+arJV;N0/;?w%hSmC;W[5o$L}nF4-EeJc7RDq,0_BC<>O$aPvcn(' );
define( 'AUTH_SALT',        '1au6t]KFUtn!sVAL#u}wl7D4MB@627!l|TaVPC@b.P1*M%a| j4p;A)fx_{6B:2-' );
define( 'SECURE_AUTH_SALT', '#rR(/p7Xt2ov!`iuCCyg7I(4)4C8t4to&f*&Sy`swpAbSQ*OJl3X2+.Ss[c&:n0:' );
define( 'LOGGED_IN_SALT',   'R^r?zy!)4/?uG!`oWAxCGa*u(Qsp=ECtl8[)5<}T5l:nNbE[?#s=rGI,~M&*.S^r' );
define( 'NONCE_SALT',       'c$fDl3vT<k,soQmr+DNYE=SZ?Fo;pKBzH*qur(BlB6!%:r4I-s(k3KmfZ}w2|}gx' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ergo_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
