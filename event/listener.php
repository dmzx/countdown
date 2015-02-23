<?php
/**
*
* @package phpBB Extension - PhpBB Countdown
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
*
*/

namespace dmzx\countdown\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'   => 'load_language_on_setup',
			'core.page_header'	=> 'add_page_header_link',
		);
	}

	protected $helper;

	protected $template;

	public function __construct(\phpbb\controller\helper $helper, \phpbb\template\template $template, \phpbb\config\config $config)
	{
		$this->helper = $helper;
		$this->template = $template;
		$this->config = $config;		
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
		'COUNTDOWN_ENABLE'			=> $this->config['countdown_enable'] ? true : false,
		'COUNTDOWN_TESTMODE'		=> $this->config['countdown_testmode'] ? true : false,
		'COUNTDOWN_DIRECTION'		=> $this->config['countdown_direction'] ? true : false,
		'COUNTDOWN_DATE'			=> (isset($this->config['countdown_date'])) ? $this->config['countdown_date'] : '',
		'COUNTDOWN_OFFSET_ENABLE'	=> $this->config['countdown_offset_enable'] ? true : false,
		'COUNTDOWN_OFFSET'			=> (isset($this->config['countdown_offset'])) ? $this->config['countdown_offset'] : '',
		'COUNTDOWN_YEAR'			=> $this->config['countdown_year'] ? true : false,
		'COUNTDOWN_MONTH'			=> $this->config['countdown_month'] ? true : false,
		'COUNTDOWN_TEXT'			=> (isset($this->config['countdown_text'])) ? $this->config['countdown_text'] : '',
		'COUNTDOWN_COMPLETE'		=> (isset($this->config['countdown_complete'])) ? $this->config['countdown_complete'] : '',
		));
	}
}
