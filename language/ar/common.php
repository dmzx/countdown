<?php
/**
*
* @package phpBB Extension - PhpBB Countdown
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
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
	'COUNT_YEARS'				=> 'سنوات',
	'COUNT_MONTHS'				=> 'شهور',
	'COUNT_DAYS'				=> 'أيام',
	'COUNT_HOURS'				=> 'ساعات',
	'COUNT_MINUTES'				=> 'دقائق',
	'COUNT_SECONDS'				=> 'ثواني',
	'COUNT_DOWNCOUNT'			=> 'أسفل',
	'COUNT_UPCOUNT'				=> 'أعلى',
	'INSTALL_COUNTDOWN'					=> 'تنصيب التوقيت التنازلي',
	'INSTALL_COUNTDOWN_CONFIRM'			=> 'هل أنت مستعد لتنصيب الإضافة : التوقيت التنازلي ؟',
	'COUNTDOWN'							=> 'التوقيت التنازلي',
	'COUNTDOWN_EXPLAIN'					=> 'تنصيب قاعدة البيانات للتوقيت التنازلي تتغير مع الطريقة التلقائية UMIL.',
	'UNINSTALL_COUNTDOWN'				=> 'إزالة التوقيت التنازلي',
	'UNINSTALL_COUNTDOWN_CONFIRM'		=> 'هل أنت مستعد لإزالة الإضافة : التوقيت التنازلي ؟ سيتم حذف جميع الإعدادات والبيانات الخاصة بهذه الإضافة !',
	'UPDATE_COUNTDOWN'					=> 'تحديث التوقيت التنازلي',
	'UPDATE_COUNTDOWN_CONFIRM'			=> 'هل أنت مستعد لتحديث الإضافة : التوقيت التنازلي ؟',

	'ACP_COUNTDOWN_CONFIG'				=> 'التوقيت التنازلي',
	'ACP_COUNTDOWN_CONFIG_EXPLAIN'		=> 'من هنا تستطيع ضبط الإعدادات	للإضافة : التوقيت التنازلي ( المبرمج : أوثر ستوكر. الموقع : <a href="http://www.dmzx-web.net"><strong>dmzx</strong></a> ).',
	'COUNTDOWN_VERSION'					=> 'الإصدار ',
	'COUNTDOWN_DONATE'					=> 'لو أعجبتك هذه الإضافة , نرجوا <a href="http://www.phpbb3bbcodes.com/donate.php"><strong>التبرع</strong></a> لإستمرار الدعم وتطوير هذه الإضافة.',
	'ACP_COUNTDOWN_CONFIG_SET'			=> 'الضبط',
	'COUNTDOWN_CONFIG_SAVED'			=> 'تم حفظ الإعدادات بنجاح',

	'COUNTDOWN_ENABLE'					=> 'تفعيل ',
	'COUNTDOWN_ENABLE_EXPLAIN'			=> 'اختيارك "نعم" يعني تفعيل التوقيت التنازلي',
	'COUNTDOWN_DIRECTION' 				=> 'نوع التوقيت ',
	'COUNTDOWN_DIRECTION_EXPLAIN'		=> 'تستطيع ضبط التوقيت تصاعدي أو تنازلي ( مثال : التوقيت لمناسبة قادمة أو ماضية ).',
	'COUNTDOWN_DATE' 					=> 'التاريخ ',
	'COUNTDOWN_DATE_EXPLAIN'			=> 'مثال : 2015/12/31 00:00:00',
	'COUNTDOWN_TEXT' 					=> 'النص قبل ',
	'COUNTDOWN_TEXT_EXPLAIN'			=> 'سيتم عرض هذا النص بالجهة اليمين للتوقيت الذي حددته. تستطيع استخدام لغة الـ HTML',
	'COUNTDOWN_COMPLETE'	 			=> 'النص بعد ',
	'COUNTDOWN_COMPLETE_EXPLAIN' 		=> 'سيتم عرض هذا النص بعد الوصول إلى التوقيت المُحدد. تستطيع استخدام لغة الـ HTML',
	'COUNTDOWN_TESTMODE' 				=> 'الوضع التجريبي ',
	'COUNTDOWN_TESTMODE_EXPLAIN'		=> 'اختيارك "نعم" يعني ظهور التوقيت للمدراء فقط.',
	'COUNTDOWN_YEAR'	 				=> 'تفعيل السنوات ',
	'COUNTDOWN_YEAR_EXPLAIN' 			=> 'اختيارك "نعم" يعني عرض السنوات في التوقيت',
	'COUNTDOWN_MONTH'	 				=> 'تفعيل الشهور ',
	'COUNTDOWN_MONTH_EXPLAIN' 			=> 'اختيارك "نعم" يعني عرض الشهور في التوقيت',
	'COUNTDOWN_OFFSET_ENABLE' 			=> 'النطاق الزمني ',
	'COUNTDOWN_OFFSET_ENABLE_EXPLAIN' 	=> 'تفعيل أو تعطيل النطاق الزمني',
	'COUNTDOWN_OFFSET' 					=> 'إعدادات النطاق الزمني ',
	'COUNTDOWN_OFFSET_EXPLAIN'			=> 'لو تريد استخدام منطقة زمنية مُحددة لجميع الأعضاء , تستطيع كتابتها هنا.<br />مثل "-6" للمنطقة الزمنية الوسطى و "4" للمنطقة الزمنية الخليجي',
));
