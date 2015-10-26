<?php
/**
 * SiireUriageMeisaiDt Fixture
 */
class SiireUriageMeisaiDtFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'siire_uriage_dt_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'gyou_bangou' => array('type' => 'integer', 'null' => true, 'default' => null),
		'juhacchuu_meisai_dt_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hinmoku_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hinmoku_mei' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'lot' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'basho_tana_souko_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'suu' => array('type' => 'float', 'null' => true, 'default' => null),
		'tanni_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'suu2' => array('type' => 'float', 'null' => true, 'default' => null),
		'tanni_mr2_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tanka_iti' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tanka' => array('type' => 'float', 'null' => true, 'default' => null),
		'kazei_kbn_id' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'kingaku' => array('type' => 'float', 'null' => true, 'default' => null),
		'shouhizei_ritu' => array('type' => 'float', 'null' => true, 'default' => null),
		'nebiki_kingaku' => array('type' => 'float', 'null' => true, 'default' => null),
		'akakuro_moto_meisai_dt_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'seikyuubi' => array('type' => 'date', 'null' => true, 'default' => null),
		'seikyuu_dt_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'seikyuu_tien_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'siire_uriage_dt_id' => 1,
			'gyou_bangou' => 1,
			'juhacchuu_meisai_dt_id' => 1,
			'hinmoku_mr_id' => 1,
			'hinmoku_mei' => 'Lorem ipsum dolor sit amet',
			'lot' => 'Lorem ipsum dolor sit amet',
			'basho_tana_souko_mr_id' => 1,
			'suu' => 1,
			'tanni_mr_id' => 1,
			'suu2' => 1,
			'tanni_mr2_id' => 1,
			'tanka_iti' => 1,
			'tanka' => 1,
			'kazei_kbn_id' => 1,
			'kingaku' => 1,
			'shouhizei_ritu' => 1,
			'nebiki_kingaku' => 1,
			'akakuro_moto_meisai_dt_id' => 1,
			'seikyuubi' => '2015-10-14',
			'seikyuu_dt_id' => 1,
			'seikyuu_tien_kbn_id' => 1,
			'kaisi_nitiji' => '2015-10-14 19:31:39',
			'id_moto' => 1,
			'kinsi_flg' => 1,
			'shuuryou_nitiji' => '2015-10-14 19:31:39',
			'sakusei_user_id' => 1,
			'created' => '2015-10-14 19:31:39',
			'kousin_user_id' => 1,
			'updated' => '2015-10-14 19:31:39'
		),
	);

}
