<?php
App::uses('DboTSeikyu', 'Model');

/**
 * DboTSeikyu Test Case
 *
 */
class DboTSeikyuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dbo_t_seikyu',
		'app.dbo_m_clients',
		'app.dbo_t_kintai',
		'app.dbo_m_staffs',
		'app.dbo_t_matters',
		'app.dbo_m_teate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DboTSeikyu = ClassRegistry::init('DboTSeikyu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DboTSeikyu);

		parent::tearDown();
	}

}
