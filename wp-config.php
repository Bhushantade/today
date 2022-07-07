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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'today' );

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
define( 'AUTH_KEY',         'xSK{WQXpF>C#2KnSF)u9#94g4HM,*bhT14)vU[fJw3aM5FP=ZFc ^,bEuUy*NTv`' );
define( 'SECURE_AUTH_KEY',  't*z4xP`V6^/E9:G/>7/OQM5R[~Y;r?$*#VWko20X{)SYc]{0srK]jRc3hR~hBDGy' );
define( 'LOGGED_IN_KEY',    'EG/)?+JgBvA8)5p:5-mb]0>5,h#O0]`tZ/L0wl!WWxCO2Xs^Ge)<3y?*h(WU+5v ' );
define( 'NONCE_KEY',        'ilhrMz:]%wJgRFDyLr2jd7W9OdDF}0i|GhBky47M>(TJ9G+/l{SB`;W7CG^6J=2g' );
define( 'AUTH_SALT',        '0$/T251B*6p?r EmZyZtCPRsEtonN[[V%]=J+hE$sCTWUcP6v*~Hm+[:5R/h!sk^' );
define( 'SECURE_AUTH_SALT', 'Ps`y5ZJBD]6h~L2Kko@kT[bL|T43w8(*buSq6pTS7ei9o*+:1|t(/6O3UV3@U(sa' );
define( 'LOGGED_IN_SALT',   ';mf3D}$gx&*PG6#.]9C:/cef9(N8t!Izs=Ay[x)l*TYQ._),oO,#0Rr3(!~j<z-u' );
define( 'NONCE_SALT',       '3l?xm1EHj7n>G,a.^pl4x|bFhr n_|2RLhZ3V^|LYC=d-Gf@V3+w%9I^mZ]_$Q[w' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
