<?php
/**
* @version $Id$
* @package phpBB Extension - phpBB Countdown (deutsch)
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
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
// ‚ ‘ ’ « » „ “ ” …
//

$lang = array_merge($lang, array(
	'COUNTDOWN_TITLE'					=> 'phpBB Countdown',
	'COUNT_DOWNCOUNT'					=> 'Abwärts',
	'COUNT_UPCOUNT'						=> 'Aufwärts',
	'COUNTDOWN_CONFIG_SET'				=> 'Konfiguration',
	'COUNTDOWN_CONFIG_SAVED'			=> 'phpBB Countdown-Einstellungen gespeichert',
	'COUNTDOWN_ENABLE'					=> 'Aktiviere Countdown',
	'COUNTDOWN_ENABLE_EXPLAIN'			=> 'Hier kannst du den phpBB Countdown aktivieren oder deaktivieren.',
	'COUNTDOWN_DIRECTION' 				=> 'Countdown-Richtung',
	'COUNTDOWN_DIRECTION_EXPLAIN'		=> 'Die Countdown-Extension kann in beide Richtungen zählen - abwärts oder aufwärts.',
	'COUNTDOWN_DATE' 					=> 'Countdown Datum',
	'COUNTDOWN_DATE_EXPLAIN'			=> 'Beispiel: 2015/12/31 00:00:00',
	'COUNTDOWN_TEXT' 					=> 'Countdown-Text',
	'COUNTDOWN_TEXT_EXPLAIN'			=> 'Der Countdown-Text wird direkt vor dem Countdown angezeigt.',
	'COUNTDOWN_COMPLETE'	 			=> 'Countdown komplett-Text',
	'COUNTDOWN_COMPLETE_EXPLAIN' 		=> 'Dieser Text wird den Countdown ersetzen, wenn er abgelaufen ist.',
	'COUNTDOWN_TESTMODE' 				=> 'Aktiviere Testmodus',
	'COUNTDOWN_TESTMODE_EXPLAIN'		=> 'Wenn der Testmodus aktiviert ist, können nur Administratoren den Countdown sehen.',
	'COUNTDOWN_YEAR'	 				=> 'Aktiviere Jahre',
	'COUNTDOWN_YEAR_EXPLAIN' 			=> 'Aktiviere diese Funktion, um die Anzeige von Jahren im Countdown einzuschalten.',
	'COUNTDOWN_MONTH'	 				=> 'Aktiviere Monate',
	'COUNTDOWN_MONTH_EXPLAIN' 			=> 'Aktiviere diese Funktion, um die Anzeige von Monaten im Countdown einzuschalten.',
	'COUNTDOWN_OFFSET_ENABLE' 			=> 'Aktiviere Zeitzone',
	'COUNTDOWN_OFFSET_ENABLE_EXPLAIN' 	=> 'Aktiviere oder deaktiviere hier die Zeitzone.',
	'COUNTDOWN_OFFSET' 					=> 'Einstellungen Zeitzone',
	'COUNTDOWN_OFFSET_EXPLAIN'			=> 'Wenn du eine spezielle Zeitzone für alle Benutzer verwenden möchtest, kannst du sie hier eingeben. <br />So wie "-6" for Central Standard Time und "4" für Gulf Standard Time.',
));
