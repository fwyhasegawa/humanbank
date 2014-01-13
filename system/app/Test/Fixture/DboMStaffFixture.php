<?php
/**
 * DboMStaffFixture
 *
 */
class DboMStaffFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'id'),
		'dbo_m_companies_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '??ID'),
		'family_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '??', 'charset' => 'utf8'),
		'first_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '??', 'charset' => 'utf8'),
		'family_name_kana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '????', 'charset' => 'utf8'),
		'first_name_kana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '????', 'charset' => 'utf8'),
		'tel' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '????
', 'charset' => 'utf8'),
		'h_tel' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '??????', 'charset' => 'utf8'),
		'mail_addr' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'utf8_general_ci', 'comment' => 'メールアドレス', 'charset' => 'utf8'),
		'post_addr' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => '郵便番号', 'charset' => 'utf8'),
		'addr' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '??', 'charset' => 'utf8'),
		'fuyo_num' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
		'birthday' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '????'),
		'dbo_m_days_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => 'id'),
		'dbo_m_banks_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => 'id'),
		'account_num' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '????', 'charset' => 'utf8'),
		'delate' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '?????'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '????????'),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '???'),
		'transfar_fee_flag' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '振込手数料負担フラグ'),
		'employment_insurance_flag' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '雇用保険加入フラグ'),
		'health_insurance_flag' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '健康保険加入フラグ'),
		'care_insurance_flag' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '介護保険加入フラグ'),
		'welfare_pension_flag' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '厚生年金加入フラグ'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 1),
			'dbo_m_days_id' => array('column' => 'dbo_m_days_id', 'unique' => 0),
			'dbo_m_companies_id' => array('column' => 'dbo_m_companies_id', 'unique' => 0),
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
			'dbo_m_companies_id' => 1,
			'family_name' => 'Lorem ipsum dolor sit amet',
			'first_name' => 'Lorem ipsum dolor sit amet',
			'family_name_kana' => 'Lorem ipsum dolor sit amet',
			'first_name_kana' => 'Lorem ipsum dolor sit amet',
			'tel' => 'Lorem ipsum dolor sit amet',
			'h_tel' => 'Lorem ipsum dolor sit amet',
			'mail_addr' => 'Lorem ipsum dolor sit amet',
			'post_addr' => 'Lorem ipsum do',
			'addr' => 'Lorem ipsum dolor sit amet',
			'fuyo_num' => 1,
			'birthday' => '2014-01-13',
			'dbo_m_days_id' => 1,
			'dbo_m_banks_id' => 1,
			'account_num' => 'Lorem ipsum dolor sit amet',
			'delate' => 1,
			'created' => '2014-01-13 11:36:32',
			'modified' => '2014-01-13 11:36:32',
			'transfar_fee_flag' => 1,
			'employment_insurance_flag' => 1,
			'health_insurance_flag' => 1,
			'care_insurance_flag' => 1,
			'welfare_pension_flag' => 1
		),
	);

}
