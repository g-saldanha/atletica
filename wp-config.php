<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'aasin');

/** MySQL database username */
define('DB_USER', 'aasin');

/** MySQL database password */
define('DB_PASSWORD', 'CFg4zNKM');

/** MySQL hostname */
define('DB_HOST', 'mysql.sites.ufsc.br');

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
define('AUTH_KEY',         'qJ/3kP=F;ISDWCo{Cn:w-vqn6WL+IgA(!8@+~TW){vF+1--^`~6<f$7c%jP&qXfA');
define('SECURE_AUTH_KEY',  'G:[#N=Qc9h:clM=X_TU4CGOg|l5{ @%??_=_8sY*x(`,{$qKqA&+Z@qp(2he|^3Z');
define('LOGGED_IN_KEY',    '^:*-mH85cR*$ck^ms$R/*TXk:)2:yB:L*IN_j7t0VY{h%R1@Xn[Ej~$/jwO^L:HA');
define('NONCE_KEY',        'U}7z.~}y`u k0j_%lIp2e.!vAX<(W?T)fGsnRi/M.zbL ;HbB{?zuBaJd)zP=[rZ');
define('AUTH_SALT',        'N@4ZlJAN~<zC;>}|`LcsBy=XDVH[6/FNMb]9Vu}~P^;lkfLc~3hJ]6}F{ XgE{PQ');
define('SECURE_AUTH_SALT', 'OV&+lqTrcJxLpmD)GN2C9h]5.2[DlRO?<U>d]1ZtE-3h:-?y8Bm@|PI=InKnmu.9');
define('LOGGED_IN_SALT',   'LGc !~hHWpXg!rozb<V6NC1[EEsKBm?a+dEO?GDNDjj>tKEY@,N>pzQLV?W=sLFJ');
define('NONCE_SALT',       '<3#B>BT{,h0;1820+%=_AB8QJ:e%y].I)Qt>u8q-9JI;hmH1>xk(]<j+N}KKk7eu');

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
