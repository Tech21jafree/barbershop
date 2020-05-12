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
define( 'DB_NAME', 'barbershopdb' );

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
define( 'AUTH_KEY',         'CkSL^y4QpiaoP=Yew1G(5JXm:h<^p;/ZFniGealzzBsbxoM71/z(KTH/,DxU?mPR' );
define( 'SECURE_AUTH_KEY',  '1SD_@4LlYP&5f<E<~mj_;{:QFYzKROF]I!q 8$GnZ>[Dx4Vw41c^7x_|nkD.|Tr ' );
define( 'LOGGED_IN_KEY',    '8][&P?kvs<#jo3}NgQL%?7@3,Bo:frzXI<tI)g^314ce!Y1pCW.{n<@w<Q~#Fe0-' );
define( 'NONCE_KEY',        '}WU]c_{sn;rDgY[L iWIHcx)pLpKsKPJPhi&T=VUxa:=z^]]]v3pdF(<vXI]#87%' );
define( 'AUTH_SALT',        '=M(Z0FR#mzPVw9!ORZ-Cpn=ae/#O9]`CMsdCnIg;s&Zn{7$[sJQ%5*-H<A}0w>Fp' );
define( 'SECURE_AUTH_SALT', 'D-VDZ8p~5EQ,$hQr9*5(#n5oO2&x9;}@6u*xO&n=[]?Dq1o!l6>zfX<GSBG7mi1R' );
define( 'LOGGED_IN_SALT',   'enoZPi1as`T<1C2cfZM(MH=y0fC:!@#RsBGDP;Ia^ie)3-cFQS(7p`2!UFGzoyl>' );
define( 'NONCE_SALT',       '1y`J`Ha5uZpgVf;4I+D&gNuW>un@LDNa+s^[7cr=<MEFr)O__zb^u6wD@dE q;-:' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
