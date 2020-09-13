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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'renecreative_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '+Li:B4PLrzFy@)|KnrI_rCiy3/^Km$:!s9Kwh]HwsIkjanj+Hx6pO5YM=W5[CC@P' );
define( 'SECURE_AUTH_KEY',  'Bpr1sOP+-y`ymb RN:_%P%W]e{DW/hOFmc&mIX+`3pxRw/Nnf~jVR#k3AR!.3~S4' );
define( 'LOGGED_IN_KEY',    'ow2)UA)]lOTdjy4_,&un7!SFMq^I%<AIUiW0Ic_tS@$xg0mHMzDkn(W-@>3lp<[0' );
define( 'NONCE_KEY',        'I,cUnm[:m@:srL<K~q7?e.Ga:!Rn`Po|CJxMgrot@ZuwymJk=!WF|@L2T=dzWgvx' );
define( 'AUTH_SALT',        '/{)So<p#c;e[@aTeGqCQ!6Km8<duyL@cc^D(S6=;-;nVoQ=Mq!l#akLdIe_E;PiI' );
define( 'SECURE_AUTH_SALT', 'x1F_$}wR7=_X3f:_{6O=^km;jrrP9wMHQ$<6QqZn+{sQ1&1@W#*`+tYjfmt6T?0a' );
define( 'LOGGED_IN_SALT',   '<rb-BN|Z_`Ga[wcD[rslES%29K)Nh X)>ry2A@.Nn.E|rKE,#<3FOg#;HPoL!Mpu' );
define( 'NONCE_SALT',       'UErL:VJ$}EGNHGGL.oQy-8bdvo{3@EY@R.PK*GeXxEo.xKs*;igQ^8TT#VfIA/Fk' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
