<?php
App::uses('ShuugyouShubetuKbn', 'Model');

/**
 * ShuugyouShubetuKbn Test Case
 */
class ShuugyouShubetuKbnTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.shuugyou_shubetu_kbn',
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
		$this->ShuugyouShubetuKbn = ClassRegistry::init('ShuugyouShubetuKbn');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ShuugyouShubetuKbn);

		parent::tearDown();
	}

}
