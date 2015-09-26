<?php
/**
 * JuhacchuuMeisaiDt Fixture
 */
class JuhacchuuMeisaiDtFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'juhacchuu_dt_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'juchuu_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'gyou_bangou' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hinmoku_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hinmoku_mei' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'lot' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'suu' => array('type' => 'float', 'null' => true, 'default' => null),
		'tanni_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'suu2' => array('type' => 'float', 'null' => true, 'default' => null),
		'tanni_mr2_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tanka_iti' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tanka' => array('type' => 'float', 'null' => true, 'default' => null),
		'utizei_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'kingaku' => array('type' => 'float', 'null' => true, 'default' => null),
		'shouhizei_ritu' => array('type' => 'float', 'null' => true, 'default' => null),
		'nouki' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'bikou' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 60),
		'basho_tana_souko_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'nouhin_zumi_suu' => array('type' => 'float', 'null' => true, 'default' => null),
		'nouhin_zumi_suu2' => array('type' => 'float', 'null' => true, 'default' => null),
		'youi_zumi_suu' => array('type' => 'float', 'null' => true, 'default' => null),
		'youi_zumi_suu2' => array('type' => 'float', 'null' => true, 'default' => null),
		'kakunin_zumi_suu' => array('type' => 'float', 'null' => true, 'default' => null),
		'kakunin_zumi_suu2' => array('type' => 'float', 'null' => true, 'default' => null),
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
			'juhacchuu_dt_id' => 1,
			'juchuu_flg' => 1,
			'gyou_bangou' => 1,
			'hinmoku_mr_id' => 1,
			'hinmoku_mei' => 'Lorem ipsum dolor sit amet',
			'lot' => 'Lorem ipsum dolor sit amet',
			'suu' => 1,
			'tanni_mr_id' => 1,
			'suu2' => 1,
			'tanni_mr2_id' => 1,
			'tanka_iti' => 1,
			'tanka' => 1,
			'utizei_flg' => 1,
			'kingaku' => 1,
			'shouhizei_ritu' => 1,
			'nouki' => '2015-09-26 08:48:24',
			'bikou' => 'Lorem ipsum dolor sit amet',
			'basho_tana_souko_mr_id' => 1,
			'nouhin_zumi_suu' => 1,
			'nouhin_zumi_suu2' => 1,
			'youi_zumi_suu' => 1,
			'youi_zumi_suu2' => 1,
			'kakunin_zumi_suu' => 1,
			'kakunin_zumi_suu2' => 1,
			'kanryou_flg' => 1,
			'order_dt_id' => 1,
			'juchuu_meisai_dt_id' => 1,
			'kaisi_nitiji' => '2015-09-26 08:48:24',
			'id_moto' => 1,
			'kinsi_flg' => 1,
			'shuuryou_nitiji' => '2015-09-26 08:48:24',
			'sakusei_user_id' => 1,
			'created' => '2015-09-26 08:48:24',
			'kousin_user_id' => 1,
			'updated' => '2015-09-26 08:48:24'
		),
	);

}
