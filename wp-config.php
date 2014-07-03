<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'everydayadventuresmn');

/** MySQL database username */
define('DB_USER', 's3_eda');

/** MySQL database password */
define('DB_PASSWORD', 'GWQs9Hv1@');

/** MySQL hostname */
define('DB_HOST', 'mysql.everydayadventuresmn.com');

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
define('AUTH_KEY', 'URm(bH@?hI^B[y*<$+@[UVHPNb;jdfkIA{x?M$gAWU<HhDPTQ$_%SQVCETrf||Z]y(LQBA{T^*VqDd;$ECQagI|t^Px]xV=J+qP!MiPMqmgZ{^?Ym%nAS;Re^<jBqZ(!');
define('SECURE_AUTH_KEY', 'LEnlXBY(|vwop!*BA;_CLXGq[L[(U+f^ieJL)|?HOi^v+Tbr_a$Kaz_cukORuyb*Lf[Pk@|[>;ihQxAA>v|VpbKl@^]I%{a+C<UUQ%dAAxZW%AUpH|poop}O;Y!Dwv+w');
define('LOGGED_IN_KEY', '_dq;-G=I=C<E_!DduIfWg{%?mxPQrM_ykhTOSa(t+nMW>OSNYCRVDs%ji+=T>u_SGbb!{]!nuy-zh>{hO>yr;E!Owy-GHT=FGF>[T@s@<wH!|@kjqLPU[f|-rmMtv/A+');
define('NONCE_KEY', 'Iv*-IZFOMS>q*kwx_MkwM/RE;yJy$auNX]+FBh-x;/v;uigySUM(JX|e=_JCKE=wHO[lVMJWT+c/]^y!h>xXPBx@D%d/hwxMCNn<aqh!sWV?gCg^ohhg?}lGY=lTtplr');
define('AUTH_SALT', 'tP%}!&%U|E&LVB?yIRP|-}i<t|UOuh;XED>FVea%PYs%ep^pah;?/WSQwVz>T!%hA<Vc<ZFL|v!Z&IKDrOmnolbg_hZ!BV[D{D[mgkz=/n<!J(zMJrOzLW^}mTBK?lw_');
define('SECURE_AUTH_SALT', '?&n_fShXV?l}*$$Q_yqm*wBPVOkr$[yq&SOB>-G?$aP}CVUu+o_I^eL&q>I{&BnEHeFPV&kCASEXUpdzQIasPrVLk)zOz%ZTXZ(<j<iR=DZJl]eqzTiD-DsJw[PhVNHZ');
define('LOGGED_IN_SALT', 'VLPz@eo$IRDLe+s$!fb>Kl?tSxkUUgUmN^!+^!AsjBT!XfiVXFokQuywVvEoj[lA^NHF)LgY=$UgSqEqynW^n{()!=Ir>&)pnF[$$Aw<%L@dv>Lg*)^mBXouwcEz>MEc');
define('NONCE_SALT', 'Hng|z+G|nQeA|ISv%Y;^bFRTx[G@V$UZk&JEE=BJayeAeym<Bs]LEaF>[BowP/Va?-uGPTOeSiTx?HF]lE;wSzIsY*-nJ<X!]N$buk@aOY{_xRgi_+rq[_yqpw+&BoCQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_qzpf_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
