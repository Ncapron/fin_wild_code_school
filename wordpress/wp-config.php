<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress_test');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'dota4life');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'O3vsJ,0-@Cw-Gz<>ks:;oC zjU7}[M-P!i.P{|!d3/m(seY[GuxGd^rI;S=lcb:+');
define('SECURE_AUTH_KEY',  'cjP&o+4-DZKANZ8j(L[K:!l`-s|jD-GbcRIl#R3]h) yN~WG @}V2Db0v:q1pv-B');
define('LOGGED_IN_KEY',    '7`X<dn.~cNR2s;ZhwdSw-z7F+HJ*+-[98nZtRY]O]U8&0HZruY.>te_:-v;]k<2{');
define('NONCE_KEY',        '@ .[fN?+ 0p6Jve=|}pcuJ~!6V7Y9VX2FcmsqXI$TgjuM!uS{d>;/?|0*&I];M>w');
define('AUTH_SALT',        '2UH{8+$~`7bRAZVsr.HMSR5cLMX/R{8oS|Ky<VPWVv%ne^@mOw+72cvI+2.&lwzQ');
define('SECURE_AUTH_SALT', 'pjw)YQiC|iu^Bj81JE8BWU91>uj,{Z,72mZA3^VnfUY77g9<!q/E].V$o0Jcrg2H');
define('LOGGED_IN_SALT',   'D(T0tjcVx[Opl7X@A/{`K/q<Z~DF=+W.}QEMw+W[_92R+=.6quJqP;)H6Dez]:YR');
define('NONCE_SALT',       '{00s@Lp|gc/|R~Iz$UrC%1*hnZo=BY/s~SjDwO^c]9tH..MD^r-L+||?K~/_O<wx');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');