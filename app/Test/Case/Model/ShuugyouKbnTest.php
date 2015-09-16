<?php
App::uses('ShuugyouKbn', 'Model');

/**
 * ShuugyouKbn Test Case
 */
class ShuugyouKbnTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.shuugyou_kbn'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ShuugyouKbn = ClassRegistry::init('ShuugyouKbn');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ShuugyouKbn);

		parent::tearDown();
	}

}
