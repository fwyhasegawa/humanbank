<?php
App::uses('DboTLogin', 'Model');

/**
 * DboTLogin Test Case
 *
 */
class DboTLoginTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dbo_t_login',
		'app.dbo_m_staffs'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DboTLogin = ClassRegistry::init('DboTLogin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DboTLogin);

		parent::tearDown();
	}

}
