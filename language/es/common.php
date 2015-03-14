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
	'COUNT_YEARS'				=> 'Años',
	'COUNT_MONTHS'				=> 'Meses',
	'COUNT_DAYS'				=> 'Días',
	'COUNT_HOURS'				=> 'Horas',
	'COUNT_MINUTES'				=> 'Minutos',
	'COUNT_SECONDS'				=> 'Segundos',
	'COUNT_DOWNCOUNT'			=> 'Bajar',
	'COUNT_UPCOUNT'				=> 'Subir',
	'INSTALL_COUNTDOWN'					=> 'Instalar Cuenta Atrás phpBB',
	'INSTALL_COUNTDOWN_CONFIRM'			=> '¿Está preparado para instalar la extensión Cuenta Atrás phpBB?',
	'COUNTDOWN'							=> 'Cuenta Atrás phpBB',
	'COUNTDOWN_EXPLAIN'					=> 'Instalar cambios de la base de datos de Cuenta Atrás phpBB con el método auto UMIL.',
	'UNINSTALL_COUNTDOWN'				=> 'Desinstalar Cuenta Atrás phpBB',
	'UNINSTALL_COUNTDOWN_CONFIRM'		=> '¿Esta preparado para desinstalar Cuenta Atrás phpBB? ¡Todos los ajustes y datos guardados por esta extensión serán eliminados!',
	'UPDATE_COUNTDOWN'					=> 'Actualizar Cuenta Atrás phpBB',
	'UPDATE_COUNTDOWN_CONFIRM'			=> '¿Esta preparado para actualizar la extensión Cuenta Atrás phpBB?',

	'ACP_COUNTDOWN_CONFIG'				=> 'Cuenta Atrás phpBB',
	'ACP_COUNTDOWN_CONFIG_EXPLAIN'		=> 'Esta es la página de configuración de la extensión Cuenta Atrás por <a href="http://www.dmzx-web.net"><strong>dmzx</strong></a>. Autor Stoker.',
	'COUNTDOWN_VERSION'					=> 'Versión',
	'COUNTDOWN_DONATE'					=> 'Por favor, considere hacer una <a href="http://www.phpbb3bbcodes.com/donate.php"><strong>Donación</strong></a> si le gusta la Extensión',
	'ACP_COUNTDOWN_CONFIG_SET'			=> 'Configuracón',
	'COUNTDOWN_CONFIG_SAVED'			=> 'Ajustes de Cuenta Atrás guardados',

	'COUNTDOWN_ENABLE'					=> 'Habilitar Cuenta Atrás',
	'COUNTDOWN_ENABLE_EXPLAIN'			=> 'Habilitar o Deshabilitar la Cuenta Atrás phpBB aquí',
	'COUNTDOWN_DIRECTION' 				=> 'Dirección de Cuenta Atrás',
	'COUNTDOWN_DIRECTION_EXPLAIN'		=> 'La extensión de Cuenta Atrás puede contar tanto hacia arriba como hacia abajo.',
	'COUNTDOWN_DATE' 					=> 'Fecha de la Cuenta Atrás',
	'COUNTDOWN_DATE_EXPLAIN'			=> 'Ejemplo: 2015/12/31 00:00:00',
	'COUNTDOWN_TEXT' 					=> 'Texto de la cuenta atrás',
	'COUNTDOWN_TEXT_EXPLAIN'			=> 'El texto de cuenta atrás se mostrará justo antes de la cuenta atrás. Puede usar HTML',
	'COUNTDOWN_COMPLETE'	 			=> 'Texto de cuenta atrás completada',
	'COUNTDOWN_COMPLETE_EXPLAIN' 		=> 'Este texto sustituirá a la cuenta atrás cuando se complete. Puede usar HTML',
	'COUNTDOWN_TESTMODE' 				=> 'Activar modo test',
	'COUNTDOWN_TESTMODE_EXPLAIN'		=> 'Si el modo de test esta activo, solo los Administradores podrán ver la cuenta atrás',
	'COUNTDOWN_YEAR'	 				=> 'Activar años',
	'COUNTDOWN_YEAR_EXPLAIN' 			=> 'Activar esta función para habilitar años en la cuenta atrás',
	'COUNTDOWN_MONTH'	 				=> 'Activar meses',
	'COUNTDOWN_MONTH_EXPLAIN' 			=> 'Activar esta función para habilitar meses en la cuenta atrás',
	'COUNTDOWN_OFFSET_ENABLE' 			=> 'Habilitar zona horaria',
	'COUNTDOWN_OFFSET_ENABLE_EXPLAIN' 	=> 'Habilitar o Deshabilitar la zona horaria aquí',
	'COUNTDOWN_OFFSET' 					=> 'Ajustes de zona horaria',
	'COUNTDOWN_OFFSET_EXPLAIN'			=> 'Si desea utilizar una zona horaria específica para todos los usuarios que puede escribirla aquí.<br />Como "-6" para hora estándar central y "4" para hora estándar del golfo',
));
