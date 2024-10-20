<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'wp653victoryera' );

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
define( 'AUTH_KEY',         'Z*SE/|xW_}s[?g7]3>h,wcG^(f[9a}=q,IbyHnMSP!D4RNI,)(}[qLl]V&myyPz*' );
define( 'SECURE_AUTH_KEY',  'Axj?B%SZ@Faa>(/=}G}!?- W S9%v?b==TR<?DaFkA?n~CtI_KJcMVlJA*%^-yj[' );
define( 'LOGGED_IN_KEY',    'O/`nm(w%v+)9nO+dO0%g5::mHN3N%)+oThJ:[5>A6s5$ 1-5<G]4.#bH-&%ad[:R' );
define( 'NONCE_KEY',        'c$oiHzHM>D]4.~<kVf:-/Pa)9]>$.>$^g2>)omO0k<UafGlxX[Q0i>$8cpLIl)nO' );
define( 'AUTH_SALT',        '3Z=:SYepK6T!1JcbdkJ/l%myC|?}.c fDY#GjcM. 98qEjHf>dDj1yYZT07w1h{O' );
define( 'SECURE_AUTH_SALT', 'w)sNNlR_U?`nKsUpb<,$pB9EPvrr#Jt)%4gT.Cx3l;sj*sS:~&hKKR(K1FmNP$yn' );
define( 'LOGGED_IN_SALT',   '^<p*M5*&mtKR3q0Xwh^DG5(%Y&R~64)XbfOMm^_oDhCRtO(`<$#TlS}<wUhFvLmW' );
define( 'NONCE_SALT',       'k/isgpSZBqDV,fJia&NSen!ZHfXX%O]-UF`h_ULWj-)gu#%DlKe.2!(I}L$8=T(l' );

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
