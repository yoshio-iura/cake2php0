<?php
/**
 * ZaikoDt Fixture
 */
class ZaikoDtFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'hinmoku_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'barcode' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'basho_tana_souko_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'shoyuusha_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'torihikisaki_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'seisan_sasizu_dt_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hojo_sasizu_dt_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hinmoku_mei' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 60),
		'maker' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'kataban' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20),
		'lot' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'hansuu' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10),
		'iroban' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10),
		'iromei' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20),
		'iro_bikou' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'tanni_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tanni_mr2_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tanni_iti' => array('type' => 'integer', 'null' => true, 'default' => null),
		'suu' => array('type' => 'float', 'null' => true, 'default' => null),
		'suu2' => array('type' => 'float', 'null' => true, 'default' => null),
		'hinshitu_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hinsitu_utiwake' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10),
		'saishuu_nyuuko_nitiji' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'saishuu_shukko_nitiji' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'juhacchuu_meisai_dt_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hikiate_juchuu_suu' => array('type' => 'float', 'null' => true, 'default' => null),
		'hinmoku_bunrui1_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hinmoku_bunrui2_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hinmoku_bunrui3_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'hinmoku_mr_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'barcode' => 'Lorem ipsum dolor sit amet',
			'basho_tana_souko_mr_id' => 1,
			'shoyuusha_kbn_id' => 1,
			'torihikisaki_mr_id' => 1,
			'seisan_sasizu_dt_id' => 1,
			'hojo_sasizu_dt_id' => 1,
			'hinmoku_mei' => 'Lorem ipsum dolor sit amet',
			'maker' => 'Lorem ipsum dolor sit amet',
			'kataban' => 'Lorem ipsum dolor ',
			'lot' => 'Lorem ipsum dolor sit amet',
			'hansuu' => 'Lorem ip',
			'iroban' => 'Lorem ip',
			'iromei' => 'Lorem ipsum dolor ',
			'iro_bikou' => 'Lorem ipsum dolor sit amet',
			'tanni_mr_id' => 1,
			'tanni_mr2_id' => 1,
			'tanni_iti' => 1,
			'suu' => 1,
			'suu2' => 1,
			'hinshitu_kbn_id' => 1,
			'hinsitu_utiwake' => 'Lorem ip',
			'saishuu_nyuuko_nitiji' => '2015-09-26 09:02:15',
			'saishuu_shukko_nitiji' => '2015-09-26 09:02:15',
			'juhacchuu_meisai_dt_id' => 1,
			'hikiate_juchuu_suu' => 1,
			'hinmoku_bunrui1_kbn_id' => 1,
			'hinmoku_bunrui2_kbn_id' => 1,
			'hinmoku_bunrui3_kbn_id' => 1,
			'kaisi_nitiji' => '2015-09-26 09:02:15',
			'id_moto' => 1,
			'kinsi_flg' => 1,
			'shuuryou_nitiji' => '2015-09-26 09:02:15',
			'sakusei_user_id' => 1,
			'created' => '2015-09-26 09:02:15',
			'kousin_user_id' => 1,
			'updated' => '2015-09-26 09:02:15'
		),
	);

}
