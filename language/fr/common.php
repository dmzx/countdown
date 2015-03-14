<?php
/**
*
* @package phpBB Extension - PhpBB Countdown
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
// ’ » “ ” …
//
// french edit by stratege1401 from www.fasx.org

$lang = array_merge($lang, array(
	'COUNT_YEARS'				=> 'Années',
	'COUNT_MONTHS'				=> 'Mois',
	'COUNT_DAYS'				=> 'Jours',
	'COUNT_HOURS'				=> 'Heures',
	'COUNT_MINUTES'				=> 'Minutes',
	'COUNT_SECONDS'				=> 'Secondes',
	'COUNT_DOWNCOUNT'			=> 'Décroissant',
	'COUNT_UPCOUNT'				=> 'Croissant',
	'INSTALL_COUNTDOWN'					=> 'Installer PhpBB Countdown',
	'INSTALL_COUNTDOWN_CONFIRM'			=> 'Etes vous prets pour installer Countdown Ext.?',
	'COUNTDOWN'							=> 'PhpBB Countdown',
	'COUNTDOWN_EXPLAIN'					=> 'Installer PhpBB Countdown database avec la méthode automatique UMIL.',
	'UNINSTALL_COUNTDOWN'				=> 'Désinstaller PhpBB Countdown',
	'UNINSTALL_COUNTDOWN_CONFIRM'		=> 'Etes vous préts pour Désinstaller PhpBB Countdown? Le paramétrages et les data sauvegardés par cette ext. seront effacés!',
	'UPDATE_COUNTDOWN'					=> 'Mise à jour de PhpBB Countdown',
	'UPDATE_COUNTDOWN_CONFIRM'			=> 'Etes vous préts pour mettre à jour de PhpBB Countdown Ext.?',

	'ACP_COUNTDOWN_CONFIG'				=> 'PhpBB Countdown',
	'ACP_COUNTDOWN_CONFIG_EXPLAIN'		=> 'Page de configuration pour Countdown extension par <a href="http://www.dmzx-web.net"><strong>dmzx</strong></a>. Author Stoker.',
	'COUNTDOWN_VERSION'					=> 'Version',
	'COUNTDOWN_DONATE'					=> 'Considerez un <a href="http://www.phpbb3bbcodes.com/donate.php"><strong>Donation</strong></a> si vous aimez l Extension',
	'ACP_COUNTDOWN_CONFIG_SET'			=> 'Configuration',
	'COUNTDOWN_CONFIG_SAVED'			=> 'PhpBB Countdown configuration sauvé',

	'COUNTDOWN_ENABLE'					=> 'Activer le countdown',
	'COUNTDOWN_ENABLE_EXPLAIN'			=> 'Activer ou Desactiver PhpBB Countdown',
	'COUNTDOWN_DIRECTION' 				=> 'Type de Countdown',
	'COUNTDOWN_DIRECTION_EXPLAIN'		=> 'Countdown ext. peut étre soit croissant ou décroissant.',
	'COUNTDOWN_DATE' 					=> 'Countdown date',
	'COUNTDOWN_DATE_EXPLAIN'			=> 'Example: 2015/12/31 00:00:00',
	'COUNTDOWN_TEXT' 					=> 'Countdown texte',
	'COUNTDOWN_TEXT_EXPLAIN'			=> 'Le texte du Countdown apparaitra juste devant les chiffres. Vous pouvez utiliser HTML',
	'COUNTDOWN_COMPLETE'	 			=> 'Texte de fin du Countdown',
	'COUNTDOWN_COMPLETE_EXPLAIN' 		=> 'Ce texte remplace le countdown une fois qu il est fini',
	'COUNTDOWN_TESTMODE' 				=> 'Activer le mode de test',
	'COUNTDOWN_TESTMODE_EXPLAIN'		=> 'Si le mode de test est actif, seul les admin peuvent voir le countdown',
	'COUNTDOWN_YEAR'	 				=> 'Active l année',
	'COUNTDOWN_YEAR_EXPLAIN' 			=> 'Utiliser cette fonction pour activer les Années dans ce countdown',
	'COUNTDOWN_MONTH'	 				=> 'Activer les Mois',
	'COUNTDOWN_MONTH_EXPLAIN' 			=> 'Utiliser cette fonction pour activer les Mois dans ce countdown',
	'COUNTDOWN_OFFSET_ENABLE' 			=> 'Enable timezone',
	'COUNTDOWN_OFFSET_ENABLE_EXPLAIN' 	=> 'Activer ou arreter les Ptimezone ici',
	'COUNTDOWN_OFFSET' 					=> 'Parametres Timezone',
	'COUNTDOWN_OFFSET_EXPLAIN'			=> 'Si vous souhaitez une timezone faites:<br />Faites "-/+ 1" ou autres valeurs pour autre timezone',
));
