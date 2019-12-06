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
define( 'DB_USER', 'qwasar2' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qwasar2019szn2!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8080' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '0%:f;UsLwh9L+5[b%fIZ08[R +4C%1,R;dGKEcFhwJQ]kHMvfi+m> *O}2NSSkTX' );
define( 'SECURE_AUTH_KEY',  'Mq_mk{31${R#&b+g6<GwnlY6)Y9tH,T>]Bg^5.47dI@Hx<RcDS:,C;#3_$?lM+Vv' );
define( 'LOGGED_IN_KEY',    'R]<k.k=7X6uk~{U?(G3NG/)&TIJ(&xWRW&H9]x>C?|D8:i1yvII@uKtICw2EX1sV' );
define( 'NONCE_KEY',        ']xHye,*BKQl6PK $W%p #G{P6US0U@hV3hTZU4J@_1,/LL,9{rHZC11c:g.?+MQW' );
define( 'AUTH_SALT',        '<Hr^e`n1dFR^^=~U=1#$(_f1v^%l9A-kCr_$@;cF1t[q%<wc/]lpQcjbrhW+M/?V' );
define( 'SECURE_AUTH_SALT', 'u#D#`%aoF;EbH/XIEy/ZrSxyA|h@F{B`J;X.GkS^SeTLsFA Bz:`Dj]]]X.[7|1]' );
define( 'LOGGED_IN_SALT',   'rv0VR4D:k~LsA$&aWy:Hh)Greb9t&P<|- f_8}i%w9gVKND&5Knd8_[IK$1eCVVa' );
define( 'NONCE_SALT',       '$=`/SM.=yiMtOT!(&s$UzqZbzuN.KWr&-Fv_YlY~!izu|-f)KdU&n`TEb`Cq| >,' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'qw_';

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

