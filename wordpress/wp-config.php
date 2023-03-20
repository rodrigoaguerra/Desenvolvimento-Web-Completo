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
define( 'DB_NAME', 'wp_curso' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Zzbsow17digo123@' );

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
define( 'AUTH_KEY',         'dp(<hx&J)!?8Xa_~Z( xOh$pu*w#?7XV3o|~FsRznnneTl??vNgF0IwE#]r1?30u' );
define( 'SECURE_AUTH_KEY',  '@6fRbf{<X9I!HhRKFp+$?Qe6jDiWi*X&y4)6|Hf^u[*]oLNEi=Gks]xS7X6ZOU71' );
define( 'LOGGED_IN_KEY',    'ANt[]EK)g,M-vCm,oKU/jg-*S$vN:5Xp&jjM,HBr9cKg_F5/sRNDH0%i3RlmGV4V' );
define( 'NONCE_KEY',        '(ZXw0yXqIf^-mvW>E(5O#4`BB_(t7J %D]Pn`XzSm-j]N7FWD.@0c><:ieKs/1vl' );
define( 'AUTH_SALT',        '8(E!qO(-X#AWdAW.E4K6z1#=]))DE6$bM_)$Ex5$5cQU6h|?PvG(+tc0[r)BxyV}' );
define( 'SECURE_AUTH_SALT', 'Q|0F&O&`!V0!SPk:W=P?YraTp3gjXv_-uTe[OaqmcC{)d}ZRUj6t /7~JC/9!|LW' );
define( 'LOGGED_IN_SALT',   '02%+85Dtjutc9?5YX|GpJIWys,VTeqo;3F_Or?{mmlY!d;1T543*wN?>)?n4Dc]}' );
define( 'NONCE_SALT',       '30C-#>7g?a`&/e6RhhlfNFRN$Z;74E2U,$RK~Ihr? ^CF?<Z<I,xOmiOU%0R1;];' );

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
