<?php
/**
*
* @package phpBB Extension - phpBB Countdown
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\countdown\controller;

use phpbb\config\config;
use phpbb\template\template;
use phpbb\log\log_interface;
use phpbb\user;
use phpbb\request\request_interface;

class admin_controller
{
	/** @var config */
	protected $config;

	/** @var template */
	protected $template;

	/** @var log_interface */
	protected $log;

	/** @var user */
	protected $user;

	/** @var request_interface */
	protected $request;

	/** @var string Custom form action */
	protected $u_action;

	/**
	 * Constructor
	 *
	 * @param config				$config
	 * @param template				$template
	 * @param log_interface			$log
	 * @param user					$user
	 * @param request_interface		$request
	 */
	public function __construct(
		config $config,
		template $template,
		log_interface $log,
		user $user,
		request_interface $request
	)
	{
		$this->config 		= $config;
		$this->template 	= $template;
		$this->log 			= $log;
		$this->user 		= $user;
		$this->request 		= $request;
	}

	/**
	* Display the options a user can configure for this extension
	*
	* @return null
	* @access public
	*/
	public function display_options()
	{
		$this->user->add_lang_ext('dmzx/countdown', 'acp_countdown');

		add_form_key('acp_countdown_config');

		// Is the form being submitted to us?
		if ($this->request->is_set_post('submit'))
		{
			if (!check_form_key('acp_countdown_config'))
			{
				trigger_error('FORM_INVALID');
			}

			// Set the options the user configured
			$this->set_options();

			// Add option settings change action to the admin log
			$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'LOG_COUNTDOWN_SETTINGS');

			trigger_error($this->user->lang['COUNTDOWN_CONFIG_SAVED'] . adm_back_link($this->u_action));
		}

		$this->template->assign_vars(array(
			'COUNTDOWN_VERSION'			=> $this->config['countdown_version'],
			'COUNTDOWN_ENABLE'			=> $this->config['countdown_enable'],
			'COUNTDOWN_TESTMODE'		=> $this->config['countdown_testmode'],
			'COUNTDOWN_DIRECTION'		=> $this->config['countdown_direction'],
			'COUNTDOWN_DATE'			=> $this->config['countdown_date'],
			'COUNTDOWN_OFFSET_ENABLE'	=> $this->config['countdown_offset_enable'],
			'COUNTDOWN_OFFSET'			=> $this->config['countdown_offset'],
			'COUNTDOWN_YEAR'			=> $this->config['countdown_year'],
			'COUNTDOWN_MONTH'			=> $this->config['countdown_month'],
			'COUNTDOWN_TEXT'			=> $this->config['countdown_text'],
			'COUNTDOWN_COMPLETE'		=> $this->config['countdown_complete'],
			'U_ACTION'					=> $this->u_action,
		));
	}

	/**
	* Set the options a user can configure
	*
	* @return null
	* @access protected
	*/
	protected function set_options()
	{
		$this->config->set('countdown_enable', $this->request->variable('countdown_enable', 0));
		$this->config->set('countdown_testmode', $this->request->variable('countdown_testmode', 0));
		$this->config->set('countdown_direction', $this->request->variable('countdown_direction', 0));
		$this->config->set('countdown_date', $this->request->variable('countdown_date', ''));
		$this->config->set('countdown_offset_enable', $this->request->variable('countdown_offset_enable', 0));
		$this->config->set('countdown_offset', $this->request->variable('countdown_offset', ''));
		$this->config->set('countdown_year', $this->request->variable('countdown_year', 0));
		$this->config->set('countdown_month', $this->request->variable('countdown_month', 0));
		$this->config->set('countdown_text', $this->request->variable('countdown_text', '', true));
		$this->config->set('countdown_complete', $this->request->variable('countdown_complete', '', true));
	}

	/**
	* Set page url
	*
	* @param string $u_action Custom form action
	* @return null
	* @access public
	*/
	public function set_page_url($u_action)
	{
		$this->u_action = $u_action;
	}
}
