<?php
App::uses('DboMCycle', 'Model');

/**
 * DboMCycle Test Case
 *
 */
class DboMCycleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dbo_m_cycle'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DboMCycle = ClassRegistry::init('DboMCycle');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DboMCycle);

		parent::tearDown();
	}

}
