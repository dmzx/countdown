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
	'COUNTDOWN_TITLE'					=> 'Contagem Regressiva phpBB',
	'COUNT_DOWNCOUNT'					=> 'Para baixo',
	'COUNT_UPCOUNT'						=> 'Para cima',
	'COUNTDOWN_CONFIG_SET'				=> 'Configuração',
	'COUNTDOWN_CONFIG_SAVED'			=> 'Configuração da contagem regressiva phpBB salva',
	'COUNTDOWN_ENABLE'					=> 'Habilita a contagem regressiva',
	'COUNTDOWN_ENABLE_EXPLAIN'			=> 'Habilite ou desabilite a contagem regressiva aqui.',
	'COUNTDOWN_DIRECTION' 				=> 'Direção da contagem',
	'COUNTDOWN_DIRECTION_EXPLAIN'		=> 'A contagem pode ser para cima ou para baixo.',
	'COUNTDOWN_DATE' 					=> 'Data da contagem regressiva',
	'COUNTDOWN_DATE_EXPLAIN'			=> 'Exemplo: 2015/12/31 00:00:00',
	'COUNTDOWN_TEXT' 					=> 'Texto da contagem regressiva',
	'COUNTDOWN_TEXT_EXPLAIN'			=> 'Este texto será mostrado logo antes da contagem regressiva.',
	'COUNTDOWN_COMPLETE'	 			=> 'Texto da contagem regressiva finalizada',
	'COUNTDOWN_COMPLETE_EXPLAIN' 		=> 'Este texto será mostrado quando a contagem terminar.',
	'COUNTDOWN_TESTMODE' 				=> 'Ativa modo de teste',
	'COUNTDOWN_TESTMODE_EXPLAIN'		=> 'Se ativado, somente administradores verão a contagem.',
	'COUNTDOWN_YEAR'	 				=> 'Ativa os anos',
	'COUNTDOWN_YEAR_EXPLAIN' 			=> 'Exibe os anos na contagem.',
	'COUNTDOWN_MONTH'	 				=> 'Ativa os meses',
	'COUNTDOWN_MONTH_EXPLAIN' 			=> 'Exibe os meses na contagem.',
	'COUNTDOWN_OFFSET_ENABLE' 			=> 'Habilita timezone',
	'COUNTDOWN_OFFSET_ENABLE_EXPLAIN' 	=> 'Habilite ou desabilite o timezone aqui.',
	'COUNTDOWN_OFFSET' 					=> 'Configuração do timezone',
	'COUNTDOWN_OFFSET_EXPLAIN'			=> 'Se desejar usar um timezone específico para todos os usuários, digite-o aqui.<br />Por exempo "-6" para Central Standard Time e "4" para Gulf Standard Time.',
));
