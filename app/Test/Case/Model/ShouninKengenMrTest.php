<?php
App::uses('ShouninKengenMr', 'Model');

/**
 * ShouninKengenMr Test Case
 */
class ShouninKengenMrTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.shounin_kengen_mr',
		'app.user',
		'app.bumon_mr',
		'app.thema_mr',
		'app.torihikisaki_mr',
		'app.shuugyou_bi_mr',
		'app.group_oya_torihikisaki_mr',
		'app.siiresaki_oya_torihikisaki_mr',
		'app.seikyuu_torihikisaki_mr',
		'app.kokyaku_oya_torihikisaki_mr',
		'app.shain_kazku_daihyou_torihikisaki_mr',
		'app.shokushu_mr'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ShouninKengenMr = ClassRegistry::init('ShouninKengenMr');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ShouninKengenMr);

		parent::tearDown();
	}

}
