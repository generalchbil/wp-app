<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'db663840543');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'dbo663840543');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'zO4Lw27M');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'db663840543.db.1and1.com');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Lip4WC?B*$gPTjP]J ryd/uWQy9 O?!`>PTV5Q;)Q$3p+6Xxz/8w_Z}KvG>P9<5e');
define('SECURE_AUTH_KEY',  '(~AvP.Mj7jzH74x1{bgiOy16ex[qzW^MU>y.S u?_f*:1OJ>yCm9$wt,8%N+ %w@');
define('LOGGED_IN_KEY',    '18DhEg9^dRRnJX&c|w6;mZS#W2Z7<hR {Vi%$2XNep/5s3#L[m~nex~:x9_HoyBB');
define('NONCE_KEY',        'd_K{x%[]$;|LAzG5M-8ma_!4+Sxzw%>q/yo_(=Z@#bE~qPvOXq8;?^q5,x0El_]t');
define('AUTH_SALT',        '<G2s>T&/j?t-<,fAn>3iwVJ|#+7a5`+Fcc%cJ9(v;`yl?}|0Q-hIj^`L~$Jgc6l7');
define('SECURE_AUTH_SALT', 'j?o1UwN1G,{%[&D;xUuUS)EKi.I+.WX7v@=LMmEju%hVgD3j>|*zA[d+goX&}Dmx');
define('LOGGED_IN_SALT',   'gvTm6?8/G[GDw_q -h%.`J.oJbEX%/TnAU=bw+aRS>T}`R=ey6p4/Y[C:J8,N?+S');
define('NONCE_SALT',       'uAU) [!if5mP@SqZpvJ2+P(k;U>JV]-Clh<z~!DA/G:vYWPV4;+q+s>4HlgJ3Y`#');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');