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
define( 'AUTH_KEY',          'u6^^Kq5U:(#$vweiE4ia0O2H(M]1&U*;Nc#)*oqu3-k+!2#*/X@s{-yZaF4SA}A;' );
define( 'SECURE_AUTH_KEY',   ',6ndOm2J*a#m*?1ZpjLfX{5n.I,(}z=%$EfP|8bV;BzZwj|yrOvpnew{qsD[(y>l' );
define( 'LOGGED_IN_KEY',     'N&qThll9f)t#g|PF{JneV yKofI#ucl8naAJX dSF?DQJZ&Bz4=l&Gn=XQ4VF[2 ' );
define( 'NONCE_KEY',         '!Y mjmUQudtGywO1^s@s#7qzBOt)&Vgf&,%X?Xz7F7{~t)Ef+#4HpV{6w^e<+)e_' );
define( 'AUTH_SALT',         ',TrV3:{dj)J-BiCyvjikM+H,<|K r&TLXFwzjZ<fp5eoaTZD=jp,)&J9=P=-8uy:' );
define( 'SECURE_AUTH_SALT',  'KgG/im{=cK1#c-!5_mXz)ZO5o}=Jc}Wg[BKQ V9Z?v^)<rf/%_s(q`h%_6LDYA|+' );
define( 'LOGGED_IN_SALT',    'bJp(<2FfJ4>~7L:Jd8qN$7v=8e3S%o8/cymB2]{VaFw3o@Uw}4T!G@GXESki<~Z-' );
define( 'NONCE_SALT',        'R7!Y:2JUH&jHzV/Rax2VbdXG+;vnM+ar=1J-mnDZ9;<b<z`%OQ3PT//:y:4~&%%1' );
define( 'WP_CACHE_KEY_SALT', '9]}~?!Dux6xfzgLPe9YIV#{EwnDM[PVsXHq,oJ4FPSu=hV51X0)],.,@P`~wEC-V' );


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
