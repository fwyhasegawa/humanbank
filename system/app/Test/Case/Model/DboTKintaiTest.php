<?php
App::uses('DboTKintai', 'Model');

/**
 * DboTKintai Test Case
 *
 */
class DboTKintaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dbo_t_kintai',
		'app.dbo_m_staffs',
		'app.dbo_t_matters',
		'app.dbo_t_seikyu',
		'app.dbo_m_teate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DboTKintai = ClassRegistry::init('DboTKintai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DboTKintai);

		parent::tearDown();
	}

}
