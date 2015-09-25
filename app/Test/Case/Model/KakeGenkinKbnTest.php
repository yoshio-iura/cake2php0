<?php
App::uses('KakeGenkinKbn', 'Model');

/**
 * KakeGenkinKbn Test Case
 */
class KakeGenkinKbnTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kake_genkin_kbn',
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
		'app.simebi_kbn',
		'app.siharai_tuki_kbn',
		'app.siharaibi_kbn',
		'app.siharai_houhou_kbn',
		'app.kouza_mr',
		'app.furikomi_futan_kbn',
		'app.yoshin_torihikisaki_mr',
		'app.siiresaki_mr',
		'app.yokin_shurui_kbn',
		'app.kouza_kankei_kbn',
		'app.furikomi_houhou_kbn'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->KakeGenkinKbn = ClassRegistry::init('KakeGenkinKbn');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->KakeGenkinKbn);

		parent::tearDown();
	}

}
