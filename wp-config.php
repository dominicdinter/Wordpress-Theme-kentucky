<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es auf der {@link http://codex.wordpress.org/Editing_wp-config.php
 * wp-config.php editieren} Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt, wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch direkt in dieser Datei alle Eingaben vornehmen und sie von wp-config-sample.php in wp-config.php umbenennen und die Installation starten.
 *
 * @package WordPress
 */

/**  MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. */
/**  Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define('DB_NAME', 'kentucky');

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define('DB_USER', 'root');

/** Ersetze password_here mit deinem MySQL-Passwort */
define('DB_PASSWORD', 'root');

/** Ersetze localhost mit der MySQL-Serveradresse */
define('DB_HOST', 'localhost');

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define('DB_CHARSET', 'utf8');

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase. 
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service} kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @seit 2.6.0
 */
define('AUTH_KEY',         'ZZ,zEW?f+|ZE(YL_b0H*Bv@D6hT4!Ng3E-lSD6QVLz|blifD_Xh?<8@&z>]XM(].');
define('SECURE_AUTH_KEY',  '2[pX2}oI3fDi-2X/gv*wJ+./Fwo}g^8WJ?Np51k~!&w^ui$LS=q8jqwEeoM(wTYp');
define('LOGGED_IN_KEY',    ')Z4(X;%NMnpKjqy5W`Uw8`:HzPd(5EL|:x.NZE}%#WOrPVy6GJtKolmS(lE>OB5|');
define('NONCE_KEY',        'Imq]Ytz{39<YbP>h_OOhCl<8aluv;_ h;Hl:~cN-J:=-*`VH@t&O75^HcD[OQ@2-');
define('AUTH_SALT',        '1Y=eQB#[w)|C,VRhrAw7R^cx=k:!cOV2;c_slNlM35O,@[f}ZRo#,Pvp> DLCCV9');
define('SECURE_AUTH_SALT', 'vKa7?FkBifLFBXLPpahCAT#n+(#uWc-pWr!l+*~7!G>{j<-]-(Vl3bqj,Bcxu#w,');
define('LOGGED_IN_SALT',   'w8`hG+F9B>!=)l~,!O.O%=Bye@c6tr[8Wk},k@Emt+6]a&nNYuUf6t};A%mAzSm+');
define('NONCE_SALT',       'a3AC5:XhA5eSJi+SAH|4+DPlRC<ct/t|-}@+/6r2u<qhDEn)a7Jue}q(hc:Y#U`d');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 *  Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 *  verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Sprachdatei
 *
 * Hier kannst du einstellen, welche Sprachdatei benutzt werden soll. Die entsprechende
 * Sprachdatei muss im Ordner wp-content/languages vorhanden sein, beispielsweise de_DE.mo
 * Wenn du nichts einträgst, wird Englisch genommen.
 */
define('WPLANG', 'de_DE');

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