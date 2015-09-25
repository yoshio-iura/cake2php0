<?php
App::uses('SiharibiKbn', 'Model');

/**
 * SiharibiKbn Test Case
 */
class SiharibiKbnTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.siharibi_kbn'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SiharibiKbn = ClassRegistry::init('SiharibiKbn');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SiharibiKbn);

		parent::tearDown();
	}

}
