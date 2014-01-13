<?php
App::uses('DboMPosition', 'Model');

/**
 * DboMPosition Test Case
 *
 */
class DboMPositionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dbo_m_position',
		'app.dbo_m_staff'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DboMPosition = ClassRegistry::init('DboMPosition');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DboMPosition);

		parent::tearDown();
	}

}
