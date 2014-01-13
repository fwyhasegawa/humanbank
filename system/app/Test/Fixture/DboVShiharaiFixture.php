<?php
/**
 * DboVShiharaiFixture
 *
 */
class DboVShiharaiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'dbo_v_shiharai';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'dbo_m_staff_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'dbo_t_matter_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'service_day' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '???'),
		'time_start' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '??????'),
		'time_end' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '??????'),
		'time_interval' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '????'),
		'sales' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '????'),
		'pay' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '????'),
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
			'dbo_t_matter_id' => 1,
			'service_day' => '2013-12-24',
			'time_start' => '16:07:39',
			'time_end' => '16:07:39',
			'time_interval' => '16:07:39',
			'sales' => 1,
			'pay' => 1
		),
	);

}
