<?php
App::uses('JournalKbn', 'Model');

/**
 * JournalKbn Test Case
 */
class JournalKbnTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.journal_kbn',
		'app.journal_dai_kbn',
		'app.data_table_mr',
		'app.sakusei_user',
		'app.kousin_user',
		'app.journal_dt',
		'app.data',
		'app.hinmoku_mr',
		'app.tanni_mr',
		'app.hinmoku_kbn',
		'app.kazei_kbn',
		'app.hinmoku_bunrui1_kbn',
		'app.hinmoku_bunrui2_kbn',
		'app.hinmoku_bunrui3_kbn',
		'app.hinmoku_bunrui4_kbn',
		'app.hinmoku_bunrui5_kbn',
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
		'app.seikyuusaki_mr',
		'app.kake_genkin_kbn',
		'app.siiresaki_mr',
		'app.simebi_kbn',
		'app.siharai_tuki_kbn',
		'app.siharaibi_kbn',
		'app.siharai_houhou_kbn',
		'app.yokin_shurui_kbn',
		'app.kouza_mr',
		'app.kouza_kankei_kbn',
		'app.furikomi_futan_kbn',
		'app.furikomi_houhou_kbn',
		'app.basho_tana_souko_mr',
		'app.souko_kbn',
		'app.tanni_mr2'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JournalKbn = ClassRegistry::init('JournalKbn');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JournalKbn);

		parent::tearDown();
	}

}
