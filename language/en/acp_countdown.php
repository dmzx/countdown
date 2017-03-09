<?php
/**
*
* @package phpBB Extension - phpBB Countdown
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'COUNTDOWN_TITLE'					=> 'phpBB Countdown',
	'COUNT_DOWNCOUNT'					=> 'Down',
	'COUNT_UPCOUNT'						=> 'Up',
	'COUNTDOWN_CONFIG_SET'				=> 'Configuration',
	'COUNTDOWN_CONFIG_SAVED'			=> 'phpBB Countdown settings saved',
	'COUNTDOWN_ENABLE'					=> 'Enable countdown',
	'COUNTDOWN_ENABLE_EXPLAIN'			=> 'Enable or disable the phpBB Countdown here.',
	'COUNTDOWN_DIRECTION' 				=> 'Countdown direction',
	'COUNTDOWN_DIRECTION_EXPLAIN'		=> 'The Countdown ext. can count both up and down.',
	'COUNTDOWN_DATE' 					=> 'Countdown date',
	'COUNTDOWN_DATE_EXPLAIN'			=> 'Example: 2015/12/31 00:00:00',
	'COUNTDOWN_TEXT' 					=> 'Countdown text',
	'COUNTDOWN_TEXT_EXPLAIN'			=> 'Countdown text will be displayed right before the countdown.',
	'COUNTDOWN_COMPLETE'	 			=> 'Countdown complete text',
	'COUNTDOWN_COMPLETE_EXPLAIN' 		=> 'This text will replace the countdown when complete.',
	'COUNTDOWN_TESTMODE' 				=> 'Activate testmode',
	'COUNTDOWN_TESTMODE_EXPLAIN'		=> 'If testmode is activated only admins can view the countdown.',
	'COUNTDOWN_YEAR'	 				=> 'Activate years',
	'COUNTDOWN_YEAR_EXPLAIN' 			=> 'Activate this function to enable years in the countdown.',
	'COUNTDOWN_MONTH'	 				=> 'Activate months',
	'COUNTDOWN_MONTH_EXPLAIN' 			=> 'Activate this function to enable months in the countdown.',
	'COUNTDOWN_OFFSET_ENABLE' 			=> 'Enable timezone',
	'COUNTDOWN_OFFSET_ENABLE_EXPLAIN' 	=> 'Enable or disable the Ptimezone here.',
	'COUNTDOWN_OFFSET' 					=> 'Timezone settings',
	'COUNTDOWN_OFFSET_EXPLAIN'			=> 'If you want to use a specific timezone for all users you can type it here.<br />Like "-6" for Central Standard Time and "4" for Gulf Standard Time.',
));
