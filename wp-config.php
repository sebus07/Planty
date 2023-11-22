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
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'AB!%`!ua*,QCyZFvh3A0fz9@od)_iUPH4^X{k7M[UH^[nms;-Mq,gnlZ{-;9hXVm' );
define( 'SECURE_AUTH_KEY',  '2,/W4U{z5(E8WrQP}q,w&a{(^XWobZD%;Tb^I)AL;z+q,be]kPDBdf,G,ZzV6&-=' );
define( 'LOGGED_IN_KEY',    '+S8MC*aW%>b>Qs^8BsAi?k|E4(E[_0<r7)BH}DM. `a%2,lZng+d-!>XEY@M8 FP' );
define( 'NONCE_KEY',        ']t;akLi7=X~@g>Eiu(S}DQi?o:iSMev{M(TS)ayHpvf@o<,Yya1Uf|jUt>.m>7)w' );
define( 'AUTH_SALT',        '}2FwuMinZ-zchn+.q0n4P!n+>+>I37I+<<uYb:fA}T`IakYGb:v9b=%AXq2xj3tx' );
define( 'SECURE_AUTH_SALT', 'u`e>DYe{Rma0lJO9dn0KscQjj9!~0X25l:#.-<?L9F&F^pzq@hV$ W*_[q E7eJQ' );
define( 'LOGGED_IN_SALT',   'k6)j|!btoO-wuX+i!l8+Xy$OA8d-kR P(Xz)2zsuE0t;AXDJA.d#^IC1d/+L|S||' );
define( 'NONCE_SALT',       'm wqc$7zUaR>;vTnM/FEnCZ$/L,5X5*I:Pbr-NRx[f`W xa%.Vf qwaMC7s&u43%' );
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
