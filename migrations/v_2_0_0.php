<?php
/**
*
* @package test
* @copyright (c) 2014 rxu
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace rxu\posts_merging\migrations;

class v_2_0_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['test_version']) && version_compare($this->config['test_version'], '2.0.0', '>=');
	}

	static public function depends_on()
	{
			return array('\phpbb\db\migration\data\v310\dev');
	}

	public function update_schema()
	{
		return 	array(
			'add_columns' => array(
				$this->table_prefix . 'posts' => array(
					'post_created' => array('INT:11', '0'),
				),
			),
		);
	}

	public function revert_schema()
	{
		return 	array(	
			'drop_columns' => array(
				$this->table_prefix . 'posts' => array('post_created'),
			),
		);
	}

	public function update_data()
	{
		return array(
			// Add configs
			array('config.add', array('merge_interval', 3)),
			array('config.add', array('merge_no_forums', 0)),
			array('config.add', array('merge_no_topics', 0)),

			// Current version
			array('config.add', array('posts_merging_version', '2.0.0')),

			// Add ACP modules
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_POSTS_MERGING')),
			array('module.add', array('acp', 'ACP_POSTS_MERGING', array(
					'module_basename'	=> '\rxu\posts_merging\acp\posts_merging_module',
					'module_langname'	=> 'ACP_POSTS_MERGING',
					'module_mode'		=> 'config_posts_merging',
					'module_auth'		=> 'acl_a_board',
			))),
		);
	}
}
