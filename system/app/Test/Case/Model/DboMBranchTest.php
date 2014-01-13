<?php
App::uses('DboMBranch', 'Model');

/**
 * DboMBranch Test Case
 *
 */
class DboMBranchTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dbo_m_branch',
		'app.dbo_m_banks'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DboMBranch = ClassRegistry::init('DboMBranch');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DboMBranch);

		parent::tearDown();
	}

}
