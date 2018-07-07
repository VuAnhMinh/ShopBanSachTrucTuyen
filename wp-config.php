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
define('DB_NAME', 'doantkhttt');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '0dsnC3;493@r>_XdQ01P{b_+<K)sMFo_o3|+,4:|0[dK]sMHCHS%Vi/;0VOJxE?z');
define('SECURE_AUTH_KEY',  'L}n&5eArOx(@ ^Mi4MorjU?n:oQ!#yIPsyRZ9I].hKd+n3%Ii+oN.?zAx|,TfYu*');
define('LOGGED_IN_KEY',    'xt}F7R@P<e R)nY[x./a[^xNLo+_H;_=rJb@|#w uwjs.-H9lCv[L(hO}M!VdG|i');
define('NONCE_KEY',        'lSq.92kUM5gdt<iis0o$O`$ODiIJl>E`$Y:T`/D~U>af]4/S:&,a &kQr#*(yx+^');
define('AUTH_SALT',        'q,#kE5rbKfXU}Q&p+^NmR8}R}m,eR-V@w`x@KKva6ONV8=P8Z1w;(bQiyzNo.<eg');
define('SECURE_AUTH_SALT', '.;*+HhQEr:)>bCtF>UcW;Stm_G.pOM8bLw C%XO<b$~yZ=;Vr60VWJoC_4%A S9K');
define('LOGGED_IN_SALT',   '~au@~:EkAEQ[@5tNV~^U7?NI11|^9<+^9@u;N88Y[rQ}NLvbM@rB7oo0Yc(r U$t');
define('NONCE_SALT',       'I{)i/-}^N&if{<&M>H({,MD([SLsvb$$A4YBGQaabXhbQ7I7uQTl2t^mp_/afAoJ');

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
