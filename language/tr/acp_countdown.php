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
	'COUNTDOWN_TITLE'					=> 'phpBB Geri Sayım',
	'COUNT_DOWNCOUNT'					=> 'Aşağı',
	'COUNT_UPCOUNT'						=> 'Yukarı',
	'COUNTDOWN_CONFIG_SET'				=> 'Yapılandırma',
	'COUNTDOWN_CONFIG_SAVED'			=> 'phpBB Geri sayım ayarları kaydedildi',
	'COUNTDOWN_ENABLE'					=> 'Geri sayımı etkinleştir',
	'COUNTDOWN_ENABLE_EXPLAIN'			=> 'phpBB Geri sayımı eklentisini buradan etkinleştirebilir veya devre dışı bırakabilirsiniz.',
	'COUNTDOWN_DIRECTION' 				=> 'Geri sayım yönü',
	'COUNTDOWN_DIRECTION_EXPLAIN'		=> 'Geri sayım eklentisiyle yukarı ve aşağı doğru',
	'COUNTDOWN_DATE' 					=> 'Geri sayım tarihi',
	'COUNTDOWN_DATE_EXPLAIN'			=> 'Örneğin: 2015/12/31 00:00:00',
	'COUNTDOWN_TEXT' 					=> 'Geri sayım metni',
	'COUNTDOWN_TEXT_EXPLAIN'			=> 'Bu metin geri sayımdan hemen önce gösterilecektir.',
	'COUNTDOWN_COMPLETE'	 			=> 'Geri sayımın bitince gösterilecek metin',
	'COUNTDOWN_COMPLETE_EXPLAIN' 		=> 'Bu metin, geri sayım tamamlandığında gösterilecektir.',
	'COUNTDOWN_TESTMODE' 				=> 'Test modunu etkinleştir',
	'COUNTDOWN_TESTMODE_EXPLAIN'		=> 'Test modu etkinleştirilirse, sadece yöneticiler geri sayımı görüntüleyebilir.',
	'COUNTDOWN_YEAR'	 				=> 'Yılı etkinleştir',
	'COUNTDOWN_YEAR_EXPLAIN' 			=> 'Geri sayımda yılları etkinleştirmek için bu işlevi etkinleştirin.',
	'COUNTDOWN_MONTH'	 				=> 'Ayları etkinleştir',
	'COUNTDOWN_MONTH_EXPLAIN' 			=> 'Geri sayımda ayları etkinleştirmek için bu işlevi etkinleştirin.',
	'COUNTDOWN_OFFSET_ENABLE' 			=> 'Saat dilimini etkinleştir',
	'COUNTDOWN_OFFSET_ENABLE_EXPLAIN' 	=> 'Buradan saat dilimin etkinleştirebilir veya devre dışı bırakabilirsiniz.',
	'COUNTDOWN_OFFSET' 					=> 'Zaman dilimi ayarları',
	'COUNTDOWN_OFFSET_EXPLAIN'			=> 'Tüm kullanıcılar için belirli bir saat dilimi kullanmak isterseniz buraya yazabilirsiniz.<br />Merkez Standart Saati İçin "-6"	veya Körfez Standart Saati İçin "4" gibi.',
));
