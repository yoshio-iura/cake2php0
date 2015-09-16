<?php
App::uses('BumonMr', 'Model');

/**
 * BumonMr Test Case
 */
class BumonMrTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bumon_mr',
		'app.user',
		'app.thema_mr',
		'app.torihikisaki_mr',
		'app.shuugyou_bi_mr',
		'app.group_oya_torihikisaki_mr',
		'app.siiresaki_oya_torihikisaki_mr',
		'app.seikyuu_torihikisaki_mr',
		'app.kokyaku_oya_torihikisaki_mr',
		'app.shain_kazku_daihyou_torihikisaki_mr',
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
		$this->BumonMr = ClassRegistry::init('BumonMr');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BumonMr);

		parent::tearDown();
	}

}
