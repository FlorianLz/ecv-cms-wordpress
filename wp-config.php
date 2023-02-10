<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'ecv-cms-wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'M=GW$`H:R^pAHM`G]:Rq,K#<QK[,0nT%YD)D,HV4UB&CLbbg=1uO-x>{=QbN/9< ' );
define( 'SECURE_AUTH_KEY',  '=b=l},HO!o9:_[r /]N=ynDWU I6?Oo3c BNIP*t [D<l6;U,OO)n/(1=O!+U`Cj' );
define( 'LOGGED_IN_KEY',    '9%Sr=624|a=WMth3K)8L_;?m7f4stL0=<MBzX^6F>&9)Yfl*C:N*Lh8cQ0Rtg%>1' );
define( 'NONCE_KEY',        'n#Z{yI{So ^}_9u$Aj~!M]y7[igCJ($^g;QLt6AM`,LbWZ@n|>b$^Ri;aLMps!0A' );
define( 'AUTH_SALT',        'Br{BuZ.lxWn#{,prJKw{5<cE*;xY)|H`J2P*8rX,N$kf/vbALl!E7Z!fyNm%qm.9' );
define( 'SECURE_AUTH_SALT', 'i),VJGP$4ZA{qw,oNK0`MO/JxrDf9?6d[=*]<{N%T^/cUVY[XLD1#wC%H7xOk3 R' );
define( 'LOGGED_IN_SALT',   '`gH(-N6|H{ViCpEjz&h!3^P$jAA[iR]Cr|1)cSG4BFFY`|mc@A|u`qo.EeoNe$mF' );
define( 'NONCE_SALT',       'ZSEUp%,xJz[8;azHO8(G-mLN_k!6Fe9 qSg8/xZa-sBy8AZ.!`]jdw.N_JCT)[+/' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
