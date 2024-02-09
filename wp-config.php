<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'portfolio' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*(yzHG50n>zig|;[W.E{!GF^D/y[.A<vp|)xV,|(V2fd;wmUp~mug]>PTccr45{N' );
define( 'SECURE_AUTH_KEY',  '>AlmC?w0x]87Ne6uk4cs@{hhjM9KH=L$h4(z HHp!#[D>_Shjl0B57Gx3~>tiTTD' );
define( 'LOGGED_IN_KEY',    'KWzMA>,9w6G>:+JE5Bnk}CX@~H?BI7z>Y}%, w{kLcIOWbno+s[b=6hvU?* $Ump' );
define( 'NONCE_KEY',        'Ie;G5R1z1$t|{~o@o4`= e=xb|Rm;f]*syo7]ZHKEXMgBjlPTQb07~4|eBcA?>U8' );
define( 'AUTH_SALT',        '<;Ufrmbs0`<)HowM+PsvQVDnKEyWS;ttbO{McA`2D?5Ab81IjqRm9{`BF>T1AHvc' );
define( 'SECURE_AUTH_SALT', 'N)*ObpDV%MFH`*GH+xx bL7/e/LGffT5wr^FG3,?_]v5+X.&`Urkh@(3K[ac.wc@' );
define( 'LOGGED_IN_SALT',   'WV[!$0.>LxcQ~qub|IiNn0w56Qn$+dCJUQwZXk%DqQYEfr}z`0E)APNzN]{ZP3*#' );
define( 'NONCE_SALT',       'nC9mAxJCxT>Lv(.]tHt7[qzfddgaA;kBf2|EVn@B%5trC$437E=%U*f!jpNa4!$a' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
