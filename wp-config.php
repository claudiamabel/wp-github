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
define( 'DB_NAME', 'wpclaudia' );

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
define( 'AUTH_KEY',         'UU^yTp]xD70|@U8i!uH @l~ fb#+WE:5>$bn~y/PpDMeX$DtlN};qs,&k!]E9210' );
define( 'SECURE_AUTH_KEY',  '57K6<z83a(`^2U5!};?`6TQ*/%{vl9,xG4RW^ozJD0M8Bq&DO ![m({Gh;]RVo&P' );
define( 'LOGGED_IN_KEY',    '>L^f).xa&$HY<%`)O)QG8_}#nCiA ;Uhde7x>Yen)M+EoOLC-#.Z)+T<@zeQ>&<?' );
define( 'NONCE_KEY',        'D!4Mc(DAjKx8H497e>_pN`$Y_L+{b!/q#;90$%F9mcZpZkKnRcBuIqY~B-672?Aj' );
define( 'AUTH_SALT',        ',wkmFn5:VDV55//Axb;lO,{-UB(Q!tUT$zv`6ZRr+j[J6e}v)v.AZ+t+xU;2%(cI' );
define( 'SECURE_AUTH_SALT', 'Ctl4>u2J.} tu1Z#{:RJG)L~Ee:JBAQ6<_NfL3Y xzEn(jGfhE$$:w3:MIj`5(`W' );
define( 'LOGGED_IN_SALT',   'wE^9=^UPYL1G9Gdd%5+4k[MtQw`Wnt?tpatTr>i.q&e }VyUu=fH{Yk{0nDN:QP3' );
define( 'NONCE_SALT',       'fZs$~2y`ZmX~zU;Q>G35-$aUDY_AFb5{#+A/Y4YY9vEb|1<+6?0? aERYN0Qnb4(' );

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
