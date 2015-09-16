<?php
App::uses('ShuugyouJikanMr', 'Model');

/**
 * ShuugyouJikanMr Test Case
 */
class ShuugyouJikanMrTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.shuugyou_jikan_mr',
		'app.shuugyou_shubetu_mr',
		'app.shuugyou_bi_mr',
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
		$this->ShuugyouJikanMr = ClassRegistry::init('ShuugyouJikanMr');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ShuugyouJikanMr);

		parent::tearDown();
	}

}
