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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'fFdu3JgqAmWxLVmihM7i4LircHy1b5L5pK1eYoq72dsXKSZYkcPD+hNBsGInO+ZTyhH/rJJoqEbFTWzgqqA5AQ==');
define('SECURE_AUTH_KEY',  'RYH4Udah+TgDWkY9OyIdZ/6+cq47e/BQQrhtirRLKPTJQ0J5YpF/dBAr+egGSmOr28uGt6x7ej/Z4ZmrjpJQfA==');
define('LOGGED_IN_KEY',    '7HEIrE+KWHB5LwOeGJHZrMh1LujKJNo61DFLgVyHm8vJVS+na+/HwkdUXmTqEPP2VMD/3O2n4ikKJ+fOHUWsoA==');
define('NONCE_KEY',        'vVJgvyyxUvRkRS5uwdmY9R5iRczpJjfyFz05nLzFu8sSFtXZEUnEzet//QdK2K7ZpUMQAaDIe5E/SswlCe7FrA==');
define('AUTH_SALT',        'UsM0DaeHNyEeSgFyu5d8z8tn0wJaC8lEBibJQXPZxmNKSb4moqQLuiLUw6QgKglk1afkAjT2sGmsXCN5P9BM6Q==');
define('SECURE_AUTH_SALT', '+qsoRFIUdBcbqEDftVNzOqH6ponR0dGCKqO4JezO3MrhX+f2NyarCxN5vs3xT1MrJKxYYakqVP+ctFhOxWmZAw==');
define('LOGGED_IN_SALT',   'nI2Gev5i17AEBT9snZ2DTfIhGgqPd/ERcR6xi7zNIOaGBrxc5NnGioNSgrcyhDRvzHjhVdTcZ7tYp7WjZihT2Q==');
define('NONCE_SALT',       'tL37qRCNBoW9/JD/HME2hHoN2GSSAD79x+oR150oXypY5gD4otYGvDLSnTeLxSVZCwSiwyNA6Pu/RDizlYxZ2Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
