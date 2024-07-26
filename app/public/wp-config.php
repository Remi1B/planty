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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'T[%{+*uG8jdH,r`_gESs> W*?Lleyt:}16b:_vNQ&1zMIKkb<S=sq,&`e.o+S-`5' );
define( 'SECURE_AUTH_KEY',   '(#hR@9QO)TEz&_igz$g@qG7!g1-6[epVKeyPhw8o~xH.R-c@;Y~[A6mX;Ww>k*%l' );
define( 'LOGGED_IN_KEY',     'fW51`X5VNvIS5#WXH5NH|q-+#hO5}2Vw+V<0:<H`RQXJY-V6v0O;TUw<=.q>wVd|' );
define( 'NONCE_KEY',         'm{U:XO?$`0${<c[e2eW0_*{x;c/lHzLSA>H)UkN@U]<w,;V0m%xREPO6>dHT(b*f' );
define( 'AUTH_SALT',         '=t63j+)5@3vz!SL&+1G0<G%{+&0q1DuZIkmG:B{fahI==R01g(2$^LsKi>$SqUG`' );
define( 'SECURE_AUTH_SALT',  '{t=z:O{-)2!KfF;+8biJ{3[&cIljIRoWS5>1o/Y9RJivPL[0{1mtsy8-hyQQ-nBA' );
define( 'LOGGED_IN_SALT',    'k:E*3DY8$Ib`,Ab;P{R{sC{%hE1R!aah+oPD(D:5*.F@|^.=i;YCu%{kxse28YM[' );
define( 'NONCE_SALT',        'Q (7 V>d!o8ucGu-VlE46QpmG/p!*3CWG@5.p+VsWz ;[rbn.d]/{93;AKT9gY3J' );
define( 'WP_CACHE_KEY_SALT', '`.Z!8nmP4=jLU);W-<{/@O97p5xg{ Ll^`Lv*Y(Fy{1W:^ydO:?m9oDw|=[pk*xo' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
