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
	'COUNT_YEARS'				=> 'Anos',
	'COUNT_MONTHS'				=> 'Meses',
	'COUNT_DAYS'				=> 'Días',
	'COUNT_HOURS'				=> 'Horas',
	'COUNT_MINUTES'				=> 'Minutos',
	'COUNT_SECONDS'				=> 'Segundos',
	'COUNT_DOWNCOUNT'			=> 'Baixar',
	'COUNT_UPCOUNT'				=> 'Subir',
	'INSTALL_COUNTDOWN'					=> 'Instalar Countdown phpBB',
	'INSTALL_COUNTDOWN_CONFIRM'			=> 'Está preparado para instalar a extensão Countdown phpBB?',
	'COUNTDOWN'							=> 'Countdown phpBB',
	'COUNTDOWN_EXPLAIN'					=> 'Instale alterações banco de dados Countdown PhpBB com o método de auto UMIL.',
	'UNINSTALL_COUNTDOWN'				=> 'Desinstalar o Countdown phpBB',
	'UNINSTALL_COUNTDOWN_CONFIRM'		=> 'Você está pronto para desinstalar o Countdown do PhpBB? Todas as configurações e dados salvos por este ext. será removido !',
	'UPDATE_COUNTDOWN'					=> 'Actualizar Countdown phpBB',
	'UPDATE_COUNTDOWN_CONFIRM'			=> 'Você está pronto para atualizar Ext. Countdown no PhpBB?',

	'ACP_COUNTDOWN_CONFIG'				=> 'Countdown PhpBB',
	'ACP_COUNTDOWN_CONFIG_EXPLAIN'		=> 'Esta é a página de configuração para a extensão do Countdown por <a href="http://www.dmzx-web.net"><strong>dmzx</strong></a>. Autor Stoker.',
	'COUNTDOWN_VERSION'					=> 'Versión',
	'COUNTDOWN_DONATE'					=> 'Por favor, considere um <a href="http://www.phpbb3bbcodes.com/donate.php"><strong>Doação</strong></a> se gosta da extensão',
	'ACP_COUNTDOWN_CONFIG_SET'			=> 'Configuração',
	'COUNTDOWN_CONFIG_SAVED'			=> 'Ajustes do Countdown guardados',

	'COUNTDOWN_ENABLE'					=> 'Ativar Countdown',
	'COUNTDOWN_ENABLE_EXPLAIN'			=> 'Ativar o Desativar o Countdown phpBB aqui',
	'COUNTDOWN_DIRECTION' 				=> 'Direção de Countdown',
	'COUNTDOWN_DIRECTION_EXPLAIN'		=> 'A ext. Countdown pode contar tanto para cima e para baixo.',
	'COUNTDOWN_DATE' 					=> 'Data Countdown',
	'COUNTDOWN_DATE_EXPLAIN'			=> 'Exemplo: 2015/12/31 00:00:00',
	'COUNTDOWN_TEXT' 					=> 'Texto Countdown',
	'COUNTDOWN_TEXT_EXPLAIN'			=> 'Texto Countdown será exibido antes da contagem regressiva',
	'COUNTDOWN_COMPLETE'	 			=> 'Texto Countdown completada',
	'COUNTDOWN_COMPLETE_EXPLAIN' 		=> 'Este texto irá substituir a contagem regressiva quando completa',
	'COUNTDOWN_TESTMODE' 				=> 'Ativar modo teste',
	'COUNTDOWN_TESTMODE_EXPLAIN'		=> 'Se testmode é ativado só os administradores podem visualizar o Countdown',
	'COUNTDOWN_YEAR'	 				=> 'Ativar Anos',
	'COUNTDOWN_YEAR_EXPLAIN' 			=> 'Ative essa função para permitir anos no Countdown',
	'COUNTDOWN_MONTH'	 				=> 'Ativar meses',
	'COUNTDOWN_MONTH_EXPLAIN' 			=> 'Ative essa função para permitir meses no Countdown',
	'COUNTDOWN_OFFSET_ENABLE' 			=> 'Ativar horaria zona ',
	'COUNTDOWN_OFFSET_ENABLE_EXPLAIN' 	=> 'Ativar o Desativar horaria zona aqui',
	'COUNTDOWN_OFFSET' 					=> 'Ajustes de horaria zona ',
	'COUNTDOWN_OFFSET_EXPLAIN'			=> 'Se você quiser usar um fuso horário específico para todos os usuários que você pode digitá-lo aqui.<br />Like "-6" para horario Central Standard  ou "4" para horario Gulf Standard '',
));
