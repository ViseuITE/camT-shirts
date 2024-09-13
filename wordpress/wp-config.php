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
define( 'AUTH_KEY',         '{_b)z@,u`D^#UMjxU!eVG6ugrQ+M.Tt 6h)cBSyan&IIJ5Yo+2APDSSL)m*ECn,0' );
define( 'SECURE_AUTH_KEY',  ',bQ>Apg-wyJY,:A=bi=en -+ST-ynqF`XA%n%5t,Up|-Ug2DOEC3/~}Ze^h#3M;5' );
define( 'LOGGED_IN_KEY',    'ZYdpM|30l1ruH/BLN#&R3[s-3PY8kEteavwbf(W,+Us~  ~l4]Q?aU~ZS@C mt;t' );
define( 'NONCE_KEY',        'ph+`=<*:*7722QG>n,;9gU,d9I*=}Jv?!OIhZ/64f9fONM]vQ-C 22F510CCZ1;%' );
define( 'AUTH_SALT',        ')X#%!A}JaivsMO+),`O-KG<M3gP+sDv~<%Jr Kp5uO@yhR-#MD(`yK9!4>.C=gmi' );
define( 'SECURE_AUTH_SALT', '|`xs(>P<&<5M,q&[-IX6Td4(m)D0!xw(2l;xq`l:]zLch##P<@EE&qn,;|/2p!QA' );
define( 'LOGGED_IN_SALT',   'LLjj:kCc;^BU5#aP<&qXwFtr}*<.v/tu;v8$GOJM9nyCDmER)EJ0uxj8ME}IXZ4D' );
define( 'NONCE_SALT',       'vX+cbicW7b(wsow.yI5P9}8],tQE1@i<D+m0x1t7217A,bqxYj@-Ph!zg.sUbOKm' );

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
