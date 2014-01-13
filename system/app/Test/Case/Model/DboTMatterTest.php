<?php
App::uses('DboTMatter', 'Model');

/**
 * DboTMatter Test Case
 *
 */
class DboTMatterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dbo_t_matter',
		'app.dbo_m_companies',
		'app.dbo_m_clients'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DboTMatter = ClassRegistry::init('DboTMatter');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DboTMatter);

		parent::tearDown();
	}

}
