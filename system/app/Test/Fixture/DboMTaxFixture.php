<?php
/**
 * DboMTaxFixture
 *
 */
class DboMTaxFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'dbo_m_tax';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'percentage' => array('type' => 'float', 'null' => false, 'default' => null, 'comment' => '消費税率'),
		'indexes' => array(
			
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
			'percentage' => 1
		),
	);

}
