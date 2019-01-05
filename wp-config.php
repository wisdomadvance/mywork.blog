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
define('DB_NAME', 'devmyworkwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Tot0tot0-');

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
define('AUTH_KEY',         'y!<bk0L*05^yRsoc*Ceh)U6y(C#j7s|Z,1Fb8@bG:K?URJwun)llf?Q2+;`&.7fz');
define('SECURE_AUTH_KEY',  'I_k)63TVw&tAWs4u)3)$c|?{ nPedC&-GNy=Ko?tZJt<JdqUr-eO9KyDAnXK]r&}');
define('LOGGED_IN_KEY',    '-nvnn#T0HmMU}38$DpMPfZ*K<tRlU1&oP_buJ-)LRY:Hz|NG7^Z=U]ykb3ha?$-W');
define('NONCE_KEY',        'k]]+K{q+(;CjM4Nvd84c(Mzhpd[,c|zBafD0a-V!B^%yP^r8n=*Tykze+&-#Oj0X');
define('AUTH_SALT',        'rfo>Fu=}]P7*(:Bp|wSTlrV-?r^Sfd(wd3C2VUK&+<X+v<GPd?-^wB41#fT6,a}v');
define('SECURE_AUTH_SALT', '%^ !JS)+r5p=U3dN?Cjg! tlN_P1z |/V,Hn9qmP-WW/-Kh>!z+;ia?N]eg9D]1v');
define('LOGGED_IN_SALT',   '&ghn;|^J@Ga&-zT}~ch6iaoquOtn<}|MYGe|L-TldVd.z>0o4Km/uoFYX0|e^E%B');
define('NONCE_SALT',       '[F0!|yp-wWvD`C!w>!n_Bk(pv1,EMc5vLK1Uf^mH447??U$4Qy=`/R>>>^280HJF');

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

###ja
define(‘WPLANG’, ‘ja‘);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
