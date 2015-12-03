<?php
App::uses('Partcipant', 'Model');

/**
 * Partcipant Test Case
 *
 */
class PartcipantTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.partcipant',
		'app.event',
		'app.nature'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Partcipant = ClassRegistry::init('Partcipant');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Partcipant);

		parent::tearDown();
	}

}
