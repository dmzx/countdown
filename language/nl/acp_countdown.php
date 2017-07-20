<?php
/**
*
* @package phpBB Extension - phpBB Countdown
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
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
	'COUNTDOWN_TITLE'					=> 'phpBB Countdown',
	'COUNT_DOWNCOUNT'					=> 'Af',
	'COUNT_UPCOUNT'						=> 'Op',
	'COUNTDOWN_CONFIG_SET'				=> 'Configuratie',
	'COUNTDOWN_CONFIG_SAVED'			=> 'phpBB Countdown Instellingen opgeslagen',
	'COUNTDOWN_ENABLE'					=> 'Schakel countdown in',
	'COUNTDOWN_ENABLE_EXPLAIN'			=> 'Schakel de phpBB Countdown hier in of uit.',
	'COUNTDOWN_DIRECTION' 				=> 'Countdown richting',
	'COUNTDOWN_DIRECTION_EXPLAIN'		=> 'De Countdown ext. kan op en af tellen.',
	'COUNTDOWN_DATE' 					=> 'Countdown datum',
	'COUNTDOWN_DATE_EXPLAIN'			=> 'Voorbeeld: 2015/12/31 00:00:00',
	'COUNTDOWN_TEXT' 					=> 'Countdown tekst',
	'COUNTDOWN_TEXT_EXPLAIN'			=> 'Countdown tekst zal net voor de countdown weergegeven worden.',
	'COUNTDOWN_COMPLETE'	 			=> 'Countdown compleet tekst',
	'COUNTDOWN_COMPLETE_EXPLAIN' 		=> 'Deze tekst zal de countdown vervangen na afloop.',
	'COUNTDOWN_TESTMODE' 				=> 'Activeer testmodus',
	'COUNTDOWN_TESTMODE_EXPLAIN'		=> 'Indien de testmodus actief is kunnen enkel beheerder de countdown zien.',
	'COUNTDOWN_YEAR'	 				=> 'Activeer jaren',
	'COUNTDOWN_YEAR_EXPLAIN' 			=> 'Activeer deze functie om jaren te activeren in de countdown.',
	'COUNTDOWN_MONTH'	 				=> 'Activeer maanden',
	'COUNTDOWN_MONTH_EXPLAIN' 			=> 'Activeer deze functie om maanden te activeren in de countdown.',
	'COUNTDOWN_OFFSET_ENABLE' 			=> 'Schakel tijdzone in',
	'COUNTDOWN_OFFSET_ENABLE_EXPLAIN' 	=> 'Schakel de tijdzone hier in of uit.',
	'COUNTDOWN_OFFSET' 					=> 'Tijdzone instellingen',
	'COUNTDOWN_OFFSET_EXPLAIN'			=> 'Indien je een specifieke tijdzone wenst te gebruiken voor alle gebruikers kan je deze hier typen.<br />Zoals "-6" voor Central Standard Time en "4" voor Gulf Standard Time.',
));
