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
define('DB_NAME', 'smalla7_wp32ttg');

/** MySQL database username */
define('DB_USER', 'smalla7_wp32ttg');

/** MySQL database password */
define('DB_PASSWORD', 'L3][8pS5XR');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'lmp7sxmtgvm3gpleufcz3ewzgf7k1unjv2mxyyhbtkpcua8z93poei5spdd3ftp8');
define('SECURE_AUTH_KEY',  'syfbjfsoycyptqvajhs3ddapi1p9n372kxarvkelv6cj0vjejaoqdmdmly4kwzaj');
define('LOGGED_IN_KEY',    'owyebrfsebupvisf7upjlmf81sigtdgbgrezlx4htdkcil8u36v8yl2wy9qhq1rv');
define('NONCE_KEY',        'evdrmxtkpksgb9he8xfuauw7bha0ottv2jexp7boobg3ttq4vmupbuwllurby41e');
define('AUTH_SALT',        'wyoz128df7vhcg1oqfvncuc9fgozvtlljtp6r31v4cbwd0cg5po4fqlybfxyymhq');
define('SECURE_AUTH_SALT', 'qchv9ty40y9v6bew0oxuqq3cgpu1u4rceheyaproytagyelblnnn6vcgpch1fjcc');
define('LOGGED_IN_SALT',   '2rvmr9wsctmccd5snmpoezd9eqzyaxiqcvduzycjnu43jomgg8lrfteryfphzrzz');
define('NONCE_SALT',       '8p9eaj6q3xseqbexr2ztqzpsvfmt51jk6qcllzezbebj4idjr2f7gffbodapa9iq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpl3_TTG_';

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
