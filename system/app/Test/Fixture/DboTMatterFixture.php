<?php
/**
 * DboTMatterFixture
 *
 */
class DboTMatterFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'id'),
		'dbo_m_companies_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '会社ID'),
		'dbo_m_clients_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '顧客ID'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '名前', 'charset' => 'utf8'),
		'addr' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '住所', 'charset' => 'utf8'),
		'tel' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '電話番号', 'charset' => 'utf8'),
		'time_start' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '開始時間'),
		'time_end' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '終了時間'),
		'interval_start' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '休憩時間開始'),
		'interval_end' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '休憩時間終了'),
		'nikyu_flg' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '日給フラグ'),
		'price_seikyu' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '請求単価'),
		'price_siharai' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '支払い単価'),
		'delate' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '削除フラグ'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '作成日'),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 1),
			'dbo_m_companies_id' => array('column' => 'dbo_m_companies_id', 'unique' => 0),
			'dbo_m_clients_id' => array('column' => 'dbo_m_clients_id', 'unique' => 0)
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
			'dbo_m_clients_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'addr' => 'Lorem ipsum dolor sit amet',
			'tel' => 'Lorem ipsum dolor sit amet',
			'time_start' => '10:03:03',
			'time_end' => '10:03:03',
			'interval_start' => '10:03:03',
			'interval_end' => '10:03:03',
			'nikyu_flg' => 1,
			'price_seikyu' => 1,
			'price_siharai' => 1,
			'delate' => 1,
			'created' => '2014-01-08 10:03:03',
			'modified' => '2014-01-08 10:03:03'
		),
	);

}
