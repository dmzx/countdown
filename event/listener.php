<?php
/**
*
* @package phpBB Extension - phpBB Countdown
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\countdown\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use phpbb\template\template;
use phpbb\config\config;

class listener implements EventSubscriberInterface
{
	/** @var template */
	protected $template;

	/** @var config */
	protected $config;

	public function __construct(
		template $template,
		config $config
	)
	{
		$this->template = $template;
		$this->config 	= $config;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'	=> 'load_language_on_setup',
			'core.page_header'	=> 'add_page_header_link',
		);
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'dmzx/countdown',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function add_page_header_link($event)
	{
		$this->template->assign_vars(array(
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
		));
	}
}
