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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'carrito' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qRYG4Cmkfnp6MWbZvz0LybL2uU7VMxHOssYQI3Pa4FeDVD1SdZ5a7NPCDhuoIbvc' );
define( 'SECURE_AUTH_KEY',  'U5UGK0U6wBJdm49lRtlVRX4IUfNnddkqOF4e7UEe2SxZL3Izo4beY8TDjm4TUUif' );
define( 'LOGGED_IN_KEY',    '6quIHu41xgzjAYiuhhjz23CrjQHvBoVAPuzXRjmeT5Ym8jEebr4mzc2MGiCchhRV' );
define( 'NONCE_KEY',        'rL8b3IgbSRKYqcQmpwAp4mHjIgh7IMx6jdjL1leWMpw0YbOBBVOkDsi3wOSgLZJm' );
define( 'AUTH_SALT',        'nh7YlhASMm4c4OLNNhMBtQyN8X6Cjp6AmB5boXq5FXAwro6EaF9tMfM5mJ5jHUxQ' );
define( 'SECURE_AUTH_SALT', '0X8BDCJxwuVGyTPLcPX77t9b3wOhPVJJrbZdkgZdEnz24FGqMn6ORP3hfIdV5aOy' );
define( 'LOGGED_IN_SALT',   'P062J2ly8EBnKjbRf0tthvX1sGbcZPmGhjhI5LX1EJ1OoFFPAx6JdjeqoovaoeUn' );
define( 'NONCE_SALT',       'xapvd5OMKtGFIXMzKTxdComG3YlIBWFnwVMIdc9UDrXbaqwmjxJ9ua8UMwpco3pP' );

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
