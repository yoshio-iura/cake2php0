<?php
/**
 * SiireUriageDt Fixture
 */
class SiireUriageDtFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'bi' => array('type' => 'date', 'null' => true, 'default' => null),
		'torihikisaki_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'shukka_torihikisaki_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'kituke_torihikisaki_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'sikiri_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'bumon_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'juhacchuu_dt_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'zeikeisan_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'kingaku_goukei' => array('type' => 'float', 'null' => true, 'default' => null),
		'shouhizei_kingaku' => array('type' => 'float', 'null' => true, 'default' => null),
		'bikou' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 240),
		'seikyuubi' => array('type' => 'date', 'null' => true, 'default' => null),
		'akakuro_urigake_dt_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'kaisi_nitiji' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'id_moto' => array('type' => 'integer', 'null' => true, 'default' => null),
		'kinsi_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'shuuryou_nitiji' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'sakusei_user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'kousin_user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
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
			'bi' => '2015-10-14',
			'torihikisaki_mr_id' => 1,
			'shukka_torihikisaki_mr_id' => 1,
			'kituke_torihikisaki_mr_id' => 1,
			'sikiri_flg' => 1,
			'user_id' => 1,
			'bumon_mr_id' => 1,
			'juhacchuu_dt_id' => 1,
			'zeikeisan_kbn_id' => 1,
			'kingaku_goukei' => 1,
			'shouhizei_kingaku' => 1,
			'bikou' => 'Lorem ipsum dolor sit amet',
			'seikyuubi' => '2015-10-14',
			'akakuro_urigake_dt_id' => 1,
			'kaisi_nitiji' => '2015-10-14 19:30:04',
			'id_moto' => 1,
			'kinsi_flg' => 1,
			'shuuryou_nitiji' => '2015-10-14 19:30:04',
			'sakusei_user_id' => 1,
			'created' => '2015-10-14 19:30:04',
			'kousin_user_id' => 1,
			'updated' => '2015-10-14 19:30:04'
		),
	);

}
