<?php
App::uses('TorihikisakiMr', 'Model');

/**
 * TorihikisakiMr Test Case
 */
class TorihikisakiMrTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.torihikisaki_mr',
		'app.shuugyou_bi_mr',
		'app.user',
		'app.bumon_mr',
		'app.thema_mr',
		'app.shokushu_mr',
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
		$this->TorihikisakiMr = ClassRegistry::init('TorihikisakiMr');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TorihikisakiMr);

		parent::tearDown();
	}

}
