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
define( 'DB_NAME', 'portrait studio' );

/** Database username */
define( 'DB_USER', 'portrait studio' );

/** Database password */
define( 'DB_PASSWORD', 'WkyuuN0XzU.QdulV' );

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
define( 'AUTH_KEY',         'dmEiu-<v<RSy8y1t:sGW!bdA[fHE[x a_oOw?Ah9bDff2i(p-gbLz*]vL,mm)GV$' );
define( 'SECURE_AUTH_KEY',  'F#xi[JB354Nxaq~{8Z2HG3R.h%r6uP`K)H[vm(l0Tig6Qo/;jugSQC}V&jSfKO.q' );
define( 'LOGGED_IN_KEY',    '?ls-Pj)?&On|dLCc=K}!ZLmiu35JDQtkO<o6@61RLE<z>9T8;px$W^,6gPt)5Z:y' );
define( 'NONCE_KEY',        'cHJ|;Efr[2q%1A39=Iiw*) VD|^whQfEw(,)va ,FbafW-w+-=$5%6FThySPu(fC' );
define( 'AUTH_SALT',        'w7/#5/n<QY4S<CE9aT}yL^},RAq|ria_7`,cFOfgJ8hcN$kQzdOH!)CV]U,F2DfX' );
define( 'SECURE_AUTH_SALT', '`tdr[~%lG[T:w_56a6Qp]>DRjzy6v_^?qWItg4M(r=j6kH(aFnk&KUFg_UM]dys(' );
define( 'LOGGED_IN_SALT',   'tkPVLC=>!:g4*iz/F=eH N-Y; 1u]]f:0(4QGD>50)=|fUx#_&+HD_|fu{/~thL,' );
define( 'NONCE_SALT',       '~ig0}IkdF7b6LIiYgv@MUpWtYshE4p&r:Y4Hjq]R]n))vXF/5O=^$XQzYEl2f_&*' );

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
