<?php
App::uses('DboMDay', 'Model');

/**
 * DboMDay Test Case
 *
 */
class DboMDayTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dbo_m_day',
		'app.dbo_m_client',
		'app.dbo_t_seikyu',
		'app.dbo_t_matter',
		'app.dbo_m_staff'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DboMDay = ClassRegistry::init('DboMDay');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DboMDay);

		parent::tearDown();
	}

}
