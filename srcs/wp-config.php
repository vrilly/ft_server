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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':-^<6bLpAg670NSN~e$dAY^>tQ3)3>EXaQs!^0.+&|Gw Lo0j1Z]0CyGt9g5*%8*' );
define( 'SECURE_AUTH_KEY',  'V(3%!/Q1B?n1!/Ez8[m#!bsN*;`0%qEUAbS%6#*!;h}`{g*;Sl,HJ^3wcA!m@wt9' );
define( 'LOGGED_IN_KEY',    'K%sQ@TQ>Hnd!)9~ir$xA>4S(nf JECF9v)>m%0@mO)bW:PLk&*,:.vU1=:@O P0n' );
define( 'NONCE_KEY',        'Lr@.htZG](0b%a?2-BLYhB~.0,?`(KPc|}eUe$DI/N)cY.G7K<TPTJ;{~QQJ!A=s' );
define( 'AUTH_SALT',        '5lA#}wQ3It12FZ]QVdk^aI[DvPQx]a=rd~@>2@.Y=!8fz<{>nqAehz|tN=v&bo$a' );
define( 'SECURE_AUTH_SALT', '9)s~jn/7]`s9vm<}-N?5 Q6i>{HQ {,NLm8!Eo<SKsJ9n`v`V{NVH<7:,N7+jwmH' );
define( 'LOGGED_IN_SALT',   'lz./|U|TifBv,?s(.|6-b5YJtI@a{tvtRQ~Zuu:0+Kbru#)b{~YAYTpwWuH<L`sb' );
define( 'NONCE_SALT',       'sM$Wa#>XZbN]&3;/kOW=>v%Jg[|j@@q=nWV#Q~Za:)]vn.JxI*:?*kyeZ{JLalA*' );

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
