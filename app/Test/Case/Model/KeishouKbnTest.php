<?php
App::uses('KeishouKbn', 'Model');

/**
 * KeishouKbn Test Case
 */
class KeishouKbnTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.keishou_kbn'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->KeishouKbn = ClassRegistry::init('KeishouKbn');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->KeishouKbn);

		parent::tearDown();
	}

}
