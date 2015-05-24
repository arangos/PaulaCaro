<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'FqemvJYqjFP0mjnGe%aBLw$j)fFJdwYEII5b^PYJ9A)d$@TTigjEhO##tQ)s7AE^');
define('SECURE_AUTH_KEY',  'Oy8KjZRrafjLE!(4fKcaC1vebrFFCpV3wd9u47L6cy!AMhYso56hE)K88SV(byD1');
define('LOGGED_IN_KEY',    'wGYMTrQ3(3KzPwXH3HfdualUg)YZBp$llGWNdYWvHzIjXRZBdJNdNoRaFEuIEpo5');
define('NONCE_KEY',        'rx#NZVQ^gcmX76MxY9%MCpzn^x@M4HGbLx)uT6%%Ty4LBH0gXB0$xche&acD6BcP');
define('AUTH_SALT',        'p7B8)8Et8t9PVAegJTc(eMTZBckzXYxeEjarP$@7x3wFu9g)ui2k9hCT@8m*a)rU');
define('SECURE_AUTH_SALT', 'hOuZAAv#vY!@%ICgG*g04NO6iT5u7l8q%A%(&TLxgpnlvf*D@*HEVF(v&91HloCO');
define('LOGGED_IN_SALT',   '$kINiZJrSnJNssp6UFpLVuIvXN%t4SoPiI0RN@u!I#r*@CmI5o*!CZ*3nQB$VQcQ');
define('NONCE_SALT',       'GW%8UPiod2BweNlWN1ztXc*XTL4oJ!8dw28qjZxMnjB4A@o(wbZ&d4%5LDTgEM5H');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mk0Dw_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'en_US');

define ('FS_METHOD', 'direct');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );



?>
