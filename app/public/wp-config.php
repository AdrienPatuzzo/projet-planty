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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'KCXs4/ebU8C/y9/IqhTCk9BjVei8PtC1RPqmlmXkaur19zG8XcGmQLClHw8HJpWDtWlroVRCUGu9YdGHxt4bCQ==');
define('SECURE_AUTH_KEY',  '1qE+P2YG/AzW/iRvVo9BtjzN+FgiG8oAhIelG7KdnHtDqGYn3JL8n2amZJlkubtWrDt/5qm+3iMlsdz9AQV4xw==');
define('LOGGED_IN_KEY',    'aSgwgRDJ1wVvZgUmezBAUwDV50Mx3Iga7sBtLyx35WiOz4lzcIpU3m+ovKr6N4loskBLYmnm1ZDO3yBxQnE/9A==');
define('NONCE_KEY',        'GDbLDD2ZtG/8TlM41vPw+U9Ekz6tslZznSLdsl4pXejjIaCpEVcv6c9RGasX/FHTjIet5s2cYM6wugfgsEN8QA==');
define('AUTH_SALT',        'ymHRqE30rQPBt4Ocmgx3RaB9rbyn6W0RifR+VcLhEmOoyX+uG4Nc8XzUHyXlBoaTukFCDKAAMbsNKRAWgj+cQA==');
define('SECURE_AUTH_SALT', 'gJ1wZAXwIzGchlztqwdmr0UBs9ads2dPuLzM14DOCoZf1pnmEPDp9Y3N3zNtnRff971h0MGVYPu7jnoIBxdIVQ==');
define('LOGGED_IN_SALT',   'edRorA/H7xweXGaSFE5mIbEFtSgh9pxqzbhEh46QnahO8Xs9j62FGXJfwuqso7kAVVVw2SvM/lp1c7XK2lrBBA==');
define('NONCE_SALT',       'VtsS0lU1ZiUcD7tcC4YGXmS9v/H7K4sE+cMEcXI/V7rhJnGwkqyJIIpAm9GXANL9vl4M+lhMm/++b9zQOu4iWQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
