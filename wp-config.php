<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aeris' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'HT+>m$|p.8`[&&S~w?tQ]d2GY;61iP]uRHRV2&~]82j%m>@?j(`~%Wpw+0B%xc.T' );
define( 'SECURE_AUTH_KEY',  'b@j4Op,;c6@p8TdJK+~k4 DMn=30:vW$DhGXkHK+cbC3w__DNK}NTvG9SjssR->@' );
define( 'LOGGED_IN_KEY',    'OqztwCHG$vE6<w{->K%SE_+JZgK$b`)<CKE5??SoUE5ak6a)9c)!nKI&yYcg=bx ' );
define( 'NONCE_KEY',        'B/zxgz+MBaYpa${$[-n-=NgKR)o*|WrKt5F>hN~YyKS:0d}^+N^-mo;rOEb4LNJ.' );
define( 'AUTH_SALT',        'hUjRs~;&mS.= 4t|/pslar} l:Z>D?559fOqgzvs7=*65VIb(2TE8H}C<#a>wK^e' );
define( 'SECURE_AUTH_SALT', 'Mdi@.0A{MQ/>n03y1ATD%l?s=_z[. WKDY@e|`0RSC|QLCD<mY?*XB$Vro]5j;,j' );
define( 'LOGGED_IN_SALT',   'G)(]Yy/Km4U%M!E|DY:?s/RYPc0{!?<84`!j$:HD.*(Dn2s5_AFeA3xrUy28pi{+' );
define( 'NONCE_SALT',       'OJJOAWCW>n``XkBbaFq2JH@fxs&G/`@XX`c#5$C<xchSUSxS`^%iEi*>^s^I$g]%' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
