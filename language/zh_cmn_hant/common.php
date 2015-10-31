<?php
/**
*
* @package phpBB Extension - phpBB Countdown
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
* @翻譯者 竹貓星球 http://phpbb-tw.net/
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
	'COUNT_YEARS'				=> '年',
	'COUNT_MONTHS'				=> '月',
	'COUNT_DAYS'				=> '日',
	'COUNT_HOURS'				=> '時',
	'COUNT_MINUTES'				=> '分',
	'COUNT_SECONDS'				=> '秒',
	'COUNT_DOWNCOUNT'			=> '下',
	'COUNT_UPCOUNT'				=> '上',
	'INSTALL_COUNTDOWN'					=> '安裝倒數計時',
	'INSTALL_COUNTDOWN_CONFIRM'			=> '您準備好要安裝倒數計時擴充功能嗎？',
	'COUNTDOWN'							=> '倒數計時',
	'COUNTDOWN_EXPLAIN'					=> '安裝倒數計時以 UMIL 自動模式改變資料庫。',
	'UNINSTALL_COUNTDOWN'				=> '解除安裝倒數計時',
	'UNINSTALL_COUNTDOWN_CONFIRM'		=> '您準備好要解除安裝倒數計時擴充功能嗎？這個擴充功能已經儲存的設定和資料將被全部移除！',
	'UPDATE_COUNTDOWN'					=> '更新倒數計時',
	'UPDATE_COUNTDOWN_CONFIRM'			=> '您準備好要更新倒數計時擴充功能嗎？',

	'ACP_COUNTDOWN_CONFIG'				=> '倒數計時',
	'ACP_COUNTDOWN_CONFIG_EXPLAIN'		=> '這是倒數計時擴充功能的設定頁面，由 <a href="http://www.dmzx-web.net"><strong>dmzx</strong></a> 作者 Stoker 製作。',
	'COUNTDOWN_VERSION'					=> '版本',
	'COUNTDOWN_DONATE'					=> '如果您喜歡這個擴充功能，請考慮 <a href="http://www.phpbb3bbcodes.com/donate.php"><strong>捐款</strong></a>。',
	'ACP_COUNTDOWN_CONFIG_SET'			=> '基本組態',
	'COUNTDOWN_CONFIG_SAVED'			=> '倒數計時之設定已儲存',

	'COUNTDOWN_ENABLE'					=> '啟用倒數計時',
	'COUNTDOWN_ENABLE_EXPLAIN'			=> '在此，可以啟用或停用倒數計時。',
	'COUNTDOWN_DIRECTION' 				=> '倒數計時之方向',
	'COUNTDOWN_DIRECTION_EXPLAIN'		=> '倒數計時擴充功能可以向上和向下兩種計數。',
	'COUNTDOWN_DATE' 					=> '倒數計時之日期',
	'COUNTDOWN_DATE_EXPLAIN'			=> '例如：2015/12/31 00:00:00',
	'COUNTDOWN_TEXT' 					=> '倒數計時之文字',
	'COUNTDOWN_TEXT_EXPLAIN'			=> '文字將顯示在倒數計時的右前方。您可以使用 HTML 格式。',
	'COUNTDOWN_COMPLETE'	 			=> '倒數計時之完成文字',
	'COUNTDOWN_COMPLETE_EXPLAIN' 		=> '本文將於完成倒數時取代倒數計時。您可以使用 HTML 格式。',
	'COUNTDOWN_TESTMODE' 				=> '啟用測試模式',
	'COUNTDOWN_TESTMODE_EXPLAIN'		=> '如果啟用測試模式，那麼只有系統管理員可以檢視倒數計時。',
	'COUNTDOWN_YEAR'	 				=> '啟用「年」',
	'COUNTDOWN_YEAR_EXPLAIN' 			=> '啟用它，可以讓「年」顯示在倒數計時。',
	'COUNTDOWN_MONTH'	 				=> '啟用「月」',
	'COUNTDOWN_MONTH_EXPLAIN' 			=> '啟用它，可以讓「月」顯示在倒數計時。',
	'COUNTDOWN_OFFSET_ENABLE' 			=> '啟用時區',
	'COUNTDOWN_OFFSET_ENABLE_EXPLAIN' 	=> '在此，可以啟用或停用時區。',
	'COUNTDOWN_OFFSET' 					=> '時區設定',
	'COUNTDOWN_OFFSET_EXPLAIN'			=> '如果您想要讓所有使用者都使用一個特別的時區，那麼您可以在此編輯。<br />例如「-6」表示美國中部標準時間，而「4」表示海灣標準時間。',
));
