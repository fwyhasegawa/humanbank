<?php
App::uses('DboMCompany', 'Model');

/**
 * DboMCompany Test Case
 *
 */
class DboMCompanyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dbo_m_company',
		'app.dbo_m_banks'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DboMCompany = ClassRegistry::init('DboMCompany');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DboMCompany);

		parent::tearDown();
	}

}
