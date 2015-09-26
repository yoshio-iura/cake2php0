<?php
App::uses('ShoyushaKbn', 'Model');

/**
 * ShoyushaKbn Test Case
 */
class ShoyushaKbnTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.shoyusha_kbn'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ShoyushaKbn = ClassRegistry::init('ShoyushaKbn');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ShoyushaKbn);

		parent::tearDown();
	}

}
