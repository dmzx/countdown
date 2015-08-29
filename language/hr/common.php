<?php
/**
*
* @package phpBB Extension - PhpBB Countdown
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
* Croatian translation by Ančica Sečan (http://ancica.sunceko.net)
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
	'COUNT_YEARS'	=>	'g',
	'COUNT_MONTHS'	=>	'm',
	'COUNT_DAYS'	=>	'd',
	'COUNT_HOURS'	=>	'h',
	'COUNT_MINUTES'	=>	'm',
	'COUNT_SECONDS'	=>	's',
	'COUNT_DOWNCOUNT'	=>'	Gore',
	'COUNT_UPCOUNT'	=>	'Dolje',
	'INSTALL_COUNTDOWN'	=>	'Instaliraj PhpBB odbrojavač',
	'INSTALL_COUNTDOWN_CONFIRM'	=>	'Jesi li siguran/na da želiš instalirati PhpBB odbrojavač ekstenziju?',
	'COUNTDOWN'	=>	'PhpBB odbrojavač',
	'COUNTDOWN_EXPLAIN'	=>	'Instaliraj PhpBB odbrojavač na način da prilikom ažuriranja baze podataka bude korištena UMIL auto metoda.',
	'UNINSTALL_COUNTDOWN'	=>	'Deinstaliraj PhpBB odbrojavač',
	'UNINSTALL_COUNTDOWN_CONFIRM'	=>	'Jesi li siguran/na da želiš deinstalirati PhpBB odbrojavač ekstenziju?<br />Sve pohranjene postavke i podatci bit će izbrisani!',
	'UPDATE_COUNTDOWN'	=>	'Ažuriraj PhpBB odbrojavač',
	'UPDATE_COUNTDOWN_CONFIRM'	=>	'Jesi li siguran/na da želiš ažurirati PhpBB odbrojavač ekstenziju?',
	'ACP_COUNTDOWN_CONFIG'	=>	'PhpBB odbrojavač',
	'ACP_COUNTDOWN_CONFIG_EXPLAIN'	=>	'Ovdje možeš podešavati <em>PhpBB odbrojavač</em> ekstenziju (od) <a href="http://www.dmzx-web.net"><strong>dmzxa</strong></a>. Autor Stoker.',
	'COUNTDOWN_VERSION'	=>	'Verzija',
	'COUNTDOWN_DONATE'	=>	'Molim(o), ukoliko si zadovoljan/a (s) ekstenzijom, uzmi u obzir <a href="http://www.phpbb3bbcodes.com/donate.php"><strong>Donacije</strong></a>.',
	'ACP_COUNTDOWN_CONFIG_SET'	=>	'Podešavanje',
	'COUNTDOWN_CONFIG_SAVED'	=>	'Postavke su pohranjene.',
	'COUNTDOWN_ENABLE'	=>	'Omogući odbrojavanje',
	'COUNTDOWN_ENABLE_EXPLAIN'	=>	'Ukoliko izabereš “Da”, odbrojavanje će biti omogućeno.',
	'COUNTDOWN_DIRECTION' 	=>	'Smjer odbrojavanja',
	'COUNTDOWN_DIRECTION_EXPLAIN'	=>	'Odbrojavanje može “ići u oba smjera” (i) “prema gore” (i) “prema dolje”.<br />Ukoliko <em>Smjer odbrojavanja</em> postaviš na <em>Gore</em>, PhpBB odbrojavač će prikazivati <em>preostalo</em> vrijeme u odnosu na vrijeme postavljeno pod <em>Datum odbrojavanja</em>.<br />Ukoliko <em>Smjer odbrojavanja</em> postaviš na <em>Dolje</em>, PhpBB odbrojavač će prikazivati <em>proteklo</em> vrijeme u odnosu na vrijeme postavljeno pod <em>Datum odbrojavanja</em>.',
	'COUNTDOWN_DATE' 	=>	'Datum odbrojavanja',
	'COUNTDOWN_DATE_EXPLAIN'	=>	'Npr: 2015/12/31 00:00:00.<br />Ukoliko <em>Datum odbrojavanja</em> postaviš na “budućnost”, npr. 2015/10/26 00:00:00, PhpBB odbrojavač će prikazivati <em>preostalo</em> vrijeme, od trenutnog, do 26. listopada 2015.<br />Ukoliko <em>Datum odbrojavanja</em> postaviš na “prošlost”, npr. 2012/12/21 00:00:00, PhpBB odbrojavač će prikazivati <em>proteklo</em> vrijeme, od 21. prosinca 2012., do trenutnog.',
	'COUNTDOWN_TEXT' 	=>	'Tekst odbrojavanja',
	'COUNTDOWN_TEXT_EXPLAIN'	=>	'Tekst koji će biti prikazan ispred odbrojavanja.<br />Možeš koristiti HTML.',
	'COUNTDOWN_COMPLETE' 	=>	'Tekst svršenog odbrojavanja',
	'COUNTDOWN_COMPLETE_EXPLAIN' 	=>	'Tekst koji će zamijeniti <em>Tekst odbrojavanja</em> po svršetku odbrojavanja.<br />Ukoliko <em>Datum odbrojavanja</em> postaviš na npr. 2015/10/26 00:00:00 te <em>Smjer odbrojavanja</em> postaviš na npr. <em>Gore</em>, 26. listopada 2015. <em>Tekst odbrojavanja</em> zamijenit će <em>Tekst svršenog odbrojavanja</em>.<br />Ukoliko <em>Datum odbrojavanja</em> postaviš na npr. 2015/10/26 00:00:00 te <em>Smjer odbrojavanja</em> postaviš na npr. <em>Dolje</em>, <em>Tekst odbrojavanja</em> uopće neće biti prikazan već će odmah biti prikazan <em>Tekst svršenog odbrojavanja</em>.<br />Ukoliko <em>Datum odbrojavanja</em> postaviš na npr. 2012/12/21 00:00:00 te <em>Smjer odbrojavanja</em> postaviš na npr. <em>Gore</em>, <em>Tekst odbrojavanja</em> uopće neće biti prikazan već će odmah biti prikazan <em>Tekst svršenog odbrojavanja</em>.<br />Ukoliko <em>Datum odbrojavanja</em> postaviš na npr. 2012/12/21 00:00:00 te <em>Smjer odbrojavanja</em> postaviš na npr. <em>Dolje</em>, <em>Tekst svršenog odbrojavanja</em> uopće neće biti prikazan već će biti prikazan [samo] <em>Tekst odbrojavanja</em>.<br />Možeš koristiti HTML.',
	'COUNTDOWN_TESTMODE' 	=>	'Aktiviraj testiranje',
	'COUNTDOWN_TESTMODE_EXPLAIN'	=>	'Ukoliko izabereš “Da”, odbrojavanje će biti vidljivo samo administratori(ca)ma.',
	'COUNTDOWN_YEAR' 	=>	'Aktiviraj godine',
	'COUNTDOWN_YEAR_EXPLAIN' 	=>	'Ukoliko izabereš “Da”, kod odbrojavanja će biti prikazane i godine.',
	'COUNTDOWN_MONTH' 	=>	'Aktiviraj mjesece',
	'COUNTDOWN_MONTH_EXPLAIN' 	=>	'Ukoliko izabereš “Da”, kod odbrojavanja će biti prikazani i mjeseci.',
	'COUNTDOWN_OFFSET_ENABLE'	=>	'Omogući vremensku zonu',
	'COUNTDOWN_OFFSET_ENABLE_EXPLAIN' 	=>	'Ukoliko izabereš “Da”, vremenska zona će biti omogućena.',
	'COUNTDOWN_OFFSET' 	=>	'Postavke vremenske zone',
	'COUNTDOWN_OFFSET_EXPLAIN'	=>	'Ukoliko svim korisnicima/ama želiš postaviti istu vremensku zonu, unesi vrijednost, npr. “-6“ za <em>Central Standard Time</em> odnosno "4" za <em>Gulf Standard Time</em> itd.',
));
