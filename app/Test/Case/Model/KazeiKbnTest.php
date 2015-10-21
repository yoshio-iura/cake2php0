<?php
App::uses('KazeiKbn', 'Model');

/**
 * KazeiKbn Test Case
 */
class KazeiKbnTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kazei_kbn',
		'app.hinmoku_mr',
		'app.tanni_mr',
		'app.hinmoku_kbn',
		'app.hinmoku_bunrui1_kbn',
		'app.zaiko_dt',
		'app.basho_tana_souko_mr',
		'app.torihikisaki_mr',
		'app.keishou_kbn',
		'app.shuugyou_pattern_mr',
		'app.shuugyou_bi_mr',
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
		'app.kake_genkin_kbn',
		'app.seikyuusaki_mr',
		'app.simebi_kbn',
		'app.siiresaki_mr',
		'app.siharai_tuki_kbn',
		'app.siharai_houhou_kbn',
		'app.yokin_shurui_kbn',
		'app.kouza_mr',
		'app.kouza_kankei_kbn',
		'app.furikomi_futan_kbn',
		'app.furikomi_houhou_kbn',
		'app.siharaibi_kbn',
		'app.journal_dt',
		'app.journal_kbn',
		'app.journal_dai_kbn',
		'app.journal_kongen_mr',
		'app.juhacchuu_dt',
		'app.zeikeisan_kbn',
		'app.siire_uriage_dt',
		'app.akakuro_urigake_dt',
		'app.siire_uriage_meisai_dt',
		'app.juhacchuu_meisai_dt',
		'app.order_dt',
		'app.sikyuu_meisai_dt',
		'app.akakuro_moto_meisai_dt',
		'app.seikyuu_dt',
		'app.sakusei_user',
		'app.kousin_user',
		'app.seikyuu_meisai_dt',
		'app.uriage_dt',
		'app.uriage_meisai_dt',
		'app.seikyuu_tien_kbn',
		'app.nyuukin_dt',
		'app.nyuukin_kouza',
		'app.souko_kbn',
		'app.shoyuusha_kbn',
		'app.hinsitu_kbn',
		'app.hinmoku_bunrui2_kbn',
		'app.hinmoku_bunrui3_kbn',
		'app.hinmoku_bunrui4_kbn',
		'app.hinmoku_bunrui5_kbn'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->KazeiKbn = ClassRegistry::init('KazeiKbn');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->KazeiKbn);

		parent::tearDown();
	}

}
