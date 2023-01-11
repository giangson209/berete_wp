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
define( 'DB_NAME', 'db_berete' );

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
define( 'AUTH_KEY',         'E<3RE/rr%xs_63.lC+,/,0Ooxs`_|&3O9=S0VvK(Dp=!8Fr:JCArBW8wC,gA7D<b' );
define( 'SECURE_AUTH_KEY',  'VrjjcVe#k|_-&PcYknI;Y[/0z(S}.%6ug!RFMq@t^a`q08].=8HFB0MtZA,_g;+)' );
define( 'LOGGED_IN_KEY',    'Iiky3{J|lx(-LQj9ouJHv8TCaBuXW6|-!+w.P?{0kmqFQ|o@}u{02^Tc0jkAX4ya' );
define( 'NONCE_KEY',        'SiZ$(eJ89Fa/x4i@]y)dPODG@!Sz|kx!mjMQzF[GXB_vU86*JNX1KQ:sF_M@9R$s' );
define( 'AUTH_SALT',        'P`E|@iu-0c!~P9.<2?Oowab<6D{(e$Ve$+..t|hc? X}A0WZ13K.0^qk;{xL][)?' );
define( 'SECURE_AUTH_SALT', 'uk68-S_To(vKG|A|coKUkIRg9PN0P<36Q~;vXNiUL@$xm%r/9@`(q;T;FqQzZOwQ' );
define( 'LOGGED_IN_SALT',   'VF90N]FoBoTE$Mg@Mz&Z@-rpTaroRLCYQf @BC%k5CIAc/IT6(1=k1dj},,^X,=2' );
define( 'NONCE_SALT',       'fdUaSuIo|Oz1*:CbIQbV`KX9?;KnnAh!-@Irsm{D/mI}9UswWwWv)qZ7$ZQ!Z[n1' );

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
