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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ostoja11.8.1995.' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'FW2}|{1~kTY+Ef!pn1,*A]dEu;:nxT#m^+_0D]+5=#Q`+j-j`%|IQUYK3^S54>Eo');
define('SECURE_AUTH_KEY',  '%d*obMWX{A$0Mj,LYJpZN;I`Dq{II(]b/ZzYMrJgAJ5fXr7kCpcG+}9c2({qiwX<');
define('LOGGED_IN_KEY',    '](}^?BQp|< [LOv+6Du)3C?lZh<vVEx;r7t`3q7PRB(9J2<=D%itixYj;`+)|1*x');
define('NONCE_KEY',        'U/]zq^+L=pT@)|H<A3;hb%$~~/C5kRO:wXloi,V/RLMOCd{R}>=||sHu7ozOw463');
define('AUTH_SALT',        '1;A-H|9:w.MJS|G<%K7R esXDquARu&Be!Krv8h3he)&:~ UE2i-w;`}m1eg>Lzd');
define('SECURE_AUTH_SALT', 'j#~S[8+5#i3i`PaZw4@[Wu<|m%>@xge`QQ|nah5+n ]!q2QA.A.F+mqs-o]8X{Uy');
define('LOGGED_IN_SALT',   '6n%=r_$}jsZ)M<+|N{|#K2{V8}+9T<?[C*QGT6+<ww+oX6m?GowFerWV4h>@YDFZ');
define('NONCE_SALT',       '++)KcI):o@r*/X(>dljc8`S ivh~)|eEIQ-mU%PQ[UKB$[+49s5kU(~Tpn|,%c`C');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
