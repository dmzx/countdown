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

$lang = array_merge($lang, array(
	'COUNT_YEARS'				=> 'Years',
	'COUNT_MONTHS'				=> 'Months',
	'COUNT_DAYS'				=> 'Days',
	'COUNT_HOURS'				=> 'Hours',
	'COUNT_MINUTES'				=> 'Minutes',
	'COUNT_SECONDS'				=> 'Seconds',
	'INSTALL_COUNTDOWN'					=> 'Install PhpBB Countdown',
	'INSTALL_COUNTDOWN_CONFIRM'			=> 'Are you ready to install the PhpBB Countdown Mod?',
	'COUNTDOWN'							=> 'PhpBB Countdown',
	'COUNTDOWN_EXPLAIN'					=> 'Install PhpBB Countdown database changes with UMIL auto method.',
	'UNINSTALL_COUNTDOWN'				=> 'Uninstall PhpBB Countdown',
	'UNINSTALL_COUNTDOWN_CONFIRM'		=> 'Are you ready to uninstall the PhpBB Countdown? All settings and data saved by this mod will be removed!',
	'UPDATE_COUNTDOWN'					=> 'Update PhpBB Countdown',
	'UPDATE_COUNTDOWN_CONFIRM'			=> 'Are you ready to update the PhpBB Countdown Mod?',
		
	'ACP_COUNTDOWN_CONFIG'				=> 'PhpBB Countdown',
	'ACP_COUNTDOWN_CONFIG_EXPLAIN'		=> 'This is configuration page for the Countdown extension by <a href="http://www.dmzx-web.net"><strong>dmzx</strong></a>. Author Stoker.',
	'COUNTDOWN_VERSION'					=> 'Version',
	'COUNTDOWN_DONATE'					=> 'Please consider a <a href="http://www.phpbb3bbcodes.com/donate.php"><strong>Donation</strong></a> if you like the Extension',
	'ACP_COUNTDOWN_CONFIG_SET'			=> 'Configuration',	
	'COUNTDOWN_CONFIG_SAVED'			=> 'PhpBB Countdown settings saved',	
		
	'COUNTDOWN_ENABLE'					=> 'Enable countdown',
	'COUNTDOWN_ENABLE_EXPLAIN'			=> 'Enable or disable the PhpBB Countdown here',
	'COUNTDOWN_DIRECTION' 				=> 'Countdown direction',
	'COUNTDOWN_DIRECTION_EXPLAIN'		=> 'The Countdown mod can count both up and down. Chose Yes to count down',
	'COUNTDOWN_DATE' 					=> 'Countdown date',
	'COUNTDOWN_DATE_EXPLAIN'			=> 'Example: 2012/11/30 00:00:00',
	'COUNTDOWN_TEXT' 					=> 'Countdown text',
	'COUNTDOWN_TEXT_EXPLAIN'			=> 'Countdown text will be displayed right before the countdown. You can use HTML',
	'COUNTDOWN_COMPLETE'	 			=> 'Countdown complete text',
	'COUNTDOWN_COMPLETE_EXPLAIN' 		=> 'This text will replace the countdown when complete. You can use HTML',
	'COUNTDOWN_TESTMODE' 				=> 'Activate testmode',
	'COUNTDOWN_TESTMODE_EXPLAIN'		=> 'If testmode is activated only admins can view the countdown',
	'COUNTDOWN_YEAR'	 				=> 'Activate years',
	'COUNTDOWN_YEAR_EXPLAIN' 			=> 'Activate this function to enable years in the countdown',
	'COUNTDOWN_MONTH'	 				=> 'Activate months',
	'COUNTDOWN_MONTH_EXPLAIN' 			=> 'Activate this function to enable months in the countdown',
	'COUNTDOWN_OFFSET_ENABLE' 			=> 'Enable timezone',
	'COUNTDOWN_OFFSET_ENABLE_EXPLAIN' 	=> 'Enable or disable the Ptimezone here',
	'COUNTDOWN_OFFSET' 					=> 'Timezone settings',
	'COUNTDOWN_OFFSET_EXPLAIN'			=> 'If you want to use a specific timezone for all users you can type it here.<br />Like "-6" for Central Standard Time and "4" for Gulf Standard Time',
));
