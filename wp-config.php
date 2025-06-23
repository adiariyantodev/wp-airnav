<?php
define( 'SBI_ENCRYPTION_KEY', 'Gl06u6rkzy1kfhcz)lD(ACxcEa&r66gv2wldc)2kbRFp$v2RApEEPQeEb&cvx0Vy' );

define( 'SBI_ENCRYPTION_SALT', 'LlT)2k6uJlavvOmS8sAMB9XsxA$X%9^@TyA!t$&6PlOowf3!Bq(k3p7yVYXmw*3D' );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'prisma' );

/** Database password */
define( 'DB_PASSWORD', 'pr1sma@Vendorwebsite' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'iau}+cC@{x1r/t+M=!(bQqGW1&]50LF$u_<%OfgGqBBH@X&rQD)$&)B</6ik6>Z^' );
define( 'SECURE_AUTH_KEY',  'N7KAdDA}SrV8kQ?M-^2gYn-laFBjD>;54=X%iB[JD`}jtz3qXIbMWulZ+%e7crJ{' );
define( 'LOGGED_IN_KEY',    '(whNC_XOe*t$eNn1<g4aw9~gaQ$U?F$}[[CG4Gl)x<zP&Vu}k_UICCQqG@M{_G6u' );
define( 'NONCE_KEY',        'tVDQ+)x{W89h;VBNF%|Ql%r6ykY@@DCy6T[rco9X~)s^u{7IEI{|WC0N#*fd{mgE' );
define( 'AUTH_SALT',        'c|O7M&~c&,N%[dz1A%42Tqra$q1Y5EH3!UpRNw)]EW~VdWThZ@WSFHpz5c;+KI4R' );
define( 'SECURE_AUTH_SALT', 'oFXNycL2I+AeH*ntY^^I;<;`EmY2MS ])AJE(7x2+*dc]{%}iR8!S,#bl95o!U]6' );
define( 'LOGGED_IN_SALT',   '#Y,II. DX]K$EoTMd:+@&jnc cvsJcf(~1L0fB</q#G&;Wki}-Q#Tc-Vf})aS./+' );
define( 'NONCE_SALT',       'f7Dkz:39wE%!<c/g5ik!$),4/bX[w84Od-j>[Wxs|nc6$es4J3o/Px)?|&UH$>zZ' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_MEMORY_LIMIT', '512M');
define('WP_MAX_MEMORY_LIMIT', '512M');
define('DISABLE_WP_CRON', true);


/* Add any custom values between this line and the "stop editing" line. */

ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_secure', 1); // Hanya jika kamu pakai HTTPS
ini_set('session.cookie_samesite', 'Lax'); // Opsional


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);

