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
define( 'DB_NAME', 'paymentdb' );

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
define( 'AUTH_KEY',         'os#<bBg>UNq+?u3-jZ,I98VyN]DnT{KoD/nu%:&=9Cv)-QLm: N?aMzuOS$(.Cn]' );
define( 'SECURE_AUTH_KEY',  '-;;y-%EKb?1z+5S*6%}GPj^4 >#GT`yu|Dz}t9]+4GBdb_J@8:x)/bT[}^U6`7rQ' );
define( 'LOGGED_IN_KEY',    'p}7$D9htsn A/]u.Cp@6~b$Rf`1C*KGacRu46nq:-Sd{ O$gj|}/ Wc&Uh)({Vf9' );
define( 'NONCE_KEY',        'go7v@Xd5l?2Vu7d;So{]nL3: n==$N74>%[ZF$MS9z. (SMK/ae1ia8uFgY:p[Cr' );
define( 'AUTH_SALT',        '[NX`@R~=z|Cj<cNP%GTOufJNVy-88|8a$,*Rvtk2Orb%|q*K@DRHLzS0H--G}6cx' );
define( 'SECURE_AUTH_SALT', 'a@t!hQjKC5HpK@+ygTVB7^Q^KTUn^54LR02e44LK][Z@2opOW:FA:Jw<l:Y7[SV=' );
define( 'LOGGED_IN_SALT',   'H5j>`pX2Ns-yYMz0>(-Kw|#lkZ|0wK#Jq~B2Gx,l Hu> 50|J+(dEWP9poE2ZkGm' );
define( 'NONCE_SALT',       '_Z9nh6z06UL-|rL97wMxRi:K/^N&kGrK&fgvhN!Wrl{MK8FW|fFs|t9B<f#H;^dk' );

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
