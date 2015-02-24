<?php
/**
*
* @package phpBB Extension - PhpBB Countdown
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* Swedish translation by Holger (http://www.maskinisten.net)
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

$lang = array_merge($lang, array(
	'COUNT_YEARS'				=> 'År',
	'COUNT_MONTHS'				=> 'Månader',
	'COUNT_DAYS'				=> 'Dagar',
	'COUNT_HOURS'				=> 'Timmar',
	'COUNT_MINUTES'				=> 'Minuter',
	'COUNT_SECONDS'				=> 'Sekunder',
	'INSTALL_COUNTDOWN'					=> 'Installera phpBB Countdown',
	'INSTALL_COUNTDOWN_CONFIRM'			=> 'Är du säker på att du vill installera tillägget phpBB Countdown?',
	'COUNTDOWN'							=> 'phpBB Countdown',
	'COUNTDOWN_EXPLAIN'					=> 'Installera phpBB Countdown databas-ändringar med UMIL auto-metoden.',
	'UNINSTALL_COUNTDOWN'				=> 'Avinstallera phpBB Countdown',
	'UNINSTALL_COUNTDOWN_CONFIRM'		=> 'Är du redo att avinstallera tillägget phpBB Countdown? Alla inställningar och all data kommer att avlägsnas!',
	'UPDATE_COUNTDOWN'					=> 'Uppdatera phpBB Countdown',
	'UPDATE_COUNTDOWN_CONFIRM'			=> 'Är du redo att uppdatera tillägget phpBB Countdown?',
		
	'ACP_COUNTDOWN_CONFIG'				=> 'phpBB Countdown',
	'ACP_COUNTDOWN_CONFIG_EXPLAIN'		=> 'Denna konfigureringssida är för tillägget phpBB Countdown av <a href="http://www.dmzx-web.net"><strong>dmzx</strong></a>. Autor Stoker.',
	'COUNTDOWN_VERSION'					=> 'Version',
	'COUNTDOWN_DONATE'					=> '<a href="http://www.phpbb3bbcodes.com/donate.php"><strong>Donera</strong></a> gärna om du tycker om detta tillägg!',
	'ACP_COUNTDOWN_CONFIG_SET'			=> 'Konfigurering',	
	'COUNTDOWN_CONFIG_SAVED'			=> 'Inställningarna för phpBB Countdown har sparats',	
		
	'COUNTDOWN_ENABLE'					=> 'Aktivera countdown',
	'COUNTDOWN_ENABLE_EXPLAIN'			=> 'Aktivera eller deaktivera phpBB Countdown här',
	'COUNTDOWN_DIRECTION' 				=> 'Countdown håll',
	'COUNTDOWN_DIRECTION_EXPLAIN'		=> 'Tillägget phpBB Countdown kan räkna upp och ner. Välj Ja för att räkna ner.',
	'COUNTDOWN_DATE' 					=> 'Countdown datum',
	'COUNTDOWN_DATE_EXPLAIN'			=> 'Exempel: 2012/11/30 00:00:00',
	'COUNTDOWN_TEXT' 					=> 'Countdown text',
	'COUNTDOWN_TEXT_EXPLAIN'			=> 'Texten kommer att visas direkt framför countdownen. Du kan använda HTML.',
	'COUNTDOWN_COMPLETE'	 			=> 'Text för färdig countdown',
	'COUNTDOWN_COMPLETE_EXPLAIN' 		=> 'Denna text kommer att ersätta countdownen när den är färdig. Du kan använda HTML.',
	'COUNTDOWN_TESTMODE' 				=> 'Aktivera testläge',
	'COUNTDOWN_TESTMODE_EXPLAIN'		=> 'Om testläget är aktivt så kan endast admins se countdownen.',
	'COUNTDOWN_YEAR'	 				=> 'Aktivera år',
	'COUNTDOWN_YEAR_EXPLAIN' 			=> 'Aktivera denna funktion för att använda år i countdownen',
	'COUNTDOWN_MONTH'	 				=> 'Aktivera månader',
	'COUNTDOWN_MONTH_EXPLAIN' 			=> 'Aktivera denna funktion för att använda månader i countdownen',
	'COUNTDOWN_OFFSET_ENABLE' 			=> 'Aktivera tidszon',
	'COUNTDOWN_OFFSET_ENABLE_EXPLAIN' 	=> 'Aktivera eller deaktivera tidszon här.',
	'COUNTDOWN_OFFSET' 					=> 'Inställningar för tidszon',
	'COUNTDOWN_OFFSET_EXPLAIN'			=> 'Om du vill använda en speciell tidszon för alla medlemmar så anger du den här.<br />T.ex. "-6" för Central Standard Time och "4" för Gulf Standard Time',
));
