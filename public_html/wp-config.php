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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bely5175_main' );

/** Database username */
define( 'DB_USER', 'bely5175_main' );

/** Database password */
define( 'DB_PASSWORD', '(1l74!npSt' );

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
define( 'AUTH_KEY',         'rinuzdbz2i81gr1tqfm5batqnu82exvk6jnmsasgtchbba7ygu0bfr8qewht1ymg' );
define( 'SECURE_AUTH_KEY',  '5ajjenb6qbji1fnaegvh6ae0umlq17g07b8z940pmtsbrindvaiaom1agzlrhyg1' );
define( 'LOGGED_IN_KEY',    'doamu0qu7rx5kpejk3x4wiy4jtwkjp041xgueodj49viyci67tazsehykazqudxg' );
define( 'NONCE_KEY',        'm2nnectizcctedcjjhk3iokgvkp0vbjyexddixtmnhioqd0sf6bmgvhxf4w3q0o2' );
define( 'AUTH_SALT',        'hu8sfzbtsa9ummrdkp4i583ud4qklwiiwmjkf26rcu9bvc4xwqlv1kszatjvts2p' );
define( 'SECURE_AUTH_SALT', 'wuiao4vhoibvovvegf2rpgckljbl9yv6sca7mioq9mhjsyw0f46jojepqyz9igoz' );
define( 'LOGGED_IN_SALT',   '8vrjthmijwnitbxwzaoatnaldzlze1umtkhbgozmamrou1ywaocxdweljmnreo7u' );
define( 'NONCE_SALT',       'bt9pmuzwdnpuoxoqessrmmrlzoi7hng5fy8fkzeb7epdby2xyai1u4xwzrkak5ku' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'main_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
