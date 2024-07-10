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
define( 'DB_NAME', 'sense_lab' );

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
define( 'AUTH_KEY',         '%Ge)@~_:+fO*jfQHF#t)8(-r6,alxtn]^[G._P{7 A>SZ*I1d+eU.mQ0GjaWUISy' );
define( 'SECURE_AUTH_KEY',  '3x_)3XJNb[#ERh|4uEvfEqrQWR%Vz%m6ym=%C`yPI19oqOu_ ,v&M]+0!?jWIYx{' );
define( 'LOGGED_IN_KEY',    'lhcmkSA,M$X%pMp*XVQaI3_nAd,>(i[~a,,~55Ct6t]KiLXbLz%Ulj]i:ZwruxRE' );
define( 'NONCE_KEY',        'uHQoS0`4*jP.*NW.9~0QXlmuuIGru#/;p`S^@CjgpE~ Hi{AV27#C#cme@Z6YEp)' );
define( 'AUTH_SALT',        '888)k^wb+0stBZW)j/cmR{8>y$>xR4J<Cf2!jW.A6t=1m;CRh2A)/?O!Xwp6U^gQ' );
define( 'SECURE_AUTH_SALT', 'Nz46BhT~pKio<*DXRe+Dnc6Gjc21h& }PJ6U9f{AS;ok3}EfC&}2zjA8_d .t<&>' );
define( 'LOGGED_IN_SALT',   ']/Ay#,0$X!ldmTS9&4?>TZ,}UYjlZP)$$$Y$>#aY^K.!`)&r/=h+Y_P;9>+F d3A' );
define( 'NONCE_SALT',       '4?b|gF6m?##q #%~?#6%_g#s#F{p[bZ`Jj/muIGZi^N|q[<syG|ToEu%kA!0X~$l' );

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
