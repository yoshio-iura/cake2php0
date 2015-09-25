<?php
App::uses('FurkomiFutanKbn', 'Model');

/**
 * FurkomiFutanKbn Test Case
 */
class FurkomiFutanKbnTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.furkomi_futan_kbn'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FurkomiFutanKbn = ClassRegistry::init('FurkomiFutanKbn');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FurkomiFutanKbn);

		parent::tearDown();
	}

}
