<?php
/**
*
* @package phpBB Extension - phpBB Countdown
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
* @Traduzione Italiana By alex75 - http://www.phpbb-store.it
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
	'COUNT_YEARS'				=> 'Anni',
	'COUNT_MONTHS'				=> 'Mesi',
	'COUNT_DAYS'				=> 'Giorni',
	'COUNT_HOURS'				=> 'Ore',
	'COUNT_MINUTES'				=> 'Minuti',
	'COUNT_SECONDS'				=> 'Secondi',
	'COUNT_DOWNCOUNT'			=> 'Giù',
	'COUNT_UPCOUNT'				=> 'Su',
	'INSTALL_COUNTDOWN'					=> 'Installa phpBB Countdown',
	'INSTALL_COUNTDOWN_CONFIRM'			=> 'Sei pronto a installare l’estensione phpBB Countdown ?',
	'COUNTDOWN'							=> 'phpBB Countdown',
	'COUNTDOWN_EXPLAIN'					=> 'Installa il database phpBB Countdown tramite UMIL.',
	'UNINSTALL_COUNTDOWN'				=> 'Disinstalla phpBB Countdown',
	'UNINSTALL_COUNTDOWN_CONFIRM'		=> 'Pronto per Disinstallare phpBB Countdown? Tutte le impostazioni e i dati salvati andranno perduti!',
	'UPDATE_COUNTDOWN'					=> 'Aggiornamento phpBB Countdown',
	'UPDATE_COUNTDOWN_CONFIRM'			=> 'Sei pronto per aggiornare l’estensione phpBB Countdown ?',

	'ACP_COUNTDOWN_CONFIG'				=> 'phpBB Countdown',
	'ACP_COUNTDOWN_CONFIG_EXPLAIN'		=> 'Questa è la pagina di configurazione per l’estensione Countdown realizzata da <a href="http://www.dmzx-web.net"><strong>dmzx</strong></a>. Autore Stoker.',
	'COUNTDOWN_VERSION'					=> 'Versione',
	'COUNTDOWN_DONATE'					=> 'Considera una <a href="http://www.phpbb3bbcodes.com/donate.php"><strong>Donazione</strong></a> se ti è piaciuta questa estensione',
	'ACP_COUNTDOWN_CONFIG_SET'			=> 'Configurazione',
	'COUNTDOWN_CONFIG_SAVED'			=> 'Impostazioni phpBB Countdown salvate',

	'COUNTDOWN_ENABLE'					=> 'Attiva countdown',
	'COUNTDOWN_ENABLE_EXPLAIN'			=> 'Abilita Disabilita phpBB Countdown',
	'COUNTDOWN_DIRECTION' 				=> 'Direzione Countdown',
	'COUNTDOWN_DIRECTION_EXPLAIN'		=> 'Il Countdown può funzionare in modo crescente o decrescente.',
	'COUNTDOWN_DATE' 					=> 'Data Countdown',
	'COUNTDOWN_DATE_EXPLAIN'			=> 'Esempio: 2015/12/31 00:00:00',
	'COUNTDOWN_TEXT' 					=> 'Testo Countdown',
	'COUNTDOWN_TEXT_EXPLAIN'			=> 'Testo che apparirà durante il Countdown',
	'COUNTDOWN_COMPLETE'	 			=> 'Testo Countdown completato',
	'COUNTDOWN_COMPLETE_EXPLAIN' 		=> 'Testo che apparirà al termine del countdown',
	'COUNTDOWN_TESTMODE' 				=> 'Attiva modalità test',
	'COUNTDOWN_TESTMODE_EXPLAIN'		=> 'Se la modalità test è abilitata soltanto gli admin potranno vedere il countdown',
	'COUNTDOWN_YEAR'	 				=> 'Visualizzare Anni',
	'COUNTDOWN_YEAR_EXPLAIN' 			=> 'Attivando questa funzione saranno visualizzati gli anni nel countdown',
	'COUNTDOWN_MONTH'	 				=> 'Visualizzare Mesi',
	'COUNTDOWN_MONTH_EXPLAIN' 			=> 'Attivando questa funzione saranno visualizzati i mesi nel countdown',
	'COUNTDOWN_OFFSET_ENABLE' 			=> 'Attiva Fusorario',
	'COUNTDOWN_OFFSET_ENABLE_EXPLAIN' 	=> 'Abilita Disabilita il Fusorario',
	'COUNTDOWN_OFFSET' 					=> 'Impostazioni Fusorario',
	'COUNTDOWN_OFFSET_EXPLAIN'			=> 'Se vuoi usare un fusorario specifico per tutti gli utenti puoi inserirlo qui.<br />Usando ad esempio &quot;-6&quot; per Central Standard Time o &quot;1&quot; per l’europa',
));
