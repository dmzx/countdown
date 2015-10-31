<?php
/**
*
* @package phpBB Extension - phpBB Countdown
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

$lang = array_merge($lang, array(
	'COUNT_YEARS'				=> 'Jaren',
	'COUNT_MONTHS'				=> 'Maanden',
	'COUNT_DAYS'				=> 'Dagen',
	'COUNT_HOURS'				=> 'Uren',
	'COUNT_MINUTES'				=> 'Minuten',
	'COUNT_SECONDS'				=> 'Seconden',
	'COUNT_DOWNCOUNT'			=> 'Omlaag',
	'COUNT_UPCOUNT'				=> 'Omhoog',
	'INSTALL_COUNTDOWN'					=> 'Installeer de PhpBB Countdown extensie',
	'INSTALL_COUNTDOWN_CONFIRM'			=> 'Ben je klaar om de PhpBB Countdown extensie te installeren?',
	'COUNTDOWN'							=> 'PhpBB Countdown',
	'COUNTDOWN_EXPLAIN'					=> 'Installeer PhpBB Countdown database verandereringen met UMIL auto method',
	'UNINSTALL_COUNTDOWN'				=> 'Deinstalleer PhpBB Countdown',
	'UNINSTALL_COUNTDOWN_CONFIRM'		=> 'Ben je klaar om PhpBB Countdown te deinstalleren? alle instellingen en opgeslagen data van deze extensie, zullen worden verwijderd!',
	'UPDATE_COUNTDOWN'					=> 'Update PhpBB Countdown',
	'UPDATE_COUNTDOWN_CONFIRM'			=> 'Ben je klaar om de PhpBB Countdown extensie te updaten?',

	'ACP_COUNTDOWN_CONFIG'				=> 'PhpBB Countdown',
	'ACP_COUNTDOWN_CONFIG_EXPLAIN'		=> 'Dit is de configuratie pagina van de PhpBB Countdown extensie, die gemaakt is door <a href="http://www.dmzx-web.net"><strong>dmzx</strong></a>. en de auteur is <strong>Stoker</strong>.',
	'COUNTDOWN_VERSION'					=> 'Versie',
	'COUNTDOWN_DONATE'					=> 'Overweeg om een eventuele <a href="http://www.phpbb3bbcodes.com/donate.php"><strong>donatie te doen</strong></a> als je deze extensie leuk vindt.',
	'ACP_COUNTDOWN_CONFIG_SET'			=> 'Configuratie',
	'COUNTDOWN_CONFIG_SAVED'			=> 'PhpBB Countdown instellingen zijn nu opgeslagen',

	'COUNTDOWN_ENABLE'					=> 'Inschakelen Countdown',
	'COUNTDOWN_ENABLE_EXPLAIN'			=> 'Inschakelen of uitschakelen van de PhpBB Countdown kun je hier doen.',
	'COUNTDOWN_DIRECTION' 				=> 'Countdown richting',
	'COUNTDOWN_DIRECTION_EXPLAIN'		=> 'De PhpBB Countdown, kan naar boven en naar beneden tellen.',
	'COUNTDOWN_DATE' 					=> 'Countdown datum',
	'COUNTDOWN_DATE_EXPLAIN'			=> 'Bijvoorbeeld: 2015/12/31 00:00:00',
	'COUNTDOWN_TEXT' 					=> 'Countdown tekst',
	'COUNTDOWN_TEXT_EXPLAIN'			=> 'De Countdown tekst zal worden weergegeven voor het naar boven of naar beneden tellen',
	'COUNTDOWN_COMPLETE'	 			=> 'De complete tekst van de PhpBB Countdown',
	'COUNTDOWN_COMPLETE_EXPLAIN' 		=> 'Deze tekst vervangt de tekst als de PhpBB Countdown compleet is',
	'COUNTDOWN_TESTMODE' 				=> 'Activeer testmode',
	'COUNTDOWN_TESTMODE_EXPLAIN'		=> 'Als de testmode is geactiveerd, kunnen alleen administrators de PhpBB Countdown bekijken.',
	'COUNTDOWN_YEAR'	 				=> 'Activeer jaren',
	'COUNTDOWN_YEAR_EXPLAIN' 			=> 'Activeer deze functie als je de jaren wilt inschakelen in de PhpBB Countdown.',
	'COUNTDOWN_MONTH'	 				=> 'Activeer maanden',
	'COUNTDOWN_MONTH_EXPLAIN' 			=> 'Activeer deze functie als je de maanden wilt inschakelen in de PhpBB Countdown.',
	'COUNTDOWN_OFFSET_ENABLE' 			=> 'Inschakelen tijdzone.',
	'COUNTDOWN_OFFSET_ENABLE_EXPLAIN' 	=> 'hier kun je de tijdzone in of uit schakelen.',
	'COUNTDOWN_OFFSET' 					=> 'Instellingen tijdzone.',
	'COUNTDOWN_OFFSET_EXPLAIN'			=> 'Als je een specifieke tijdzone wilt gebruiken voor alle gebruikers, kan je het hier invullen.<br />Bijvoorbeeld: "-6" voor Central Standard Time en "4" for Gulf Standard Time',
));
