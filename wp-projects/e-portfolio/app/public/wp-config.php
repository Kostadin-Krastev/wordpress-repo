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
define( 'AUTH_KEY',          'l3?j4;Lv*2=CO@y)W.dIZloak=X7sZgsGHzYqU2{HE>XJ&O0FQLoFti55{V)%fvW' );
define( 'SECURE_AUTH_KEY',   'F(MHlvr}S=:lxB|Qjc8u:_xo|gv~8G90.=ZMd/cEP4mgG}tQd=SKO!jffeZo!l$n' );
define( 'LOGGED_IN_KEY',     '/X0YhIeK}Lx>v[2A8.Zo sB9*zoRaaUF#^7QKCc*xaT`aq#tu|fSt+ I#~R#X8^a' );
define( 'NONCE_KEY',         'J9A92!pMC7LMrj5qmM}vg0c!)F?WQ} QH[ jon3ycMB!dsY`WTEh}*9tpPre%&^U' );
define( 'AUTH_SALT',         '!XP&.ovJZEc[!b/r&>U-o.r~zWS7o7Pq:neR&_gN,3:`<jW~t<gGl!0.ld^<JU-:' );
define( 'SECURE_AUTH_SALT',  '9[w~^aq$-3Dzt:<^!}5f`8&fd:MxamcWW1Q_)=/b,%VB>~W5i$Ke>_we<A<YL#v;' );
define( 'LOGGED_IN_SALT',    'anjm$.u&h/A3{,%+tt3UGJRuJy3y@&-dRpr&G}NGe=hV!|7cX<1l91D}%>cD]VYI' );
define( 'NONCE_SALT',        'k9V6)1!PjymlA0CR%J-VUA!TF^LcP4$x@2VvOvN6v4lA?`L;a=4;(IT?<:%afk2Q' );
define( 'WP_CACHE_KEY_SALT', 'z@R9DfhgCn+tDQ/^#<Z>X{mw+2U$SM/*ixs?4%wtc|(h}IQPfhND~~@2|0@uZv!b' );


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
