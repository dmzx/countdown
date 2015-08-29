<?php
/**
*
* @package phpBB Extension - PhpBB Countdown
* French translation by stratege1401 (http://www.fasx.org) & Galixte (http://www.galixte.com)
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'COUNT_YEARS'				=> 'années',
	'COUNT_MONTHS'				=> 'mois',
	'COUNT_DAYS'				=> 'jours',
	'COUNT_HOURS'				=> 'heures',
	'COUNT_MINUTES'				=> 'minutes',
	'COUNT_SECONDS'				=> 'secondes',
	'COUNT_DOWNCOUNT'			=> 'Décroissant',
	'COUNT_UPCOUNT'				=> 'Croissant',
	'INSTALL_COUNTDOWN'					=> 'Installer l’extension « PhpBB Countdown »',
	'INSTALL_COUNTDOWN_CONFIRM'			=> 'Êtes-vous sûr(e) de vouloir installer l’extension « PhpBB Countdown » ?',
	'COUNTDOWN'							=> 'Compte à rebours pour phpBB',
	'COUNTDOWN_EXPLAIN'					=> 'Installe l’extension « PhpBB Countdown » en utilisant la méthode automatique UMIL.',
	'UNINSTALL_COUNTDOWN'				=> 'Désinstaller l’extension « PhpBB Countdown »',
	'UNINSTALL_COUNTDOWN_CONFIRM'		=> 'Êtes-vous sûr(e) de vouloir désinstaller l’extension « PhpBB Countdown » ? Les paramètres et les données sauvegardées par cette extension seront effacés !',
	'UPDATE_COUNTDOWN'					=> 'Mettre à jour l’extension « PhpBB Countdown »',
	'UPDATE_COUNTDOWN_CONFIRM'			=> 'Êtes-vous sûr(e) de vouloir mettre à jour l’extension « PhpBB Countdown » ?',

	'ACP_COUNTDOWN_CONFIG'				=> 'Paramètres',
	'ACP_COUNTDOWN_CONFIG_EXPLAIN'		=> 'Page de configuration l’extension « PhpBB Countdown » créée par <a href="http://www.dmzx-web.net"><strong>dmzx</strong></a>. Auteur Stoker.',
	'COUNTDOWN_VERSION'					=> 'Version',
	'COUNTDOWN_DONATE'					=> 'Si vous appréciez cette extension vous pouvez faire un <a href="http://www.phpbb3bbcodes.com/donate.php"><strong>don</strong></a>.',
	'ACP_COUNTDOWN_CONFIG_SET'			=> 'Configuration',
	'COUNTDOWN_CONFIG_SAVED'			=> 'Configuration de l’extension « PhpBB Countdown » sauvegardée',

	'COUNTDOWN_ENABLE'					=> 'Activer le compte à rebours',
	'COUNTDOWN_ENABLE_EXPLAIN'			=> 'Active ou désactive le compte à rebours.',
	'COUNTDOWN_DIRECTION' 				=> 'Type de compte à rebours',
	'COUNTDOWN_DIRECTION_EXPLAIN'		=> 'Le compte à rebours peut compter de manière croissante ou de manière décroissante.',
	'COUNTDOWN_DATE' 					=> 'Date du compte à rebours',
	'COUNTDOWN_DATE_EXPLAIN'			=> 'Exemple : 2015/12/31 00:00:00.',
	'COUNTDOWN_TEXT' 					=> 'Texte du compte à rebours',
	'COUNTDOWN_TEXT_EXPLAIN'			=> 'Le texte apparaîtra avant le compte à rebours.',
	'COUNTDOWN_COMPLETE'	 			=> 'Texte de la fin du compte à rebours',
	'COUNTDOWN_COMPLETE_EXPLAIN' 		=> 'Ce texte remplacera le compte à rebours une fois ce dernier terminé.',
	'COUNTDOWN_TESTMODE' 				=> 'Mode de test du compte à rebours',
	'COUNTDOWN_TESTMODE_EXPLAIN'		=> 'Si activé, uniquement les administrateurs peuvent voir le compte à rebours.',
	'COUNTDOWN_YEAR'	 				=> 'Années du compte à rebours',
	'COUNTDOWN_YEAR_EXPLAIN' 			=> 'Si activé, les années seront affichées dans le compte à rebours.',
	'COUNTDOWN_MONTH'	 				=> 'Mois du compte à rebours',
	'COUNTDOWN_MONTH_EXPLAIN' 			=> 'Si activé, les mois seront affichés dans le compte à rebours.',
	'COUNTDOWN_OFFSET_ENABLE' 			=> 'Fuseau horaire du compte à rebours',
	'COUNTDOWN_OFFSET_ENABLE_EXPLAIN' 	=> 'Si activé, le fuseau horaire sera pris en compte dans le compte à rebours.',
	'COUNTDOWN_OFFSET' 					=> 'Paramètres du fuseau horaire',
	'COUNTDOWN_OFFSET_EXPLAIN'			=> 'Permet d’utiliser un fuseau horaire spécifique pour tous les utilisateurs vous pouvez le saisir ici. Par exemple une valeur de 4 équivaut à « UTC+04:00 » pour Océan Indien/Réunion ou encore une valeur de -4 équivaut à « UTC-04:00 » pour Amérique/Guadeloupe.',
));
