<?php
App::uses('DboMAccount', 'Model');

/**
 * DboMAccount Test Case
 *
 */
class DboMAccountTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dbo_m_account',
		'app.dbo_m_company',
		'app.dbo_m_staff'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DboMAccount = ClassRegistry::init('DboMAccount');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DboMAccount);

		parent::tearDown();
	}

}
