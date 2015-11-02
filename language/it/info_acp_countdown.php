<?php
/**
*
* @package phpBB Extension - phpBB Countdown
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
* @Traduzione Italiana By alex75 - http://www.phpbb-store.it
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_COUNTDOWN'			=> 'phpBB Countdown',
	'COUNTDOWN_CONFIG'		=> 'phpBB Countdown Impostazioni',
));

