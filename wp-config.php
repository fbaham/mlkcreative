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
define('AUTH_KEY',         'G0GLM1LxSQJZjs4z3OnuGu0WlsiFkaFvTdbTk76S+g7muYcYfWWFZUiHjqOtxi5sbRgsDGvdaOtnvZbMyR1AxA==');
define('SECURE_AUTH_KEY',  'I1Q4EZ049pi6V8r6jZ37TOsJp9Y9/Gt7qaPGfHJ6EO4SO4LQtnrBiSbayil02uzdFtWnkeMGuuebsm/s5qkonw==');
define('LOGGED_IN_KEY',    'Jl0LaMZgosGOaqiVPmkdAzEs3tBnIBXT557lddCathk1wO52ACCRxstALslwO6H2vjNltTu0G38mDZoRzs0BLQ==');
define('NONCE_KEY',        'iq3VLUggCkpmRLBm/Nr8tESLBNAfzu5lOl2Y1prlZ9ai1GG28tZS57LuZE+vMFaxDm1ws7YRztbA9Kl7TdnK5A==');
define('AUTH_SALT',        'K4FDMQrAdMGLg4G8EV/A1XbLJ8SVsOkMlxlCAJFblfRyz+5dXKycL5cR3a6t8epTklq4Ez/FatzzISvfGFkkiQ==');
define('SECURE_AUTH_SALT', 'VJVhUZAfX5QxpazfE0t0rJT5kqPxtgAjv88LkfOvBB91vU/xYLkilj+xX+/KZuumO+f1xmQaEnryN2mn31lAGw==');
define('LOGGED_IN_SALT',   '018b35WMqReaie+Mv6SM4Ce+ileMVt+4jKAfvw4SyfmC3o6/uE3myDVg4zMgUGexXEM+kuRjJLNwrDGU7/iaxA==');
define('NONCE_SALT',       'VO+6hEQKAiv3KTXnDKsgYCTuk/AsvWiN65/vxw1Nbu8nkBhyETwmBjudIa2AfwS2UkuKl7Xra63bh6sPK0mw/g==');

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
