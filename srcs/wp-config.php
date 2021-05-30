<?php

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'wfgb2J2[uf{/d}T]Ai3V)pyV2if1_Q5~ A=cQkv~iC+yEC}Zxhg:$a{9+|H6Wrc<');
define('SECURE_AUTH_KEY',  '{v?]BFc=i1,jD&uKbUrk|:]A+7-<NiN}Z7iFZ9,h^3@,[k*6vlFhbKy25qbo<jg]');
define('LOGGED_IN_KEY',    'iC%~ZC97iMuLCT(v<MRm9o]|N?nCP.M%R-qKlj@[K}Z1sFbYGU#]xD-$K!B7>83P');
define('NONCE_KEY',        'C 20(%GR7*=n30GuFQFrZf(~CxdnvGC9nlK}:;^=N~&x.ri70eJ=[Bs+QmFdn+jf');
define('AUTH_SALT',        'k$ORl|ZD#+~G+}4j,@.#P*6#Wk`IDVn2]7CA:@ok#F)~ j_)A!i.lQM>[s!/Z;d,');
define('SECURE_AUTH_SALT', 'U}mh1*s=OY 0rRfta+^JO4-(nNeB?+a<YKzK63hl6=0&;O4i-w>#=8Uy,$L[c~A_');
define('LOGGED_IN_SALT',   'cO9+:ygpP)_MD5I|?_|Bo(E=77$|8n6j(AcCl7NyG5VGcamt (&v(l9_:+=^ce8P');
define('NONCE_SALT',       '7n %8`u=|.?b`Z5_@#ePc:2AS:~`_gKI]n{8-/IMxri]Ar$JvU7I)gfm&gmOmBrX');

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