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
define( 'DB_NAME', 'gslc' );

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
define( 'AUTH_KEY',         'IaIKF?KoODY[YxHPJlZOb|BN4,4&_9%+j<Vl5c0*e[Zskf2I9=4oabO}W7eBGzNL' );
define( 'SECURE_AUTH_KEY',  'NLo}8Ou8bOJDJ Wg7LU%0K.oyF]95E5np/aGBB0u,5RIVV~R<9omqX6$7;dv3dvx' );
define( 'LOGGED_IN_KEY',    'o`UmZ-=o0Q[!U2d,_6XhGM9rmd-)j7,Be7<*v>QNz`NHn5K=q)cyF0N.~VPsrxW:' );
define( 'NONCE_KEY',        '8JH$k%+0e>/xWN7PFS%R1|D$JG6C{KI/ni~CiK.kbfzAr]kzsA*`Zf$a1wEIdh3`' );
define( 'AUTH_SALT',        '>91Q#d2#Z-W5.#J^?m%^s# g 54}q-ZjymsoB-.?$&oShq)3K:z;[zAKD8hG/3q?' );
define( 'SECURE_AUTH_SALT', '%|TyRrVlJ-{GtrGQ>SFBQbKrUAu:29/.9<>au`osV*chf|~lV/{ys}Y%5Tr5^$ej' );
define( 'LOGGED_IN_SALT',   '55TOfXVb,rGq.cW4C%vM>m|p>MhtE/Jk7fStdMGl{eq7H#A! sT3O4^GDQN0n.2b' );
define( 'NONCE_SALT',       'sU*;AT@==;Wi-V sx`*_?,h@A~imeJ>Qj1`@Szn5L?G&#<uwJ:E,p0.}e<XN!7fq' );

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
