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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'feit' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'f6Jh3<|o1$D?V.c*rc>T+pgqC;VGIK+jF}uc!`(7L`In6<SU2c|]=h|fKm{y!tEf' );
define( 'SECURE_AUTH_KEY',  '`//I((,1>9>~@F}WA>@$?v`yWbpdp9+T7vN4lsh$@;Yg-Aa49hHU2D41CXqe7;pu' );
define( 'LOGGED_IN_KEY',    'J5I&a~}qUe,KjNY|J)cf,^[RvNPkdS;QA9g|4,yhzzl[@y6A) }]FlF,QrLMSYtF' );
define( 'NONCE_KEY',        'C]`r/Q/@K)Gf]3$B0@c-}SZ<5<Os]nYE$AOh4zC><s@nVC%VQ=!v 4u!ziSkZ/*4' );
define( 'AUTH_SALT',        'A%qOG&{y_keGLHkassl*KoDJv_?+?wj-4h(]tKHl>cz`uk0**p;wu,wR[Z`)plI/' );
define( 'SECURE_AUTH_SALT', 'nYaDA|Eg]kQ!xkK1EwqMl8hKb%<HqeYT=}r4{vgu(k:gH|!l1&QF+TdUp;O:0pow' );
define( 'LOGGED_IN_SALT',   '[5&%*AggB=%~i3!n i,TD8pr|?N&>crE3je{.J5F003/0r&ejE/,6G#PdEHahG^9' );
define( 'NONCE_SALT',       'P$OZ5.B0Go|}9Fh5 _hPs}-pln(w0fD9;p[$@|||=OaBRU,8650(Q)n@*x`WHn,?' );

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
