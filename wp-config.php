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
define( 'DB_NAME', 'wordpress_walker' );

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
define( 'AUTH_KEY',         '>)+*H=2knA=m91bd-9cg]xVfTp?Soz:zlh,I<oq~pL83i=-Z@TP`U@=dRF^Gdok&' );
define( 'SECURE_AUTH_KEY',  'Jnn>N#FNcOURlLy8~xP!_m$Y}->g(ul/-}+Cg;J(8iuiKIRBkj+0&xPW/S!1~Jc9' );
define( 'LOGGED_IN_KEY',    'f#<LbRS3BvaW%bOt0NZ5pl%1+odq|}nLMUTw(ywo)o/F8D##1SDpi_&IGUxUvqR/' );
define( 'NONCE_KEY',        'iA-cZdQ@z2=K)sNW~ .38:TE,R~pSpOL5kcvlVhA(ZTA,mXQ^ bHM? Lv4b[Ed%E' );
define( 'AUTH_SALT',        '&oV`Z4?`PYXH6)yUQLf]@M5v K`YZF/e[<JL$5Ph2;PvFwD`eMd[W[UPkh[sfLh|' );
define( 'SECURE_AUTH_SALT', '<P^6XQZHSnJ{R>@`,s0xSz{FTI6umQQ_]%w*u4>@W~RVnaf*[9|P10ij%@{fPr47' );
define( 'LOGGED_IN_SALT',   'h2,@<<S;$0$.p>VO7If|/%`Y-$^^[01Gf$y`ILq`r|~rd3?FM!@ ?1mf){k_h0W}' );
define( 'NONCE_SALT',       'qyRE?DnvNFNG<}=$<pe?-,dE/8Smc&[TOyZu-p.BwP$O5DBSz]:~o!N.E-q1|WXL' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wak_';

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
