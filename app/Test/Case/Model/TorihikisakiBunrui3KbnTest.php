<?php
App::uses('TorihikisakiBunrui3Kbn', 'Model');

/**
 * TorihikisakiBunrui3Kbn Test Case
 */
class TorihikisakiBunrui3KbnTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.torihikisaki_bunrui3_kbn',
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
		'app.group_oya_torihikisaki_mr',
		'app.siiresaki_oya_torihikisaki_mr',
		'app.seikyuu_torihikisaki_mr',
		'app.kokyaku_oya_torihikisaki_mr',
		'app.shain_kazku_daihyou_torihikisaki_mr',
		'app.torihikisaki_bunrui1_kbn',
		'app.torihikisaki_bunrui2_kbn',
		'app.torihikisaki_bunrui4_kbn',
		'app.torihikisaki_bunrui5_kbn'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TorihikisakiBunrui3Kbn = ClassRegistry::init('TorihikisakiBunrui3Kbn');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TorihikisakiBunrui3Kbn);

		parent::tearDown();
	}

}
