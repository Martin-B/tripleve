<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
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
define('DB_NAME', 'local_tripleve_com');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'drupalpro');

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
define('AUTH_KEY',         'go.cCxgicY)d9jSh|URN|!xq?>K}sed|SS`p)sXQ?dH{DFz]B-HPTI__KM/<il7I');
define('SECURE_AUTH_KEY',  'Ogs/EZ7gRp<Dl(q(hpb2ToQE5_~^0523yZA)*Q[&B,|JuMZY0[),%G_[=F>0#Y.T');
define('LOGGED_IN_KEY',    'MQ661j|$RR5+C+PW^jm5V[~=rN$G7&S$r,6&;|xvQ~lay|-h`}V+9v[TvBglK&mW');
define('NONCE_KEY',        '8Ao,EO-$^JtQn7s_>)RH^%l5>A]b8{mwu<w_n&d !6-h?->jU{.{V=yAIET&#SQs');
define('AUTH_SALT',        '!!1:CUykRz{_h0/RQ)Ie#di;{/_[[LpGUC{iV.+J#{{r4kG]%=r*RgjCUSXC/;.-');
define('SECURE_AUTH_SALT', '-0bYNGQG5V^s#uv]kN7>-E<^DtR/:?S!o{yHTl@-^>0XI7:iTxO%gio$.x}TrYpd');
define('LOGGED_IN_SALT',   '/]A=F*gM2X>I,f^Mb>::J-1im++hh~~gmJRBrxy8:X,FLONtz(F}agA~n!rGpm `');
define('NONCE_SALT',       '&QZNn+cg|8+P]Uf7k&(r.qP|4Co/s|(q 6G.1I~BEDTv/]h|bnUb}u[TohB|uIx(');
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
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define ('WPLANG', 'fr_FR');

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

/** Activation des mises à jour automatiques du coeur de WP **/
define( 'WP_AUTO_UPDATE_CORE', true );
