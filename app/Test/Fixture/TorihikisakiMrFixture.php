<?php
/**
 * TorihikisakiMr Fixture
 */
class TorihikisakiMrFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8),
		'kaisi_bi' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'shuuryou_bi' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'mei_kana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'tantou_bumon' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'tantousha_mei' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'yuubin_bangou' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10),
		'todoufukenn' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4),
		'juusho1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30),
		'juusho2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30),
		'juusho3' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30),
		'tel' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 13),
		'fax' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 13),
		'shuugyou_bi_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'torihiki_kinsi_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'zatu_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'group_oya_torihikisaki_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'siiresaki_ｆｌｇ' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'siiresaki_oya_torihikisaki_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'kokyaku_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'seikyuu_torihikisaki_mr_id' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'shukkasaki_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'kokyaku_oya_torihikisaki_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'shain_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'shain_kazku_daihyou_torihikisaki_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'bikou' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250),
		'kaisi_nitiji' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'id_moto' => array('type' => 'integer', 'null' => true, 'default' => null),
		'kinsi_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'shuuryou_nitiji' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'sakusei_user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'kousin_user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'code' => 'Lorem ',
			'kaisi_bi' => '2015-09-14 05:05:50',
			'shuuryou_bi' => '2015-09-14 05:05:50',
			'name' => 'Lorem ipsum dolor sit amet',
			'mei_kana' => 'Lorem ipsum dolor sit amet',
			'tantou_bumon' => 'Lorem ipsum dolor sit amet',
			'tantousha_mei' => 'Lorem ipsum dolor sit amet',
			'yuubin_bangou' => 'Lorem ip',
			'todoufukenn' => 'Lo',
			'juusho1' => 'Lorem ipsum dolor sit amet',
			'juusho2' => 'Lorem ipsum dolor sit amet',
			'juusho3' => 'Lorem ipsum dolor sit amet',
			'tel' => 'Lorem ipsum',
			'fax' => 'Lorem ipsum',
			'shuugyou_bi_mr_id' => 1,
			'torihiki_kinsi_flg' => 1,
			'zatu_flg' => 1,
			'user_id' => 1,
			'group_oya_torihikisaki_mr_id' => 1,
			'siiresaki_ｆｌｇ' => 1,
			'siiresaki_oya_torihikisaki_mr_id' => 1,
			'kokyaku_flg' => 1,
			'seikyuu_torihikisaki_mr_id' => 1,
			'shukkasaki_flg' => 1,
			'kokyaku_oya_torihikisaki_mr_id' => 1,
			'shain_flg' => 1,
			'shain_kazku_daihyou_torihikisaki_mr_id' => 1,
			'bikou' => 'Lorem ipsum dolor sit amet',
			'kaisi_nitiji' => '2015-09-14 05:05:50',
			'id_moto' => 1,
			'kinsi_flg' => 1,
			'shuuryou_nitiji' => '2015-09-14 05:05:50',
			'sakusei_user_id' => 1,
			'created' => '2015-09-14 05:05:50',
			'kousin_user_id' => 1,
			'updated' => '2015-09-14 05:05:50'
		),
	);

}
