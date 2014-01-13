<?php
App::uses('DboTSiharai', 'Model');

/**
 * DboTSiharai Test Case
 *
 */
class DboTSiharaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dbo_t_siharai',
		'app.dbo_m_staffs'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DboTSiharai = ClassRegistry::init('DboTSiharai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DboTSiharai);

		parent::tearDown();
	}

}
