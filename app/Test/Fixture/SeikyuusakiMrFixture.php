<?php
/**
 * SeikyuusakiMr Fixture
 */
class SeikyuusakiMrFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'torihikisaki_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8),
		'kaishuu_torihikisaki_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'kake_genkin_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'simebi_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'siharai_tuki_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'siharaibi_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'siharai_houhou_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'kouza_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'furikomi_futan_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'yoshin_torihikisaki_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'yosin_gendo_gaku' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'torihikisaki_mr_id' => 1,
			'code' => 'Lorem ',
			'kaishuu_torihikisaki_mr_id' => 1,
			'kake_genkin_kbn_id' => 1,
			'simebi_kbn_id' => 1,
			'siharai_tuki_kbn_id' => 1,
			'siharaibi_kbn_id' => 1,
			'siharai_houhou_kbn_id' => 1,
			'kouza_mr_id' => 1,
			'furikomi_futan_kbn_id' => 1,
			'yoshin_torihikisaki_mr_id' => 1,
			'yosin_gendo_gaku' => 1,
			'kaisi_nitiji' => '2015-09-16 11:15:30',
			'id_moto' => 1,
			'kinsi_flg' => 1,
			'shuuryou_nitiji' => '2015-09-16 11:15:30',
			'sakusei_user_id' => 1,
			'created' => '2015-09-16 11:15:30',
			'kousin_user_id' => 1,
			'updated' => '2015-09-16 11:15:30'
		),
	);

}
