<?php
define( 'WP_CACHE', true ) ;
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define('DB_PASSWORD', 'd92a0d0bcd68329aa23ab8c5d21423097f20c568c4540a5e');

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', '&r&v9g_L3-~eQ,^z1&)Zf^a[#v,)~[&s+uns)tE;8IffS-Ht-gz3jvu8#zNvE2>r');
define('SECURE_AUTH_KEY', '&r&v9g_L3-~eQ,^z1&)Zf^a[#v,)~[&s+uns)tE;8IffS-Ht-gz3jvu8#zNvE2>r');
define('LOGGED_IN_KEY', '&r&v9g_L3-~eQ,^z1&)Zf^a[#v,)~[&s+uns)tE;8IffS-Ht-gz3jvu8#zNvE2>r');
define('NONCE_KEY', '&r&v9g_L3-~eQ,^z1&)Zf^a[#v,)~[&s+uns)tE;8IffS-Ht-gz3jvu8#zNvE2>r');
define('AUTH_SALT', '&r&v9g_L3-~eQ,^z1&)Zf^a[#v,)~[&s+uns)tE;8IffS-Ht-gz3jvu8#zNvE2>r');
define('SECURE_AUTH_SALT', '&r&v9g_L3-~eQ,^z1&)Zf^a[#v,)~[&s+uns)tE;8IffS-Ht-gz3jvu8#zNvE2>r');
define('LOGGED_IN_SALT', '&r&v9g_L3-~eQ,^z1&)Zf^a[#v,)~[&s+uns)tE;8IffS-Ht-gz3jvu8#zNvE2>r');
define('NONCE_SALT', '&r&v9g_L3-~eQ,^z1&)Zf^a[#v,)~[&s+uns)tE;8IffS-Ht-gz3jvu8#zNvE2>r');

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
