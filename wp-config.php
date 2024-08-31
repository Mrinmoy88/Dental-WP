<?php
# BEGIN WP Cache by 10Web
define( 'WP_CACHE', true );
define( 'TWO_PLUGIN_DIR_CACHE', '/home/u505426395/domains/arupchattopadhyaydentalclinic.com/public_html/wp-content/plugins/tenweb-speed-optimizer/' );
# END WP Cache by 10Web
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "u505426395_dental" );

/** Database username */
define( 'DB_USER', "u505426395_dental" );

/** Database password */
define( 'DB_PASSWORD', "gY=8+784sNQJ" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'WK {VAxT0-=D|fl?-L:;>n>9NY)h;LJ4# %MMooz_xYWN!A{[x7<te2l$t?H<7z<' );
define( 'SECURE_AUTH_KEY',  'BE9Ql*Go*->?DVmPyELeCXvylBFR|^6}qKlH5qmZ@Sy[~x`s=aCk5t/n2ta7L|,Y' );
define( 'LOGGED_IN_KEY',    '!.+XUf!4B;2Lo-.#ARoxGw;WjAKD?2u> )-Kw*NTWD_zWD%1U+c@3dtgrhvgG5do' );
define( 'NONCE_KEY',        '5&q[/ng n_fIEyfrdbR7vt/>>`~xcu-d^Z[-pKBKrrm+p6A;kJMhY,_<_V9UL9U~' );
define( 'AUTH_SALT',        't0&:3@9#nW+vG8Q7MR~:3c,{N8k6MIehZZHrk&J^C$>HK*+,]wCKGlmT$!UZ[x~k' );
define( 'SECURE_AUTH_SALT', '-1mm3@t?MVZy,alE p$[v?!P58w`.J>6[jkyH]>fzSeJs`x9600niv9fD-{}0uak' );
define( 'LOGGED_IN_SALT',   't$`sKqaEWn$5W%aWiWD#CwI8XANx$afw{ECQk-_px&VnCv0%hs+Aps*hACDYA}Pq' );
define( 'NONCE_SALT',       '?psI6f=*4s{b<]KP_$*j)p a>N;iDy_]n}$7/1~Et~;>.KI[x>-4i!#Dg.K;5?!Q' );

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
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
