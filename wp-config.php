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
define( 'DB_NAME', 'me' );

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
define( 'AUTH_KEY',         '2aVyE@Zag>@*1FN(?w5bS?T>(5{BlwcC8Er242&&Q*E{W.(|6l>4@z0Td,rP[(y5' );
define( 'SECURE_AUTH_KEY',  '4j}2zs[<hgD;XEd?u0t|McK0kjgty-`5/ElVPck#TOKj/c^!j0Q+2Dh~A:EP#RcJ' );
define( 'LOGGED_IN_KEY',    '6]?ueM{@#%wFZB2nt1q(s<Mofr>-,X:DLcNsL TPV@y3VL&!$G.2}?Sb~dD!2y&N' );
define( 'NONCE_KEY',        'S{5{Q/_r>muT~G7,r&{ZAlF 2l{L@52)S0RYCGD^PgYf59eWV<>a/S3@2c}ev&d<' );
define( 'AUTH_SALT',        'Ts@iJhq1?JD3Z3@fWn=-,?=dwLm4FK-cz5w%mEX8N:~Wcz&f`.&d]T}3iP;2IMQH' );
define( 'SECURE_AUTH_SALT', '6Dz_-CF$eMPR:b4n13iON[jWD/:d8}F[^V;i0@2-[(zTfhuen3l5;08h=x[J2@L/' );
define( 'LOGGED_IN_SALT',   'GmN:L)/IB;`#ig]e.8${u]$>.np#p. iQQ?7m){yBFMr#8.F_l@S0~6!:Q+PTm&H' );
define( 'NONCE_SALT',       '@~A=yJyh3+bQ<}St3EkDw}N(LK*Cr+WiDf=uB.<G:N]44Q>xAr?/V@N17(BZ~+#i' );

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
