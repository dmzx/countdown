<?php
/**
*
* @package phpBB Extension - PhpBB Countdown
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
*
*/

namespace dmzx\countdown\migrations;

class countdown_module extends \phpbb\db\migration\migration
{
	
	public function update_data()
	{
		return array(
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_COUNTDOWN')),
			array('module.add', array(
				'acp', 'ACP_COUNTDOWN', array(
					'module_basename'	=> '\dmzx\countdown\acp\acp_countdown_module',
					'modes'	            => array('overview'),
					'module_auth'		=> 'acl_a_board',
				),
			)),
		);
	}

}