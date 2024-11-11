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
define( 'DB_NAME', 'alwan rizki' );

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
define( 'AUTH_KEY',         'M:M_Vqkk9p5snJ(>3sA0gR_mWk7#(dsoFobET!*|^Q5a#h]431AY5OD544-e<MHp' );
define( 'SECURE_AUTH_KEY',  '6z^P/`z]DTYu5UTaELug-;l8]_$88AW#i25uG4OE0QNz?h5#p/>Sn+D~d_]QE/vR' );
define( 'LOGGED_IN_KEY',    'mD4QJH0&U{noF~HkoHkxnc>&18dx9reaq]gaK2fvj2[VjTXIRw[3W70xWuu3ant:' );
define( 'NONCE_KEY',        '|At<~5O(oAS/(f0Og%egOuN8,?t,e!~rJu^OaV=a}])Afh&%Vb<v;1AVp+Fy@#P~' );
define( 'AUTH_SALT',        'IL?VFZjNzdVBTi}jjYfCait4RdYLQ{qa.S{(10M=a_-,bdW5]`[y(3*fBDx^$wL)' );
define( 'SECURE_AUTH_SALT', 'W9.v!vV?4cZxiQJXRb#wCjxe|I,#q:dzN$sumjitVs9,q@i/_g<Y,<kx?#-<F(8L' );
define( 'LOGGED_IN_SALT',   '?NI5y*C|g Ci>X|oiUmJGp J^b:0(?vc{<a>MKMJSL;+AYycnG}=t-w$UC#O(8gM' );
define( 'NONCE_SALT',       'w9O[%*=sw1tcu9[*l.2OTUATLdlF2.1?{}UEtm!,4?Kv7)A~Npj0ofuW}3Ui(OQH' );

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
