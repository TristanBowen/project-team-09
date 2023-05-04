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
define( 'DB_NAME', 'CP3402_Project_DB' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'xh>v?pAkE9y*+ZT1@(7G}!Oo~ghW8HhZ=4{cPCo4$8 m[)pn< QI8aN>&.G=HHZ_' );
define( 'SECURE_AUTH_KEY',  'vB%$@d}tE6J+]mM)60k@&6x}pm<;9 D(uOm#O#cD|XfqC+Yn}#|fS3d)^v]|M_i^' );
define( 'LOGGED_IN_KEY',    'tSZ}*m<|Wl}%[4JD]VL>XsurV]<02Y~F:7=zrC52nX,fYucq|jKsujkyF:?6`x6I' );
define( 'NONCE_KEY',        'r0<*7a@V!s&WzkV1Dy@!>l|1KFT!UwjC6vYIW@A*FkvLlj{7A|/O}[oD?;<AN3W,' );
define( 'AUTH_SALT',        '}xHib$(Br$}hImU,-.eht$U,Eao({7 `eJ97Zl0cpWhQ^*#dDD8Y)43r@A|2`x(A' );
define( 'SECURE_AUTH_SALT', '`fV,``?h pU3s0&aEk|uSp4jiq|CkGm]+ ;vkmQ7Qi^!b;vfy2zS@>ly[Ji+S & ' );
define( 'LOGGED_IN_SALT',   'B^V~iQOBy-XmgkXE4Fy<r5H9sKO<2CgO#5z>A.Qc;-x2%mqFNoDF<FY0 >z[>dn0' );
define( 'NONCE_SALT',       'Kml-P+uRW<yd`S*42!SB?:q(S[H+NQT@VX7CfL:eBG/l O E/il`WO(~dyQtr]$J' );

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
