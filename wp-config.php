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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '4t>)-$-|+UAox|&G &!XmUm2NQ+Tc8F4VwO&2KklS.,0S,+y3?7*NBTT<.EE,%:b');
define('SECURE_AUTH_KEY',  '*8]PTi6cj<F$<l#5Cz84Cv9a4:-mNO-0W Pk-Eh$!LP=Q`<-(;0o/5,YDaiz8~r0');
define('LOGGED_IN_KEY',    'f`e314/>+^{Xn-6Dd++an[T<l`giQk~Qoho+ <l_a-tV}=Jit:%%m!arJ[w.K#+4');
define('NONCE_KEY',        '>53L^:y^}7!MdB+*xmt`j>i{fi(i_bUlgJ@SA9Ns<=t~l>S0IbpQ:I~)V<#-;?5{');
define('AUTH_SALT',        ']wp#}FnV,rjbM[Sw6+Ts&9fm~lD+,2X|;LuBx|EJ2K8K=}tBzQ<Mv~2rN6<w*nDJ');
define('SECURE_AUTH_SALT', '{L`R8QryW*iDa,sJgd1kRPEI8*A,4gg.UfxaR+RJ(yCe L4y2}K3E)W;O-.esTUF');
define('LOGGED_IN_SALT',   '0rSx(}r32C2lDYfk^oSMr?[uo8z(qW{hGwZxl~>p[dRsD.#g?:HGr=.r|(M*fj+1');
define('NONCE_SALT',       'tb$lDAPI*,<Jv7}[K~@ *1?IEXc7p=#K`}%WfW[/E,]/CD=j!ToXW0rhwfMjc3]R');
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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
