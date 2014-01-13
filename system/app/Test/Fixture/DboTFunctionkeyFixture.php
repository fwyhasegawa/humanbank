<?php
/**
 * DboTFunctionkeyFixture
 *
 */
class DboTFunctionkeyFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'id'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '??', 'charset' => 'utf8'),
		'dbo_m_keycodes_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '?????ID'),
		'dbo_t_matters_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => 'id'),
		'users_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '??????ID'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 1),
			'users_id' => array('column' => 'users_id', 'unique' => 0),
			'dbo_t_matters_id' => array('column' => 'dbo_t_matters_id', 'unique' => 0),
			'dbo_m_keycodes_id' => array('column' => 'dbo_m_keycodes_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'dbo_m_keycodes_id' => 1,
			'dbo_t_matters_id' => 1,
			'users_id' => 1
		),
	);

}
