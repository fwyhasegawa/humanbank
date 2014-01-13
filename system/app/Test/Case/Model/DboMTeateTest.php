<?php
App::uses('DboMTeate', 'Model');

/**
 * DboMTeate Test Case
 *
 */
class DboMTeateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dbo_m_teate',
		'app.dbo_t_kintai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DboMTeate = ClassRegistry::init('DboMTeate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DboMTeate);

		parent::tearDown();
	}

}
