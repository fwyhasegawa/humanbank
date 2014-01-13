<?php
App::uses('DboTFunctionkey', 'Model');

/**
 * DboTFunctionkey Test Case
 *
 */
class DboTFunctionkeyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dbo_t_functionkey',
		'app.dbo_m_keycodes',
		'app.dbo_t_matters',
		'app.users'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DboTFunctionkey = ClassRegistry::init('DboTFunctionkey');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DboTFunctionkey);

		parent::tearDown();
	}

}
