<?php
/**
*
* @package phpBB Extension - phpBB Countdown
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
*
*/

namespace dmzx\countdown\migrations;

class countdown_schema extends \phpbb\db\migration\migration
{

	public function update_data()
	{
		return array(
			// Add configs
			array('config.add', array('countdown_enable', '')),
			array('config.add', array('countdown_direction', 1)),
			array('config.add', array('countdown_date', '')),
			array('config.add', array('countdown_text', '')),
			array('config.add', array('countdown_complete', '')),
			array('config.add', array('countdown_version', '1.0.3')),
			array('config.add', array('countdown_testmode', '')),
			array('config.add', array('countdown_year', '')),
			array('config.add', array('countdown_offset_enable', '')),
			array('config.add', array('countdown_offset', '')),
		);
	}
}
