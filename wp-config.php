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
define('DB_NAME', 'btws');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'COt{-yKe9-8/|bWknRlFB2-g6CGr2&08/$}flh|)XCbTE~yWX4,7lL@ZUJe^{/IM');
define('SECURE_AUTH_KEY',  'VBg_A-)!^f9ol!M?v ]o7r:1Ju&3nh&{,L1g5I J]++#v3&,v>~(-Qe?_,R1~-59');
define('LOGGED_IN_KEY',    'en+oIab8.>$Jcn`@X#cJ/%0F8f?&|-+9EkjJ]Rb~{:|Oz-$./:1hPiMv5iA`/1|i');
define('NONCE_KEY',        'Hh+cLG>*P?ib`(.q%9f(DwQzkQ*_K!nN[eB;Ld%b54UK+e5Bu4?+@Lm%K=JoviS]');
define('AUTH_SALT',        '+&FS.^%`FCsLa]R!&p)}cob#91yUtN|Ia0~O]Q67,3J$OI?ZX@d|]5H^m/q:cX-k');
define('SECURE_AUTH_SALT', 'y<g6sSo~-YiKZ5jxHW+^fN^NwKD4zTtkT^-y.|`IxTh+ E|Di0LyFsHF0~G*!kcE');
define('LOGGED_IN_SALT',   'A99.?c8?lDK-%qd,22ZRoe&B.a:TuN.70.(Pj4<7%[3YN/^B6T9=rPg8gaTo^O>:');
define('NONCE_SALT',       'b6Ue):e%gJ)Sfm=;eQpE%W^^/E,w3y5v|SWijWZJXxrY/ttT(Io]&NBHf{612sC-');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'btws_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
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