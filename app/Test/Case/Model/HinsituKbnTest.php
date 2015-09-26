<?php
App::uses('HinsituKbn', 'Model');

/**
 * HinsituKbn Test Case
 */
class HinsituKbnTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hinsitu_kbn',
		'app.sakusei_user',
		'app.kousin_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HinsituKbn = ClassRegistry::init('HinsituKbn');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HinsituKbn);

		parent::tearDown();
	}

}
