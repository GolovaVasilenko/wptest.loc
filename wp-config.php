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
define('DB_NAME', 'wptest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '+Mu{-!JXO4$Vd@[8^)iN:4oy~-VF%C4_jH:EJm1*LL`O7+AD.?G1]!&nXR1+q%4:');
define('SECURE_AUTH_KEY',  'uzk+7$,S6h%ds1*h+5gxAcZuo WLy7uq%:/3L %f89K-+JkPf4|t$u-gZ$.Tun3:');
define('LOGGED_IN_KEY',    'c,&{PN|9scQvp1SK}N]NPtA}06(S^/hSH8Rbt|ZDqT5|{yteLkq,Zo.cYs^ifHhj');
define('NONCE_KEY',        'Tl#Wcao+nk5p<V`q`_i^mZXWdxjH*JI6!8F- ,`Bw^SK4Ef(XRchovv1Oa{U_@=n');
define('AUTH_SALT',        'nSXG.+O6Xznp}8f;_8@9RS=+<}&+{;OBf}adn*0#Ga+Xc|cx%J~X]-JN^G mmeP^');
define('SECURE_AUTH_SALT', '*$2PrBY+4p[4pAX.WFZQ<gG@W;*raAi2~1n`0{+ TT*922_|]}[*-^3|!m-c)*rh');
define('LOGGED_IN_SALT',   'wVh>.|GRNix|Y_mCid+}S2hXSgxV[U^]HD)Mn>A ~wH.u-}=E.~mD^?m`g$sYTp4');
define('NONCE_SALT',       'eq8cRwb1jA$y/FF.!n1a<M#n{q9|Iab,za:9yH-.rB%TjJA#-H Rs@U(=jVY:ye*');

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
