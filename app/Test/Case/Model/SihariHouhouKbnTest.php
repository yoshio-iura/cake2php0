<?php
App::uses('SihariHouhouKbn', 'Model');

/**
 * SihariHouhouKbn Test Case
 */
class SihariHouhouKbnTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sihari_houhou_kbn'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SihariHouhouKbn = ClassRegistry::init('SihariHouhouKbn');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SihariHouhouKbn);

		parent::tearDown();
	}

}
