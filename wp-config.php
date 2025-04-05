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
define( 'DB_NAME', 'pickleballnepalc_5' );

/** Database username */
define( 'DB_USER', 'pickleballnepalc_5' );

/** Database password */
define( 'DB_PASSWORD', '311(2!pYSd' );

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
define( 'AUTH_KEY',         'vl54bdi9w4pp73bmqmcrycxnfa4pqeqnq7bgj9d7jeof0lkgqwzo40vupbhlvphd' );
define( 'SECURE_AUTH_KEY',  'x4ki41e2qfuscazu8czcwfunghq8nnsfoclblqp2uiq3y8jhvz1w4yu9cv5hgjtm' );
define( 'LOGGED_IN_KEY',    'kbnhgelhp74wzqzymmojqn9s5ry7w4xzqckoddewhgea5zmgzzjsenxwf2nuy1bz' );
define( 'NONCE_KEY',        '69rnwxalndfg2ziqs3e3rif1wz4exnc74jxvznnkcskrmybvviky9i2lxeckadei' );
define( 'AUTH_SALT',        'llwuyx0aekirta97ampgkn2ahsc5qogsjtlnfwhzlubte122szftxppfytagrwjq' );
define( 'SECURE_AUTH_SALT', 'nkeubqhnvyu0zewpegcftkf4ranbwafzya7el9vef63undkz3m32whifmftbgeki' );
define( 'LOGGED_IN_SALT',   'ibusvtn45l4ubncoqfene5w7eieqyajutjyj8aj51e0a0vntt37glrpjjn4kllh5' );
define( 'NONCE_SALT',       'xhog9hadgn7nyziwdfxblfkml9pa3k9cce5pcyii3ynnzxzphhnjobtjkqr7g6nv' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpkp_';

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
