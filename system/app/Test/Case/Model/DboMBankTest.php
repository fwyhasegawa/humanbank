<?php
App::uses('DboMBank', 'Model');

/**
 * DboMBank Test Case
 *
 */
class DboMBankTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dbo_m_bank',
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
		$this->DboMBank = ClassRegistry::init('DboMBank');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DboMBank);

		parent::tearDown();
	}

}
