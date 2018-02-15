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
define('DB_NAME', 'test123');

/** MySQL database username */
define('DB_USER', 'test123');

/** MySQL database password */
define('DB_PASSWORD', 'test1234');

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
define('AUTH_KEY',         'KvHokLkgs$N.ItnhD$PMt9LP 3R8mN.=X{gFFd-O`2Ws }5kBf(<C`c-QtXK=_V{');
define('SECURE_AUTH_KEY',  '34qk|$g,.ztbfpw.E8HLJrtbB&(s6woJ#3|:&1R-M/7iZNLSgs-MyRftU{w;X)EZ');
define('LOGGED_IN_KEY',    'W967=i`SWTR|V!6!#=O;r/D?u[XX?Yb<Jlc+[`HzY-JOUu*(;#}@;i)!`Xz5Iv}z');
define('NONCE_KEY',        'A ju%Z5Ca6P|9cQr&m~[Yu.3GO-1@Sp$`LVKkJ+?f1VHxDZ[ef:`Bgk# <6wA>Kq');
define('AUTH_SALT',        'D y/IgQo77l3P W/l}3fta1HQ8Qql(<=b2sL<rM3 S*N_GnW zznp}aZHxXolI>4');
define('SECURE_AUTH_SALT', 'p:5bQOw$AZI-d5zXy~<$S5|LOfvw]vLR?F))bmL.=5wYr;}uFJgKb@U}1U65cf~r');
define('LOGGED_IN_SALT',   'Y@D4_`b,l<Po[]4)`vm $>z]?1-wb?Vpo.C-$N}]O7w#*NZ(6AhT&}k*cx$CAyy)');
define('NONCE_SALT',       'f#h70-M`3abGy586%u rkGc~&Y0dNktA%J)kl;{X&fP*ESDkM.AyT5|Jly<8q~J~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
