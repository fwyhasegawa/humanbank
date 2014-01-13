<?php
App::uses('DboMClient', 'Model');

/**
 * DboMClient Test Case
 *
 */
class DboMClientTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dbo_m_client',
		'app.dbo_m_companies',
		'app.dbo_m_days_cutoff',
		'app.dbo_m_days_pay'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DboMClient = ClassRegistry::init('DboMClient');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DboMClient);

		parent::tearDown();
	}

}
