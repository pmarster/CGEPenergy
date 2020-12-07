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
define('DB_NAME', 'carbonfe_WPB39');

/** MySQL database username */
define('DB_USER', 'carbonfe_WPB39');

/** MySQL database password */
define('DB_PASSWORD', 'ymq4Cx5uaJ2oFB9a8');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'b1a20664a2e7f761a0577cae82a17f32c7eb4850ba26dc6758901c2f8c63d375');
define('SECURE_AUTH_KEY', '9c191c393cdaf674e55e329ec7ac2f78c7aa6b8473e961d1bc0e27da767d0d8e');
define('LOGGED_IN_KEY', '7701be020be76b2889084ba1743d10435a1708f2e2f47d62050b7904bb90a0c5');
define('NONCE_KEY', '53ee57e807f9cc6cdd68eb51ad5df5d2f02437fccb612b6d671ae1ca5401e5b3');
define('AUTH_SALT', 'a63d80a8d1ace4bf13637d92e48c02480c497ef7774afbbfbd7d0c4ef29668e9');
define('SECURE_AUTH_SALT', '4bb08418e5f3f77790b6897467ecf79b782f6d5a29600a0d32aef4d47d5b7ef7');
define('LOGGED_IN_SALT', '7932f4491bb504e6da41c1fc246a31d4b384eefb5e8ff1053cb7bc3861c3ec55');
define('NONCE_SALT', 'b631a23d31f88e2128a250d1c92883b8661957d202e4799b9a1323185dee2d99');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_B39_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_CRON_LOCK_TIMEOUT', 120   ); 
define( 'AUTOSAVE_INTERVAL',    300   );
define( 'WP_POST_REVISIONS',    5     );
define( 'EMPTY_TRASH_DAYS',     7     );
define( 'WP_AUTO_UPDATE_CORE',  true  );


