<?php
App::uses('DboMManege', 'Model');

/**
 * DboMManege Test Case
 *
 */
class DboMManegeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dbo_m_manege',
		'app.user',
		'app.dbo_m_manages'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DboMManege = ClassRegistry::init('DboMManege');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DboMManege);

		parent::tearDown();
	}

}
