<?php
App::uses('ShuugyouShubetuMr', 'Model');

/**
 * ShuugyouShubetuMr Test Case
 */
class ShuugyouShubetuMrTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.shuugyou_shubetu_mr',
		'app.shuugyou_bi_mr',
		'app.shuugyou_jikan_mr',
		'app.torihikisaki_mr',
		'app.user',
		'app.bumon_mr',
		'app.thema_mr',
		'app.shokushu_kbn',
		'app.shounin_kengen_mr',
		'app.group_oya_torihikisaki_mr',
		'app.siiresaki_oya_torihikisaki_mr',
		'app.seikyuu_torihikisaki_mr',
		'app.kokyaku_oya_torihikisaki_mr',
		'app.shain_kazku_daihyou_torihikisaki_mr'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ShuugyouShubetuMr = ClassRegistry::init('ShuugyouShubetuMr');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ShuugyouShubetuMr);

		parent::tearDown();
	}

}
