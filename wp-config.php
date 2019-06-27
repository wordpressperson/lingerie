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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lingeriedb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'x*Ulqny11<S$%QFC.a%*0;w0KG}BChBrw8E<{k!>!HPqB:%Kj#/^5kvR#kfpOo d' );
define( 'SECURE_AUTH_KEY',  'RT!66[8928A7UY2vj42*-7SfayTE>vll$ciAS]y=1XsQ f#2h19J*K7CRR9ml:E ' );
define( 'LOGGED_IN_KEY',    'ZkpDNP^6HyMPD<|sAc=vQKD|mo^7g7yL052truTlFM,w[BI+;729}>3Sy]Ie%4l?' );
define( 'NONCE_KEY',        'x``rUVquvxZAOFKt3R[v<,WryoYg^-~PDS?qD.L94I8}wsc=A%XQOxm].Vp-b^sx' );
define( 'AUTH_SALT',        ' 4OLQWP KMXHMK#A&kBt{4)))Ul^G+@/QO}}};R+dE_]iw vUS;F6|cJvlC.m%nR' );
define( 'SECURE_AUTH_SALT', '&xllgh<mA4W%(ZNS0Ph2Ju[?Y+]|f_If8DA24{3Fo~xbtyf^:IPr{WTdRa4;PU*9' );
define( 'LOGGED_IN_SALT',   '40~{y&)``tVB|Mh>y_ROVk]4(`N],IluSh%u4Jp/w2;Yg3`mq:~5dDnd``TSO9N]' );
define( 'NONCE_SALT',       '-Hq]Dpp:pONV8lrS@NA=Vq=k0^rfkjDS)D5QOabCuvGfwDoQ_td E|7Dk%(PRozB' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
