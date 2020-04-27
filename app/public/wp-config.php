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
define('AUTH_KEY',         'JcBu7S/5WE3bPld6oC3hd/6fae6tWn7bFKqtYYUMpZJvq2Ryk9Z3nB2u7UcIelyZvEujUdidQvBCBP365AYMUQ==');
define('SECURE_AUTH_KEY',  'iIZwtdHsxNtlgaXB3QXRt/9fmbFqPGsN1t0BkdjR0iDsD6bPiaCqfq4C47tG6BCgo3ltrfiKaKqqEC8Zy93kQA==');
define('LOGGED_IN_KEY',    'udmUL+IARzU2U+Lg3Pq4lH4TgU6emgCPQ2pDk6+j3TwBTYDBYLKaexw7gRjR+FH0cFehmNfUw2stQ9ANEh2H4g==');
define('NONCE_KEY',        'u520eZ43FaB1Udh7aFzQCdfhRYlHVuMTX7NcmSpqB04tg4ZojVh7OUdpOA588u+R0aoIwgahH4KquYa1Zs9APg==');
define('AUTH_SALT',        '3LJB4Z5p3UJda+lUr9U8OcSE8J2gqgh9VvUTJVqPg9eGdFsgXKNf8uzU6kkw9iOgbIf87G06lLh0RbXZM39HbA==');
define('SECURE_AUTH_SALT', 'JoZ8Td5Kbi1ye7gKxjtxyLfpZeE+ElE7NROmidBYead9TNAIYIDyS+NSeREE+8FohPu56U5an4VROlwHhIe3ag==');
define('LOGGED_IN_SALT',   'DwxU21U99GBdVdiJV2esJXKrF+s/6blFhpyrvzcv1x/AENZyVW4I2o1hjqW+3q5K9nyj2eT0jW3qWF30R9CXfw==');
define('NONCE_SALT',       'pHKXVx2bXtgjSRz5A3JKsbM9zmE4oJO/tkdGOrvrdLLqxuCem+Cg+fLasDryQyXxLIslarXyKEgeBh5JcykRPg==');

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
