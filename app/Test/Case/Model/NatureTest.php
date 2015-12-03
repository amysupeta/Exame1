<?php
App::uses('Nature', 'Model');

/**
 * Nature Test Case
 *
 */
class NatureTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.nature',
		'app.event',
		'app.partcipant'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Nature = ClassRegistry::init('Nature');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Nature);

		parent::tearDown();
	}

}
