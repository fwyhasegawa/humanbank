<?php
/**
 * DboTServiceFixture
 *
 */
class DboTServiceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'dbo_m_staff_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'unique'),
		'dbo_t_matter_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'unique'),
		'service_day' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '???'),
		'time_start' => array('type' => 'time', 'null' => false, 'default' => null, 'comment' => '??????'),
		'time_end' => array('type' => 'time', 'null' => false, 'default' => null, 'comment' => '??????'),
		'time_interval' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '????'),
		'sales' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '????'),
		'pay' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '????'),
		'allow_trans_seikyu_flag' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '????????'),
		'allow_trans' => array('type' => 'integer', 'null' => true, 'default' => null),
		'allow' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '??'),
		'allow_detail' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '?????', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 1),
			'dbo_m_staff_id' => array('column' => 'dbo_m_staff_id', 'unique' => 1),
			'dbo_t_matter_id' => array('column' => 'dbo_t_matter_id', 'unique' => 1)
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
			'dbo_m_staff_id' => 1,
			'dbo_t_matter_id' => 1,
			'service_day' => '2013-12-24',
			'time_start' => '16:07:06',
			'time_end' => '16:07:06',
			'time_interval' => '16:07:06',
			'sales' => 1,
			'pay' => 1,
			'allow_trans_seikyu_flag' => 1,
			'allow_trans' => 1,
			'allow' => 1,
			'allow_detail' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
