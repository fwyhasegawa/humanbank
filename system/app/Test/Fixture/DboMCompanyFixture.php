<?php
/**
 * DboMCompanyFixture
 *
 */
class DboMCompanyFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'id'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '??', 'charset' => 'utf8'),
		'addr' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '??', 'charset' => 'utf8'),
		'name_kana' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '?????', 'charset' => 'utf8'),
		'tel' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '????
', 'charset' => 'utf8'),
		'fax' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => 'FAX??', 'charset' => 'utf8'),
		'mail_addr' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'utf8_general_ci', 'comment' => 'メールアドレス', 'charset' => 'utf8'),
		'dbo_m_banks_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => 'id'),
		'account_num' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '????', 'charset' => 'utf8'),
		'delate' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '?????'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '????????'),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '???'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 1),
			'dbo_m_banks_id' => array('column' => 'dbo_m_banks_id', 'unique' => 0)
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
			'addr' => 'Lorem ipsum dolor sit amet',
			'name_kana' => 'Lorem ipsum dolor sit amet',
			'tel' => 'Lorem ipsum dolor sit amet',
			'fax' => 'Lorem ipsum dolor sit amet',
			'mail_addr' => 'Lorem ipsum dolor sit amet',
			'dbo_m_banks_id' => 1,
			'account_num' => 'Lorem ipsum dolor sit amet',
			'delate' => 1,
			'created' => '2014-01-13 11:35:27',
			'modified' => '2014-01-13 11:35:27'
		),
	);

}
