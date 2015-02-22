<?php
/**
*
* @package phpBB Extension - Countdown
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
namespace dmzx\countdown\acp;
class acp_countdown_info
{
function module()
{
return array(
			'filename'	=> '\dmzx\countdown\acp\acp_countdown_module',
			'title'		=> 'ACP_COUNTDOWN',
			'version'	=> '2.0.2',
			'modes'		=> array(
				'config'	=> array('title' => 'ACP_COUNTDOWN_CONFIG', 
				'auth' => 'ext_dmzx/countdown && acl_a_board', 
				'cat' => array('ACP_COUNTDOWN')),
			),
		);
	}


}
