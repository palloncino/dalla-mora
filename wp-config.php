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
define( 'DB_NAME', 'dalla-mora-database' );

/** Database username */
define( 'DB_USER', 'dalla-mora-admin' );

/** Database password */
define( 'DB_PASSWORD', 'O@M365763V' );

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
define( 'AUTH_KEY',         ';QgE22]&j_*;Q2KDZn_;Gpt4G:q8UVMf5gh>wQ!xKvMfiIt<~?*GL `esS<|Rm+D' );
define( 'SECURE_AUTH_KEY',  '-*0/Lap@L`rm3VQ;)YNz.>_DfdfF!0=-#nfP#6t[o$XH2H_-OC=)hM86][3DO_63' );
define( 'LOGGED_IN_KEY',    's+3_6#6S8OA_qk&7uu{TF,~B9X*iE-}c>E+S[BLvAq?mU!YYtG|lLrOD~YgCA`,z' );
define( 'NONCE_KEY',        'u04Kt:Wc4o J($~::XJL8c3_Zq_K#~Q:PW%X~[i>+3(U$Eh34v00@/,kfSkTz;iJ' );
define( 'AUTH_SALT',        'aRp~&ruS%2w$XCuGK@hAc;$BL^}%Nk|t8^4UtRqrH_.cU5kch^ ,S[hZZz_|6djq' );
define( 'SECURE_AUTH_SALT', 'J06m5|{!qK0f9wk^_iU}:KA72d`h-$_EzjLSIm E.WVV(m15C0a7I}<=UzL#b>KQ' );
define( 'LOGGED_IN_SALT',   '~,N:Se87Rl|Rs+qIgX7!pm#k|s?L&?Y(jF`>0{t@09<!hw*:(s>e|!Jr-U;~UfD4' );
define( 'NONCE_SALT',       '8vU^|M:a(|u>mQ]^dF8,=>5/$v[^re*=EpHVz#Q)+AGIzn*XkyrGbPWl>[%&5=SH' );

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

/* Add any custom values between this line and the "stop editing" line. */

// EDIT FILES
define('FS_METHOD', 'direct');
define('FS_CHMOD_DIR', 0755);
define('FS_CHMOD_FILE', 0644);

// DEBUG
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
