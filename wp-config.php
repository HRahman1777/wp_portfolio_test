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
define( 'DB_NAME', 'wp_portfolio_test_db' );

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
define( 'AUTH_KEY',         '[uy!JvTZB;xM?^{Dh:WLbr@Of(T$y%!{6roqF67m~RBv.0}bSxM&zF$TM*tZj5Vq' );
define( 'SECURE_AUTH_KEY',  'wfcih]%o`-&AY)[=V$mR!]P_/j0.8: VHq7iyCo3;B8e/gK6/6KDI.*qaDERAzf2' );
define( 'LOGGED_IN_KEY',    '`QNU63BS6$9K&k}-BCkrEIHGT,6G4;jod?.)dz?4_Cr[c[_kg*)PWWF3{{Mxh^+M' );
define( 'NONCE_KEY',        '6jj7iXrMsANSiPRnoG2Hmy%MS;Le0$V_};g!W3sa}:7>[<U#f3Fj~U-nD2=.|oZ;' );
define( 'AUTH_SALT',        'aiN%e@S+>L&EM.6d=@&X%iS~.$~$I!QijYOz9q}rb3$0U>nIoIsk |:y xcjolHC' );
define( 'SECURE_AUTH_SALT', 'r)ul2Ixg:xR )|b]O5C1HIvDj1G:% g-% =8B!LkWqh8b2*uyR7,7x:W}i>NQ{w&' );
define( 'LOGGED_IN_SALT',   '3X9#-gu|8lnaZDd7!jTUt5rJO?4qXew*!4I#&llw:+:/&FdO$dfv%WW-%`C^6v}5' );
define( 'NONCE_SALT',       'R:{L]5M&tPw98Ns}YT]UL9v3&n;=Fh=a#,#pYoy=KVfR)k]]b)J{u5[g>/gS1%BV' );

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
