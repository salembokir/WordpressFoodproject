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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fooddb' );

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
define( 'AUTH_KEY',         'kbo9t.#TNM.wR*y{;:lFgZ9|89E+Q]0!Q5Ava>e7JIBX.DbdgI@yh*fO$>pm :@^' );
define( 'SECURE_AUTH_KEY',  'iN[INI/7?3MqY!,0H=QlLlv+If:<x!]Rh1OPhjR3/5)+)x+tRZ5NMrd#Td.0fnw.' );
define( 'LOGGED_IN_KEY',    '%.Mrztr?{iYD2doTh:aRmBc1#t=0*iY{wikr_27tOcc-w=Q~B/FT=,f>iO1Ma/x3' );
define( 'NONCE_KEY',        'R<%#a6WX!3#wg)J Zx:|.n|4xX1<[A$>.G;oBW9Y Ihf6WmJ)x<OK-AI/P_mpGfl' );
define( 'AUTH_SALT',        'E<}qV7j33&.+l2J{0NDuC t_x2FZ@Tka2Ea29l)|xJzO#YZ:et{%8(n{QPUq{lL[' );
define( 'SECURE_AUTH_SALT', 'xc)T>>Nhic_VxSN*D>$DlrYkzdm/vxDf-5ty[gsUPK $g8 ]L!E^2UT`,L0LE>v(' );
define( 'LOGGED_IN_SALT',   'YMlxh#|r)sGb>@Hl0NqZ~mYK@e>y6Mm3-U]z!5)!U^T[Hh-AZ4pmK])2@/?H&D!A' );
define( 'NONCE_SALT',       'ZzGJwPqrxBC0BXwfTH9|O;ddzn[<omViad:r4Ky5guY}S7>cyF<92(Wv>isQ>K(|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
