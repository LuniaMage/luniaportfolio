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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'EHSJIeuaCwgrYBBV08qrankD3exh8rUw/ruV3HGKjqF5m3a5HeOfWuUCrH2lF4UFg+whKYlQ3GaA0AsS7BVzbA==');
define('SECURE_AUTH_KEY',  'JIawL5X3vi1w8HMHTsqeYHIkrz3VccDV/nvvHyMPQAgNXMV/Ykgae+EYNfLv6jV+uURgXL+gYGs2MVPCqwl4BA==');
define('LOGGED_IN_KEY',    'vJRRKyKNrSN4So3J2b8y9tYDnA3vOxSS3BwOrIvWlf4hmLUkP4kRZd5A0H7kNR21vr6kgFqpfuyHA6F10QRf9Q==');
define('NONCE_KEY',        '+lLFYFzkGAwSGTQsIJP6IR/p4a6kpAh/1on2Ljf2aoYR/kbf7laNlVtnbbYmlWkkKknNdITBv25cc/Jyx7JnwQ==');
define('AUTH_SALT',        '8OwTMvpSElvaLlCtlXw9/KwWzsKVPtHc149bHTDuviAXuwCzI9KclWWaj/l2LRR2cmNxq9y5WGdhe28Fw7WYCg==');
define('SECURE_AUTH_SALT', 'b7HhJXbPWy79Ea6MJ9BVUFaZIls5PQXfuGCTZ9Nob3xFV0JwDGn9ZKuJrhCSJN/80rcPkwXQleih/C6nlLp5mg==');
define('LOGGED_IN_SALT',   'zABFWurL0opccVZdfO8xy6v3FZ4x2w7MUKcX1SopVlpWEAdWhMAdch9snHQFcvfiwAuDcJXQU8b930nNYJw5Ug==');
define('NONCE_SALT',       'ZU0GYJZUgPGEB2LbXVxpuSxs2S/wakrRod4WvU82EQlQBBVv5I48pDbOw0TX+zU/tAseR8eKX89y0q2XT8ZcQA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
