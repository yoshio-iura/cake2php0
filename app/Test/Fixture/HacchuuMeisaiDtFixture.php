<?php
/**
 * HacchuuMeisaiDt Fixture
 */
class HacchuuMeisaiDtFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'hacchuu_dt_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'gyou_bangou' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hinmoku_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hinmoku_mei' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'suu' => array('type' => 'float', 'null' => true, 'default' => null),
		'tanni_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'suu2' => array('type' => 'float', 'null' => true, 'default' => null),
		'tanni_mr2_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tanka_iti' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tanka' => array('type' => 'float', 'null' => true, 'default' => null),
		'siire_tanka' => array('type' => 'float', 'null' => true, 'default' => null),
		'utizei_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'kingaku' => array('type' => 'float', 'null' => true, 'default' => null),
		'shouhizei_ritu' => array('type' => 'float', 'null' => true, 'default' => null),
		'ukeire_yotei_bi' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'bikou' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 60),
		'basho_tana_souko_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'nyuuka_zumi_suu' => array('type' => 'float', 'null' => true, 'default' => null),
		'nyuuka_zumi_suu2' => array('type' => 'float', 'null' => true, 'default' => null),
		'kensa_zumi_suu' => array('type' => 'float', 'null' => true, 'default' => null),
		'kensa_zumi_suu2' => array('type' => 'float', 'null' => true, 'default' => null),
		'kenshuu_zumi_suu' => array('type' => 'float', 'null' => true, 'default' => null),
		'kenshuu_zumi_suu2' => array('type' => 'float', 'null' => true, 'default' => null),
		'kanryou_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'order_dt_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'juchuu_meisai_dt_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'hacchuu_dt_id' => 1,
			'gyou_bangou' => 1,
			'hinmoku_mr_id' => 1,
			'hinmoku_mei' => 'Lorem ipsum dolor sit amet',
			'suu' => 1,
			'tanni_mr_id' => 1,
			'suu2' => 1,
			'tanni_mr2_id' => 1,
			'tanka_iti' => 1,
			'tanka' => 1,
			'siire_tanka' => 1,
			'utizei_flg' => 1,
			'kingaku' => 1,
			'shouhizei_ritu' => 1,
			'ukeire_yotei_bi' => '2015-09-18 22:56:38',
			'bikou' => 'Lorem ipsum dolor sit amet',
			'basho_tana_souko_mr_id' => 1,
			'nyuuka_zumi_suu' => 1,
			'nyuuka_zumi_suu2' => 1,
			'kensa_zumi_suu' => 1,
			'kensa_zumi_suu2' => 1,
			'kenshuu_zumi_suu' => 1,
			'kenshuu_zumi_suu2' => 1,
			'kanryou_flg' => 1,
			'order_dt_id' => 1,
			'juchuu_meisai_dt_id' => 1,
			'kaisi_nitiji' => '2015-09-18 22:56:38',
			'id_moto' => 1,
			'kinsi_flg' => 1,
			'shuuryou_nitiji' => '2015-09-18 22:56:38',
			'sakusei_user_id' => 1,
			'created' => '2015-09-18 22:56:38',
			'kousin_user_id' => 1,
			'updated' => '2015-09-18 22:56:38'
		),
	);

}
