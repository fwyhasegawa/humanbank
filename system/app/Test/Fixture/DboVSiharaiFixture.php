<?php
/**
 * DboVSiharaiFixture
 *
 */
class DboVSiharaiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'dbo_v_siharai';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => 'id', 'key' => 'primary'),
		'dbo_m_staff_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => 'スタッフＩＤ'),
		'dbo_t_matters_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '案件ID'),
		'service_day' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '勤務日 : 勤務日'),
		'time_start' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '開始時間 : 作業開始時間'),
		'time_end' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '終了時間 : 作業終了時間'),
		'time_interval' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '休憩時間 : 休憩時間'),
		'sales' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '売上 : 売上金額'),
		'pay' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '支払単価 : 支払金額'),
		'indexes' => array(
			
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'dbo_m_staff_id' => 1,
			'dbo_t_matters_id' => 1,
			'service_day' => '2013-12-23',
			'time_start' => '16:47:18',
			'time_end' => '16:47:18',
			'time_interval' => '16:47:18',
			'sales' => 1,
			'pay' => 1
		),
	);

}
