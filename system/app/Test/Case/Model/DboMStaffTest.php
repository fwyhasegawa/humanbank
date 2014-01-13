<?php
App::uses('DboMStaff', 'Model');

/**
 * DboMStaff Test Case
 *
 */
class DboMStaffTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dbo_m_staff',
		'app.dbo_m_companies',
		'app.dbo_m_days',
		'app.dbo_m_banks'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DboMStaff = ClassRegistry::init('DboMStaff');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DboMStaff);

		parent::tearDown();
	}

}
