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
define( 'DB_NAME', 'e-commerce' );

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
define( 'AUTH_KEY',         'A>!}_jgPZM7):b9>!m7NF)Vkk2L=I}>XD(8VR@<EV`R}L[Eph^Pq%C2FjzbOH1z.' );
define( 'SECURE_AUTH_KEY',  'V/j6ssYjqf}YMj9[@]ErwXT7j?u [sli2iKo?uX_:T.:>TRP0L2O,:qL_29kzqx&' );
define( 'LOGGED_IN_KEY',    '_U#f({d43wY`C][tFVct-3QsYy97yvQn`a~oL:t Cs[q<UfNmo@g>t8U(Yyrps3b' );
define( 'NONCE_KEY',        '33^-PeVvwJU~GxawN .YvqK6$:yF@l+Jk:3^_7!T2>O<XR!r>gi nutB(_`YX,PU' );
define( 'AUTH_SALT',        'o/|SrS7)}-o_8L:B>Lj~~T__N/CV^1SRG%BRtYf>fjC[!#A8DHHAKYK[-^q_|wp#' );
define( 'SECURE_AUTH_SALT', '47{t,gIcvd;f0SuS((Spp S88B&-7P!@8p}UOoa;(<3ex((c-0An/z@T}rhHx$-.' );
define( 'LOGGED_IN_SALT',   'PtRa)K >F3+]S&8:H;cl7-:3Hl2?C~W.H&Q},N&BJf>|c*fChDgyg@_ `r[__Z6=' );
define( 'NONCE_SALT',       'fY8%2cpg+Y30}sfiZ:!!<{-lqD~ItNO0GOd1$kPPC/VB$h-MB|3o[:HpKkl/U7v}' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
