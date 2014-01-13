<?php
App::uses('DboTAttendance', 'Model');

/**
 * DboTAttendance Test Case
 *
 */
class DboTAttendanceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dbo_t_attendance',
		'app.dbo_m_companies',
		'app.dbo_m_staffs',
		'app.dbo_t_matters',
		'app.dbo_t_claims',
		'app.dbo_m_allowances1',
		'app.dbo_m_allowances2',
		'app.dbo_m_allowances3'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DboTAttendance = ClassRegistry::init('DboTAttendance');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DboTAttendance);

		parent::tearDown();
	}

}
