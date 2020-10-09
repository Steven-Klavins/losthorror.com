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
define('AUTH_KEY',         'vxLBkV7DYZghxA68gpsd7fOJ7KZpf3ZSKkAiWrNLKW3ZO1GxNNxwRMXxNrakM/rWWHPQ5+ecMFrPz6hNjD9UeA==');
define('SECURE_AUTH_KEY',  'ioInrginRaU4gfkqd2z/P5Adg6JuYa2aghyAYHDqezCeLIMe+OTkewzSq109pF9URpRRmHzzfw3FeA7EZY6PMQ==');
define('LOGGED_IN_KEY',    'Gfo5j6js7Ihxxk9tTGMAOUoq1tQ1UZsnsEoIXsLGJTKDLc/mBDB1mOrHlW129JcaeSfnXf8zSUB0K+OadZoSbw==');
define('NONCE_KEY',        'xd16CCIFhTbjbyU6Tl0o/MfakiANKx7sOgMNIS6mIjHUDrpgJm7M0ap/1h136v8xrVypVmWqgBG5xnzs6V8tGA==');
define('AUTH_SALT',        'oi/cAP+95pQ5ktGFLgdBoertitu2xb8xidCK2zH2AhoZPE68cK0kwKZFGhGvhEjElvUfuOINjDWx8eWQPYwiJg==');
define('SECURE_AUTH_SALT', 'FgmoWl9jREB9PlY+IzWEnCTTGiuuiJxgEuGkJjfemeM4RkEDftdd17uXX2K7qKyGy/gT4MsBYS8CmkcgQzExLg==');
define('LOGGED_IN_SALT',   'VzUOEqrPpCR9YnZUyPWYhxMzQ9QlN94+EZiYF3Ip6qXKR+Lfvys3sTL8k99IlygM0J+zpW5hh+xLAx99uQibGw==');
define('NONCE_SALT',       '9JjJ6UlVNiTO6ty8d9DBxZWe5ODsqOSngopH3xjseu4/eC4tizLXBagWDfA731GDldlwBU0al0Mzsc+yaBpJ2g==');

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
