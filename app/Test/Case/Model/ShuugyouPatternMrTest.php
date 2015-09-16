<?php
App::uses('ShuugyouPatternMr', 'Model');

/**
 * ShuugyouPatternMr Test Case
 */
class ShuugyouPatternMrTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.shuugyou_pattern_mr',
		'app.shuugyou_bi_mr',
		'app.shuugyou_shubetu_mr',
		'app.shuugyou_jikan_mr',
		'app.torihikisaki_mr',
		'app.user',
		'app.bumon_mr',
		'app.thema_mr',
		'app.shokushu_kbn',
		'app.shounin_kengen_mr'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ShuugyouPatternMr = ClassRegistry::init('ShuugyouPatternMr');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ShuugyouPatternMr);

		parent::tearDown();
	}

}
