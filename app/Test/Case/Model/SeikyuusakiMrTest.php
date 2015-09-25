<?php
App::uses('SeikyuusakiMr', 'Model');

/**
 * SeikyuusakiMr Test Case
 */
class SeikyuusakiMrTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.seikyuusaki_mr',
		'app.torihikisaki_mr',
		'app.shuugyou_bi_mr',
		'app.shuugyou_pattern_mr',
		'app.shuugyou_kbn',
		'app.shuugyou_jikan_mr',
		'app.shuugyou_shubetu_kbn',
		'app.user',
		'app.bumon_mr',
		'app.thema_mr',
		'app.shokushu_kbn',
		'app.shounin_kengen_mr',
		'app.torihikisaki_bunrui1_kbn',
		'app.torihikisaki_bunrui2_kbn',
		'app.torihikisaki_bunrui3_kbn',
		'app.torihikisaki_bunrui4_kbn',
		'app.torihikisaki_bunrui5_kbn',
		'app.kaishuu_torihikisaki_mr',
		'app.kake_genkin_kbn',
		'app.simebi_kbn',
		'app.siharai_tuki_kbn',
		'app.siharaibi_kbn',
		'app.siharai_houhou_kbn',
		'app.kouza_mr',
		'app.furikomi_futan_kbn',
		'app.yoshin_torihikisaki_mr'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SeikyuusakiMr = ClassRegistry::init('SeikyuusakiMr');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SeikyuusakiMr);

		parent::tearDown();
	}

}
