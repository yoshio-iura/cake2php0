<?php
App::uses('ZaikoFusokuHyoujiVw', 'Model');

/**
 * ZaikoFusokuHyoujiVw Test Case
 */
class ZaikoFusokuHyoujiVwTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.zaiko_fusoku_hyouji_vw'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZaikoFusokuHyoujiVw = ClassRegistry::init('ZaikoFusokuHyoujiVw');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZaikoFusokuHyoujiVw);

		parent::tearDown();
	}

}
