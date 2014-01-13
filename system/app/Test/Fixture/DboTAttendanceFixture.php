<?php
/**
 * DboTAttendanceFixture
 *
 */
class DboTAttendanceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'id'),
		'dbo_m_companies_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '会社id'),
		'dbo_m_staffs_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => 'スタッフid'),
		'dbo_t_matters_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '案件id'),
		'dbo_t_claims_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index', 'comment' => '請求ID'),
		'service_day' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '勤務日'),
		'time_start' => array('type' => 'time', 'null' => false, 'default' => null, 'comment' => '開始時間'),
		'time_end' => array('type' => 'time', 'null' => false, 'default' => null, 'comment' => '終了時間'),
		'interval1_start' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '休憩1開始'),
		'interval1_end' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '休憩1終了'),
		'interval2_start' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '休憩2開始'),
		'interval2_end' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '休憩2終了'),
		'interval3_start' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '休憩3開始'),
		'interval3_end' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '休憩3終了'),
		'time_total' => array('type' => 'float', 'null' => false, 'default' => null, 'comment' => '合計勤務時間数'),
		'time_overtime' => array('type' => 'float', 'null' => false, 'default' => null, 'comment' => '残業時間数'),
		'time_latetime' => array('type' => 'float', 'null' => false, 'default' => null, 'comment' => '深夜残業時間数'),
		'time_interval' => array('type' => 'float', 'null' => true, 'default' => null, 'comment' => '休憩時間'),
		'sales' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '売上時間'),
		'pay' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '支払金額'),
		'seikyu_kazei' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '請求金額（課税）'),
		'seikyu_hikazei' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '請求金額(非課税)'),
		'teate1' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '手当1'),
		'teate2' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '手当2'),
		'teate3' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '手当3'),
		'dbo_m_allowances_id1' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '手当詳細1'),
		'dbo_m_allowances_id2' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '手当詳細2'),
		'dbo_m_allowances_id3' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '手当詳細3'),
		'tardy_flg' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '遅刻フラグ'),
		'absence_flg' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '欠勤フラグ'),
		'comment' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1024, 'collate' => 'utf8_general_ci', 'comment' => '備考', 'charset' => 'utf8'),
		'delate' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '削除フラグ'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '作成日'),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 1),
			'dbo_m_companies_id' => array('column' => 'dbo_m_companies_id', 'unique' => 0),
			'dbo_m_staffs_id' => array('column' => 'dbo_m_staffs_id', 'unique' => 0),
			'dbo_t_claims_id' => array('column' => 'dbo_t_claims_id', 'unique' => 0),
			'dbo_t_matters_id' => array('column' => 'dbo_t_matters_id', 'unique' => 0)
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
			'dbo_m_staffs_id' => 1,
			'dbo_t_matters_id' => 1,
			'dbo_t_claims_id' => 1,
			'service_day' => '2014-01-09',
			'time_start' => '16:52:33',
			'time_end' => '16:52:33',
			'interval1_start' => '16:52:33',
			'interval1_end' => '16:52:33',
			'interval2_start' => '16:52:33',
			'interval2_end' => '16:52:33',
			'interval3_start' => '16:52:33',
			'interval3_end' => '16:52:33',
			'time_total' => 1,
			'time_overtime' => 1,
			'time_latetime' => 1,
			'time_interval' => 1,
			'sales' => 1,
			'pay' => 1,
			'seikyu_kazei' => 1,
			'seikyu_hikazei' => 1,
			'teate1' => 1,
			'teate2' => 1,
			'teate3' => 1,
			'dbo_m_allowances_id1' => 1,
			'dbo_m_allowances_id2' => 1,
			'dbo_m_allowances_id3' => 1,
			'tardy_flg' => 1,
			'absence_flg' => 1,
			'comment' => 'Lorem ipsum dolor sit amet',
			'delate' => 1,
			'created' => '2014-01-09 16:52:33',
			'modified' => '2014-01-09 16:52:33'
		),
	);

}
