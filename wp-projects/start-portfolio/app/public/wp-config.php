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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'h/jNu,6>8VKabCU07]xlY~,]m=O~({YC+xpYP,ik<wxVJ+A9E+Q6Zms[A(:o<<&p' );
define( 'SECURE_AUTH_KEY',   '$/T=d>el^tddBlR/bQbt8e &`vN]$A<+hpJc% L[gM{Sh~K?gp^1i-NNJ8v%h-@/' );
define( 'LOGGED_IN_KEY',     'tUY`YVa@#!G4~Qz.Y<9(P;,u%g,M}85^r+9s4fIt/++cy(c/c|[k:6N/FBV&4zV:' );
define( 'NONCE_KEY',         '3pzx{sKQs<J(JkQ*Z;!L7_d(OZCT% [aif.G#t$y/Q3X)tR@d%~y7uBq@Dkn}JB)' );
define( 'AUTH_SALT',         'XX2upO@.1;zaOt-wJhrWtn^Cz[n/t=1Z)pCKs9.i47A:csc=S:ZIp-Rm Zy$.3H<' );
define( 'SECURE_AUTH_SALT',  '2V$AHRE1zca!)?K85cYG{p>]JT~1d`_tf6fu,hj)kwj(Row=@bG:=CG}r;7F$X&1' );
define( 'LOGGED_IN_SALT',    '|SV]_Vd;*mW{b0feA2fU3Tv|#::$,;IL2~@6W}RmKgO*j8lx6^cM8X^Wrg#;:=Z)' );
define( 'NONCE_SALT',        '|i(n:qD*,8lZ8uUlixDrKw>pbTLhYm0~^]^M{Z&~d+^::f(l/s<RQ.P3XAUTON?)' );
define( 'WP_CACHE_KEY_SALT', 'iLceUBvKYT+]NV?sQ)XVb*RsI:*ty$y~|dvWh8CO]}l2,,#]*Wyw$Fv0;[a&YtZq' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
