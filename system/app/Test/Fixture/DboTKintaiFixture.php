<?php
/**
 * DboTKintaiFixture
 *
 */
class DboTKintaiFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'id : id'),
		'dbo_m_staffs_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'unique', 'comment' => 'スタッフID : id'),
		'dbo_t_matters_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'unique', 'comment' => '案件ID : id'),
		'dbo_t_seikyu_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index', 'comment' => '請求ID : 請求ID'),
		'service_day' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '勤務日 : 勤務日'),
		'time_start' => array('type' => 'time', 'null' => false, 'default' => null, 'comment' => '開始時間 : 作業開始時間'),
		'time_end' => array('type' => 'time', 'null' => false, 'default' => null, 'comment' => '終了時間 : 作業終了時間'),
		'time_interval' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '休憩時間 : 休憩時間'),
		'sales' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '売上 : 売上金額'),
		'pay' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '支払単価 : 支払金額'),
		'koutsuhi_seikyu_flag' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '交通費請求フラグ : 交通費の請求可否'),
		'seikyu1' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '請求金額１ : 請求金額１'),
		'seikyu2' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '請求金額２ : 請求金額２'),
		'seikyu3' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '請求金額３ : 請求金額３'),
		'teate1' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '手当１ : 手当１'),
		'teate2' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '手当２ : 手当２'),
		'teate3' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '手当３ : 手当３'),
		'dbo_m_teates_id1' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '手当詳細１ : 手当の詳細１'),
		'dbo_m_teates_id2' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '手当詳細２ : 手当詳細２'),
		'dbo_m_teates_id3' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '手当詳細３ : 手当詳細３'),
		'delate' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '削除フラグ : 削除フラグ'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '作成日 : 処理を実行した日'),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日 : 更新日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 1),
			'dbo_m_staffs_id' => array('column' => 'dbo_m_staffs_id', 'unique' => 1),
			'dbo_t_matters_id' => array('column' => 'dbo_t_matters_id', 'unique' => 1),
			'dbo_t_seikyu_id' => array('column' => 'dbo_t_seikyu_id', 'unique' => 0)
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
			'dbo_m_staffs_id' => 1,
			'dbo_t_matters_id' => 1,
			'dbo_t_seikyu_id' => 1,
			'service_day' => '2014-01-01',
			'time_start' => '12:19:42',
			'time_end' => '12:19:42',
			'time_interval' => '12:19:42',
			'sales' => 1,
			'pay' => 1,
			'koutsuhi_seikyu_flag' => 1,
			'seikyu1' => 1,
			'seikyu2' => 1,
			'seikyu3' => 1,
			'teate1' => 1,
			'teate2' => 1,
			'teate3' => 1,
			'dbo_m_teates_id1' => 1,
			'dbo_m_teates_id2' => 1,
			'dbo_m_teates_id3' => 1,
			'delate' => 1,
			'created' => '2014-01-01 12:19:42',
			'modified' => '2014-01-01 12:19:42'
		),
	);

}
