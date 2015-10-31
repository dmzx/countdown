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
	'COUNT_DAYS'				=> 'Dias',
	'COUNT_HOURS'				=> 'Horas',
	'COUNT_MINUTES'				=> 'Minutos',
	'COUNT_SECONDS'				=> 'Segundos',
	'COUNT_DOWNCOUNT'			=> 'Baixar',
	'COUNT_UPCOUNT'				=> 'Subir',
	'INSTALL_COUNTDOWN'					=> 'Instalar contagem',
	'INSTALL_COUNTDOWN_CONFIRM'			=> 'Instalar a extensão de contagem?',
	'COUNTDOWN'							=> 'Contagem',
	'COUNTDOWN_EXPLAIN'					=> 'Instale alterações no banco de dados de contagem com o método de auto UMIL.',
	'UNINSTALL_COUNTDOWN'				=> 'Desinstalar a contagem',
	'UNINSTALL_COUNTDOWN_CONFIRM'		=> 'Desinstalar o contagem? As configurações e dados salvos pela extensão serão removidas !',
	'UPDATE_COUNTDOWN'					=> 'Atualizar a contagem',
	'UPDATE_COUNTDOWN_CONFIRM'			=> 'Confirma a atualização?',
	'ACP_COUNTDOWN_CONFIG'				=> 'Configuração',
	'ACP_COUNTDOWN_CONFIG_EXPLAIN'		=> 'Esta é a página de configuração para a contagem por <a href="http://www.dmzx-web.net"><strong>dmzx</strong></a>. Autor Stoker.',
	'COUNTDOWN_VERSION'					=> 'Versão',
	'COUNTDOWN_DONATE'					=> 'Por favor, considere uma <a href="http://www.phpbb3bbcodes.com/donate.php"><strong>Doação</strong></a> se gostar da extensão',
	'ACP_COUNTDOWN_CONFIG_SET'			=> 'Configuração',
	'COUNTDOWN_CONFIG_SAVED'			=> 'Ajustes da contagem salvos',
	'COUNTDOWN_ENABLE'					=> 'Ativar contagem',
	'COUNTDOWN_ENABLE_EXPLAIN'			=> 'Ativa ou desativa a contagem',
	'COUNTDOWN_DIRECTION' 				=> 'Direção da contagem',
	'COUNTDOWN_DIRECTION_EXPLAIN'		=> 'A contagem pode ser tanto para cima como para baixo',
	'COUNTDOWN_DATE' 					=> 'Data futura de referência',
	'COUNTDOWN_DATE_EXPLAIN'			=> 'Exemplo: 2015/12/31 00:00:00',
	'COUNTDOWN_TEXT' 					=> 'Texto durante a contagem',
	'COUNTDOWN_TEXT_EXPLAIN'			=> 'Texto que será exibido durante a contagem',
	'COUNTDOWN_COMPLETE'	 			=> 'Texto ao completar a contagem',
	'COUNTDOWN_COMPLETE_EXPLAIN' 		=> 'Este texto irá substituir a contagem ao chegar na data definida',
	'COUNTDOWN_TESTMODE' 				=> 'Ativar modo teste',
	'COUNTDOWN_TESTMODE_EXPLAIN'		=> 'Se o modo teste for ativado só administradores visualizam a contagem',
	'COUNTDOWN_YEAR'	 				=> 'Ativar Anos',
	'COUNTDOWN_YEAR_EXPLAIN' 			=> 'Ative para visualizar anos na contagem',
	'COUNTDOWN_MONTH'	 				=> 'Ativar Meses',
	'COUNTDOWN_MONTH_EXPLAIN' 			=> 'Ative para visualizar meses na contagem',
	'COUNTDOWN_OFFSET_ENABLE' 			=> 'Ativar fuso horário',
	'COUNTDOWN_OFFSET_ENABLE_EXPLAIN' 	=> 'Ative ou desative o fuso horário',
	'COUNTDOWN_OFFSET' 					=> 'Ajustes de fuso horário',
	'COUNTDOWN_OFFSET_EXPLAIN'			=> 'Se quiser usar um fuso horário específico para todos os usuários digite aqui, como "-3" para horario Brasileiro',
));
