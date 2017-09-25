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
define('DB_NAME', 'vidc');

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
define('AUTH_KEY',         'Ybua0vbaO%bB+z0@C1gmTM:%Kf(<Qx^ToHEn!E~$!_bb**[m6}92&bK~<S+1Ia~-');
define('SECURE_AUTH_KEY',  '%w=UHT0!m`A09<?x)ysTBQG-HdM=}^8cx&?LH34DEnqp|s1q9/L6uUH{`O8yDR m');
define('LOGGED_IN_KEY',    '/f5/1o7Gqo/lt)~`{!evs){6;M-b0.+e9$a87&:|d=x#`_(_5y^h0C-OD`rf*2Bt');
define('NONCE_KEY',        'wXF6zS[=Z*6*kD~^56mk.uU3prqWn<wQcn]|lb2AXTc3s-7^k#Chmae`mRKZVYD0');
define('AUTH_SALT',        ',a|7hC{9_Xb`ov2XBhgERK;.-DZOy+PQ_~41D.T}.mlg<5QsEo,EK>p[2d5dXZO,');
define('SECURE_AUTH_SALT', '~AO$$Kzho fq-x^TKP!k0:5YR2r>~TnoB-A5sZ;$|$Y!w15%l3p/w4Bs=Z}qn2~4');
define('LOGGED_IN_SALT',   '@^Zf[.bNJ3uN=p@(Ik! i&98#xS0sd vOJY6rx,h R2jSk&j|&K$]2_:#Cn<Xv?Z');
define('NONCE_SALT',       'rJ7T|1S`#(u-K_b-0y j6e4lCq8bj7S;9]ND4iw!U#tn+y|73Q]Mn8[7GU+q!x[4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_vidc';

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
