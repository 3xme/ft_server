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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wppassword' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'b3{pkQp|z8voq[@r,Br4-XB~Xs.e+e@L.FZ_BQl]Rlu<Kx!zs/16R~,< _Rs](l*');
define('SECURE_AUTH_KEY',  '%&^uDlrx.{(AUaOvXE,C|_k.$t~B--)v9|l+;!sW-M(6/%U-mW|BSUsDaZ0vU:*N');
define('LOGGED_IN_KEY',    's7{j|7jv@hh#,s5y19gM,a5?cGDqj[+DWQe(mv;+*)7Pd7N->E:AJ0#J0BRVjgRD');
define('NONCE_KEY',        ')D;OG5)2vw|_46IO^=F0a?4r%fB4=S({Kmw|pGfcjZHPzT=5p1a|<qy.wpd5I0@q');
define('AUTH_SALT',        'WoVC -KqRw+` 2js X:4Fxa=}Z[LS-R{?1nG(^A>{!xU>Cnkx6b:bzdF.>AP}5n7');
define('SECURE_AUTH_SALT', '||j5yTGE=X%BeJ;J}s<Qx<<[0Lh)SCUQJBD6pLFxxH,| 4oR6>>yL%NfaXYolusf');
define('LOGGED_IN_SALT',   'Jb~9^Aes{XnbOfx{{r@#v_JMg5MOxzI*`xr!:&NIr5tUO7XOA|c@7ibm&;NcO|F&');
define('NONCE_SALT',       'B$:;Uc3**w4JmuDs}1AH2.SMn1!qWYX(Hl{GaIXzK>o96s=!=eTL,o/0SQSN%Pn+');
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