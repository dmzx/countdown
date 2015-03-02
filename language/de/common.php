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
   'COUNT_YEARS'            => 'Jahre',
   'COUNT_MONTHS'         => 'Monate',
   'COUNT_DAYS'            => 'Tage',
   'COUNT_HOURS'            => 'Std',
   'COUNT_MINUTES'         => 'Min',
   'COUNT_SECONDS'         => 'Sek',
   'COUNT_DOWNCOUNT'			=> 'Runter',
   'COUNT_UPCOUNT'				=> 'Hoch',
   'INSTALL_COUNTDOWN'               => 'Installiere PhpBB Countdown',
   'INSTALL_COUNTDOWN_CONFIRM'         => 'Bist du bereit, die PhpBB Countdown Extension zu installieren?',
   'COUNTDOWN'                     => 'PhpBB Countdown',
   'COUNTDOWN_EXPLAIN'               => 'Installiere PhpBB Countdown Datenbankänderungen mit UMIL Auto Verfahren.',
   'UNINSTALL_COUNTDOWN'                    => 'De-Installiere PhpBB Countdown',
   'UNINSTALL_COUNTDOWN_CONFIRM'              => 'Bist du bereit, die PhpBB Ext. Countdown zu deinstallieren? Alle gespeicherten Einstellungen und Daten von dieser Ext. werden entfernt!',
   'UPDATE_COUNTDOWN'               => 'PhpBB Countdown aktualisieren',
   'UPDATE_COUNTDOWN_CONFIRM'         => 'Bist du bereit, die PhpBB Countdown Ext. zu aktualisieren?',
      
   'ACP_COUNTDOWN_CONFIG'            => 'PhpBB Countdown',
   'ACP_COUNTDOWN_CONFIG_EXPLAIN'              => 'Dies ist die Konfigurationsseite für Countdown Extension von <a href="http://www.dmzx-web.net"><strong>dmzx</strong></a>. Author Stoker.',
   'COUNTDOWN_VERSION'               => 'Version',
   'COUNTDOWN_DONATE'               => 'Bitte beachte: <a href="http://www.phpbb3bbcodes.com/donate.php"><strong>Spende</strong></a> wenn dir die Extension gefällt',
   'ACP_COUNTDOWN_CONFIG_SET'         => 'Konfiguration',   
   'COUNTDOWN_CONFIG_SAVED'                 => 'PhpBB Countdown Einstellung gespeichert',   
      
   'COUNTDOWN_ENABLE'                      => 'Aktiviere Countdown',
   'COUNTDOWN_ENABLE_EXPLAIN'         => 'Aktiviere oder Deaktiviere hier den PhpBB Countdown',
   'COUNTDOWN_DIRECTION'                  => 'Countdown Anweisung',
   'COUNTDOWN_DIRECTION_EXPLAIN'      => 'Der Countdown kann sowohl nach oben als auch nach unten zählen. Ja wählen, um nach unten zu zählen',
   'COUNTDOWN_DATE'                        => 'Countdown Datum',
   'COUNTDOWN_DATE_EXPLAIN'         => 'Beispiel: 2012/11/30 00:00:00',
   'COUNTDOWN_TEXT'                => 'Countdown Text',
   'COUNTDOWN_TEXT_EXPLAIN'         => 'Der Countdown Text wird direkt vor dem Countdown angezeigt. Du kannst HTML nutzen',
   'COUNTDOWN_COMPLETE'             => 'Vollständiger Countdown Text',
   'COUNTDOWN_COMPLETE_EXPLAIN'       => 'Dieser Text wird den Countdown ersetzen wenn er abgeschlossen ist. Du kannst HTML nutzen',
   'COUNTDOWN_TESTMODE'             => 'Aktiviere Testmode',
   'COUNTDOWN_TESTMODE_EXPLAIN'      => 'Wenn der Testmodus aktiviert ist können nur Administratoren den Countdown sehen',
   'COUNTDOWN_YEAR'                => 'Aktiviere Jahre',
   'COUNTDOWN_YEAR_EXPLAIN'          => 'Aktiviere diese Funktion um Jahre im Countdown anzuzeigen',
   'COUNTDOWN_MONTH'             => 'Aktiviere Monate',
   'COUNTDOWN_MONTH_EXPLAIN'       => 'Aktiviere diese Funktion um Monate im Countdown anzuzeigen',
   'COUNTDOWN_OFFSET_ENABLE'          => 'Aktiviere die Zeitzone',
   'COUNTDOWN_OFFSET_ENABLE_EXPLAIN'    => 'Aktivieren oder Deaktiveren der Zeitzone',
   'COUNTDOWN_OFFSET'                => 'Zeitzone Einstellung',
   'COUNTDOWN_OFFSET_EXPLAIN'         => 'Wenn du eine bestimmte Zeitzone für alle Benutzer verwenden möchtest, kannst du diese hier eingeben.<br />Eine "-6" für Central Standard Time und "4" für Golf Standard Time',
));
