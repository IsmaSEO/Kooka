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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'kooka' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:4306' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+fu*zDy*~hx 919.:)38[:lpTld{wg1a6VXOMq< wy&&&=njHr|{?6-icR3Cj,?L' );
define( 'SECURE_AUTH_KEY',  'c4ry7/YT/5tZOb$Qx@6w60`)5MUBn!rTv,,ZEo~~k>,d`3}dJ*e}FCRF]VdE{0hB' );
define( 'LOGGED_IN_KEY',    '3%%l<wAQQALA~J=Etn@F/jB5cth(nbdTvq<)e(N^<6bpZaTW.x`1Sppffe7>cUAQ' );
define( 'NONCE_KEY',        'X3t^)3>=yamyR=bhxmH_l>Pp_Q#2ZzxyIIZXM[U7L{je~sui(}N:2RYKT S}Kn-(' );
define( 'AUTH_SALT',        '&W-=3Y91WzpsKm[m6V7:0!qi19)%dmAo{F9>i4fO~/YcNl9}HLl,zyl|NYU/_9F}' );
define( 'SECURE_AUTH_SALT', '=_0?aNU=HaO#PshW,H4(ve##k-9,jl>1xUSk3}Sh^&K=,y&M-d4u*/<Oh%q0l5f.' );
define( 'LOGGED_IN_SALT',   'Q6A)jZ^mCbq9$j0kfhnu=n7Uo,[*y3=fo*[x+6NBFr!}uPHZVQo(k3p[= ]2%,M3' );
define( 'NONCE_SALT',       'U=C-?2Qzu5?7: v^dY[K3scW%Wvc2`K7DFyO%CHym/)klqpSMYFP7{Yc%}qx&;uz' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
