<?php
/**
*
* @package phpBB Extension - Countdown
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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

		/* @var \phpbb\controller\helper */
	protected $helper;

	/* @var \phpbb\template\template */
	protected $template;

	
	public function __construct(\phpbb\controller\helper $helper, \phpbb\template\template $template)
	{
		$this->helper = $helper;
		$this->template = $template;
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
		));
	}
}
