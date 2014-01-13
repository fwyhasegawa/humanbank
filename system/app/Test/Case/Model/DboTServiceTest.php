<?php
App::uses('DboTService', 'Model');

/**
 * DboTService Test Case
 *
 */
class DboTServiceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dbo_t_service',
		'app.dbo_m_staff',
		'app.dbo_m_day_pay',
		'app.dbo_m_banks',
		'app.dbo_m_branches',
		'app.dbo_m_account',
		'app.dbo_m_company',
		'app.dbo_m_position',
		'app.dbo_t_seikyu',
		'app.dbo_v_shiharai',
		'app.dbo_t_matter',
		'app.dbo_m_clients'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DboTService = ClassRegistry::init('DboTService');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DboTService);

		parent::tearDown();
	}

}
