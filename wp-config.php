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




define('AUTH_KEY',         'u64Z3jJXXGqhocKfwonE/d6XPxR2V/uv/IaqTDki8w5ummo1heBFHjKznKBqKT6gGRxfEd1IJ851K/MAWx4E2g==');
define('SECURE_AUTH_KEY',  'UC13xzzubBbMR2Th/R0QtLMVImrVwAaxdrEeLsow0J+dCE6yZ6Ng+UqtD/rzCkYLhWApQAh2LUrXuRmzmqqwjA==');
define('LOGGED_IN_KEY',    '3MO3v3HkutcnpFlJNsfLE+V0dkcP2ITB/qSiGNUlCAu0FSKDLFepu11V4Oh810FFHAkcMZQ/Ofm5gPhpDt1SAQ==');
define('NONCE_KEY',        'AWD/XAgHaQv2itxBp12wBhPuacuC9j9CbrLxvDitK2xuLN8gecT0lziYHzNmiP0qLe5kwQi0FkUyh5P0PVjPPw==');
define('AUTH_SALT',        'vzd62cbXnXYZR1/rpEx4Hq6jAVmPrG4gY4OUlIeKz6nl6M9lspmbjIpIEY8OiTB4wPXUJbmlZL3vOm2WHI5Xwg==');
define('SECURE_AUTH_SALT', 'c0MyRK0IkUIVcwvxO5foc0tUhK1edQLtfmnIpAUczNLJjLSz6Wicufta5dqQC5M8+bypn2Rz6aCrgRXvyJgjZg==');
define('LOGGED_IN_SALT',   '9xae+KUzMrwYpA6FBqyW+2UjAA4B06ipcJ+LoQYrNT0mSnK/2fOxfxgiZJdiS/cSGNqAu1AdFiooSXv+GHXsww==');
define('NONCE_SALT',       'gNZj0KQViWYAwSib7a65u8Y+JcrpmspVeEbztKFmvGq62MbgdjW3+tIl3VvzF21ePRKY1Gj/plVRsun+jtDF6Q==');
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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
