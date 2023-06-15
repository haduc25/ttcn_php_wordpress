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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'abcd1234' );

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
define( 'AUTH_KEY',         '!W8^/czhQ|eHm>(W9*&&DSG1BaZAL:s+,;@1UyI_0Qt7rY:5DKnM*AK.FlxMDZbC' );
define( 'SECURE_AUTH_KEY',  '?.Cm*^CZU]B&B,lLq7oa7p,,{+?Uo4~VcH*du|`po!D0ZUD<=[h7JTrne`~-x]iL' );
define( 'LOGGED_IN_KEY',    'W9@}(Oyc4{9xF~-20nythh%{6dC5.a!/7,/I;YF^Hc$l~>>@T[4icanR{f: YRBe' );
define( 'NONCE_KEY',        'Dfopc>a&w_$AC(/LDG5v[}%]K9jd9I:tQ{#0uiGT!Kot}`^#<z/A;8U`E5msu5lM' );
define( 'AUTH_SALT',        'AdbT|Fl@Ex&<r_QGBFD0Z0@Wt NX3sxDY0JuQ7djY@E3bG$*9GMO~05$+Rn.ED^-' );
define( 'SECURE_AUTH_SALT', 'QeLR8z{yaKH+.hyQ~*$.S[V,]D#!IIoQmbqO.w)J}jJXM?<R4AAt#K`k!ypvFa=w' );
define( 'LOGGED_IN_SALT',   '`xDUdtNUb*!n z=,P,LIao Atej)RoW7,6OE]:[rH~/~lzMKJ//|/=wUS^*XEi0m' );
define( 'NONCE_SALT',       'R>5]CiIwqrm2)~>=hr=Jb<yz!SwzLE6G<G-^]1.c6!}0Flr:X<zZE^2G,@0.&NJM' );

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
