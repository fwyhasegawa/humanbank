<?php
/**
 * DboMClientFixture
 *
 */
class DboMClientFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'id'),
		'dbo_m_companies_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '??ID'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '??', 'charset' => 'utf8'),
		'name_kana' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '?????', 'charset' => 'utf8'),
		'addr' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '??', 'charset' => 'utf8'),
		'tel' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '????
', 'charset' => 'utf8'),
		'fax' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => 'FAX??', 'charset' => 'utf8'),
		'dbo_m_days_id_cutoff' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => 'id'),
		'dbo_m_days_id_pay' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => 'id'),
		'delate' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '?????'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '????????'),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '???'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 1),
			'dbo_m_days_id_cutoff' => array('column' => 'dbo_m_days_id_cutoff', 'unique' => 0),
			'dbo_m_days_id_pay' => array('column' => 'dbo_m_days_id_pay', 'unique' => 0),
			'dbo_m_companies_id' => array('column' => 'dbo_m_companies_id', 'unique' => 0)
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
			'dbo_m_companies_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'name_kana' => 'Lorem ipsum dolor sit amet',
			'addr' => 'Lorem ipsum dolor sit amet',
			'tel' => 'Lorem ipsum dolor sit amet',
			'fax' => 'Lorem ipsum dolor sit amet',
			'dbo_m_days_id_cutoff' => 1,
			'dbo_m_days_id_pay' => 1,
			'delate' => 1,
			'created' => '2014-01-08 18:27:52',
			'modified' => '2014-01-08 18:27:52'
		),
	);

}
