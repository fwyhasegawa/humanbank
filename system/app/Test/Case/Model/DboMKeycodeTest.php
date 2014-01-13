<?php
App::uses('DboMKeycode', 'Model');

/**
 * DboMKeycode Test Case
 *
 */
class DboMKeycodeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dbo_m_keycode'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DboMKeycode = ClassRegistry::init('DboMKeycode');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DboMKeycode);

		parent::tearDown();
	}

}
