<?php
App::uses('SihariTukiKbn', 'Model');

/**
 * SihariTukiKbn Test Case
 */
class SihariTukiKbnTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sihari_tuki_kbn'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SihariTukiKbn = ClassRegistry::init('SihariTukiKbn');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SihariTukiKbn);

		parent::tearDown();
	}

}
