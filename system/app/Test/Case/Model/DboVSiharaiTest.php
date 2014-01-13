<?php
App::uses('DboVSiharai', 'Model');

/**
 * DboVSiharai Test Case
 *
 */
class DboVSiharaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dbo_v_siharai',
		'app.dbo_m_staff',
		'app.dbo_m_banks',
		'app.dbo_m_branches',
		'app.dbo_m_account',
		'app.dbo_m_company',
		'app.dbo_m_cycles',
		'app.dbo_t_seikyu',
		'app.dbo_t_matters',
		'app.dbo_t_service',
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
		$this->DboVSiharai = ClassRegistry::init('DboVSiharai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DboVSiharai);

		parent::tearDown();
	}

}
