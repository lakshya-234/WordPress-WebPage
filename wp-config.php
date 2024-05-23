<?php
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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'k@;~vh,/bfh:JU!cu*n|[fG#cYwTrt0(aK4o,|JmB(E$mUTpY-0(B{ynRCA,8&<1' );
define( 'SECURE_AUTH_KEY',  ')<D]MvN)F/0!xri$(-3<VNg?F7pY=/R(OItC`  ~)hM<oaXnRQ4&#LShrc .~po0' );
define( 'LOGGED_IN_KEY',    '}CV;UrM]zX$9i8G1i.`G1,8cv7`}Bj&xLd1he_~`l!9xCTdt#8-!7G]f5L rUd`G' );
define( 'NONCE_KEY',        '92P:}u#P$hNzU`Us?G&5]N{Tm30Udlz>G0mb0M:qu91_t+(E~JS3FpRX-J3[UY~q' );
define( 'AUTH_SALT',        '@C#>]3Jb@uLS,{:Dv)h{.1rgz(f-=8*ic$ +94+_Tf|eFtOh/9ADG[:KUmbB(5zN' );
define( 'SECURE_AUTH_SALT', 'jkIHwIGq2wZxpt7mteEuW0i0*w8C1h`ChyZoVt.U4uvt9-J}biPt+R>Y2)2fPOgK' );
define( 'LOGGED_IN_SALT',   'KE7Y:!B=X/FQywWyPW_P(|w/tNfsO9Ec2nQsl{2.=T<jPwz9.Wn_J!{x%B}UZi5p' );
define( 'NONCE_SALT',       'BGf]Y)p<);]9!0}[zNOx]FM!<%K.MJwym:~6_}S`WSmU~oqb8/x_t0;U.r!@aRmG' );
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);


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
