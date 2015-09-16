<?php
App::uses('ShokushuKbn', 'Model');

/**
 * ShokushuKbn Test Case
 */
class ShokushuKbnTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.shokushu_kbn'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ShokushuKbn = ClassRegistry::init('ShokushuKbn');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ShokushuKbn);

		parent::tearDown();
	}

}
