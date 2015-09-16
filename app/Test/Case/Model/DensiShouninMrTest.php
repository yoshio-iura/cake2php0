<?php
App::uses('DensiShouninMr', 'Model');

/**
 * DensiShouninMr Test Case
 */
class DensiShouninMrTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.densi_shounin_mr'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DensiShouninMr = ClassRegistry::init('DensiShouninMr');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DensiShouninMr);

		parent::tearDown();
	}

}
