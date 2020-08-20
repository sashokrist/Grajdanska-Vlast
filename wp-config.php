<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'human' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'NO&ZgS7B(bG=G`^2J)r2<{<|pfCvm%SF#k^isoeczFhO,uOqswc 0i#X<c:m]%wh' );
define( 'SECURE_AUTH_KEY',  '/)GU(4UcM2tqj=%w$;VxD,Tw@#l;r-KPdh7{os3vv>hKI4EYS<j-?q~ hT[Xr]}X' );
define( 'LOGGED_IN_KEY',    'j/s7-Kr1jzCL)V=-p5pC38X_jF}vT*M*x)iO}MV^?<L^0qmcF4LzMPHr9IYDi6jA' );
define( 'NONCE_KEY',        'aNDb`D34KP%Hl)+q!E}:P??Fdrkx#s>,W[r$7Fbe,g6[9<}k.rJGj3ev xFZyEIJ' );
define( 'AUTH_SALT',        'jV,1Y1=L[l@S~;I~Hkyg2nV4bgCu,@UD6R*omMsJbu&:0RZ/Py8IcXBRi0ZnG9^e' );
define( 'SECURE_AUTH_SALT', '@*S@? n,`8WFQHhs_jG4LTMbt-;JY-xt?ICoh2rw$9h_@#Qjwc`KtH.2`kTc#+ki' );
define( 'LOGGED_IN_SALT',   'k;<n0}&mIh=4YzPPFe5Z9(#^:y{ITw7_@ZR3Z^&rnIUI]*#z3}rp|RqwE8xe_?1u' );
define( 'NONCE_SALT',       '*_ny:):38CaAk~0fg~>IA}N)N2m&reZ|!#f3NO:z&d|G%k^sv<zN-1)&eGj:s0,n' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
