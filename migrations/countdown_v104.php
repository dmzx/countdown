<?php
/**
*
* @package phpBB Extension - phpBB Countdown
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\countdown\migrations;

class countdown_v104 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\dmzx\countdown\migrations\countdown_schema',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('countdown_version', '1.0.4')),
		);
	}
}
