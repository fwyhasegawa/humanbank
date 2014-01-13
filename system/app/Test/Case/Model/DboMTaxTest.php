<?php
App::uses('DboMTax', 'Model');

/**
 * DboMTax Test Case
 *
 */
class DboMTaxTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dbo_m_tax'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DboMTax = ClassRegistry::init('DboMTax');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DboMTax);

		parent::tearDown();
	}

}
