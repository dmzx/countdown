<?php
/**
*
* @package phpBB Extension - Countdown
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
namespace dmzx\countdown\acp;
class acp_countdown_module
{
/** @var \phpbb\config\config */
protected $config;
/** @var \phpbb\config\db_text */
protected $config_text;
/** @var \phpbb\db\driver\driver_interface */
protected $db;
/** @var \phpbb\log\log */
protected $log;
/** @var \phpbb\request\request */
protected $request;
/** @var \phpbb\template\template */
protected $template;
/** @var \phpbb\user */
protected $user;
/** @var ContainerInterface */
protected $phpbb_container;
/** @var string */
protected $phpbb_root_path;
/** @var string */
protected $php_ext;
/** @var string */
public $u_action;
public function main($id, $mode)
{
global $config, $db, $request, $template, $user, $phpbb_root_path, $phpEx, $table_prefix;
$this->config = $config;
//$this->config_text = $phpbb_container->get('config_text');
$this->db = $db;
$this->request = $request;
$this->template = $template;
$this->user = $user;
$this->phpbb_root_path = $phpbb_root_path;
$this->php_ext = $phpEx;
// Add the wpm ACP lang file
$user->add_lang_ext('dmzx/countdown', 'info_acp_countdown');
// Load a template from adm/style for our ACP page
$this->tpl_name = 'acp_countdown_config';
// Set the page title for our ACP page
$this->page_title = 'ACP_COUNTDOWN';
// Define the name of the form for use as a form key
$form_name = 'acp_countdown_module';
add_form_key($form_name);


		
		$submit = (isset($_POST['submit'])) ? true : false;
		if ($submit)
		{
			if (!check_form_key('acp_countdown_config'))
			{
				trigger_error('FORM_INVALID');
			}
			set_config('countdown_enable', request_var('countdown_enable', 0));
			set_config('countdown_testmode', request_var('countdown_testmode', 0));
			set_config('countdown_direction', request_var('countdown_direction', 0));
			set_config('countdown_date', request_var('countdown_date', ''));
			set_config('countdown_offset_enable', request_var('countdown_offset_enable', 0));
			set_config('countdown_year', request_var('countdown_year', 0));
			set_config('countdown_month', request_var('countdown_month', 0));
			set_config('countdown_text', request_var('countdown_text', ''));
			set_config('countdown_complete', request_var('countdown_complete', ''));

			trigger_error($user->lang['COUNTDOWN_CONFIG_SAVED'] . adm_back_link($this->u_action));
		}
		$template->assign_vars(array(
			'COUNTDOWN_VERSION'			=> (isset($config['countdown_version'])) ? $config['countdown_version'] : '',
			'COUNTDOWN_ENABLE'			=> (!empty($config['countdown_enable'])) ? true : false,
			'COUNTDOWN_TESTMODE'		=> (!empty($config['countdown_testmode'])) ? true : false,
			'COUNTDOWN_DIRECTION'		=> (!empty($config['countdown_direction'])) ? true : false,
			'COUNTDOWN_DATE'			=> (isset($config['countdown_date'])) ? $config['countdown_date'] : '',
			'COUNTDOWN_OFFSET_ENABLE'	=> (!empty($config['countdown_offset_enable'])) ? true : false,
			'COUNTDOWN_OFFSET'			=> (isset($config['countdown_offset'])) ? $config['countdown_offset'] : '',
			'COUNTDOWN_YEAR'			=> (!empty($config['countdown_year'])) ? true : false,
			'COUNTDOWN_MONTH'			=> (!empty($config['countdown_month'])) ? true : false,
			'COUNTDOWN_TEXT'			=> (isset($config['countdown_text'])) ? $config['countdown_text'] : '',
			'COUNTDOWN_COMPLETE'		=> (isset($config['countdown_complete'])) ? $config['countdown_complete'] : '',
			'U_ACTION'					=> $this->u_action,
		));
	}
}
