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
define('AUTH_KEY',         '?C;?n/1wlz$MY!qRp^$(IOT6-#E]J%Q)VqOB.J6$Q+G*^D3)n&CH.lF/@2D[z$TO');
define('SECURE_AUTH_KEY',  '*2tz;1^Gd _NFs_9nBK<qC0(6-YS_ po{ 52i:VPZDQdj,pB8zK37qQ1U.UJ[Q3E');
define('LOGGED_IN_KEY',    'Xj;DBlo,Qn]6Oji?0(3=DL:u7JO.@-@C 40K%y@/wJa.hyP<-ipleM`% Q~IHH~Z');
define('NONCE_KEY',        'oPujlO4rz/?:v1E9_c?Xw_-q;9A^N=gb13$OF@8#&6=5Cz3USrw9FNKe]Mmr%1%<');
define('AUTH_SALT',        '[YNZWjJ?{j3MQ=SE:^E~?EphtFN;I1mH8m_l~g@~(G@eGmv&TT#km[*&*U`}.boZ');
define('SECURE_AUTH_SALT', 'cI<fG|mX%@1fN9FeM0hgb,)N_/X+J!%Zi}$jT1k/Ym1t{ 3i  zOzrK%@[Bsi39:');
define('LOGGED_IN_SALT',   '.S@TD:5AI,lz9iS(K[lPm(9O~&bT_nXOO#0V3#)34_4Zbr|V|T9(hTqSD3KK>-yQ');
define('NONCE_SALT',       'h_uYTzMEoP!;Brx+0,_Al`v8gD]VEVznuLt!]]g{mpiUgiD])>S*Kw*YYgZAaCi;');

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
