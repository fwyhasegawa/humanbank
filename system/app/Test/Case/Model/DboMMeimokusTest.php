<?php
App::uses('DboMMeimokus', 'Model');

/**
 * DboMMeimokus Test Case
 *
 */
class DboMMeimokusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dbo_m_meimokus'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DboMMeimokus = ClassRegistry::init('DboMMeimokus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DboMMeimokus);

		parent::tearDown();
	}

}
