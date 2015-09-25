<?php
/**
 * HinmokuMr Fixture
 */
class HinmokuMrFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'kana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 80),
		'seisiki_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 240),
		'maker' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'kataban' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'lot' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 80),
		'hansuu' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20),
		'iroban' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20),
		'iromei' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'iro_bikou' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 80),
		'tanni_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'dai2_tanni_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tanni_iti' => array('type' => 'integer', 'null' => true, 'default' => null),
		'kazei_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'kikaku1' => array('type' => 'float', 'null' => true, 'default' => null),
		'kikaku2' => array('type' => 'float', 'null' => true, 'default' => null),
		'kikaku3' => array('type' => 'float', 'null' => true, 'default' => null),
		'kikaku4' => array('type' => 'float', 'null' => true, 'default' => null),
		'kikaku5' => array('type' => 'float', 'null' => true, 'default' => null),
		'hinmoku_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hinmoku_bunrui1_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hinmoku_bunrui2_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hinmoku_bunrui3_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hinmoku_bunrui4_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hinmoku_bunrui5_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tanka1' => array('type' => 'float', 'null' => true, 'default' => null),
		'tanka2' => array('type' => 'float', 'null' => true, 'default' => null),
		'tanka3' => array('type' => 'float', 'null' => true, 'default' => null),
		'tanka4' => array('type' => 'float', 'null' => true, 'default' => null),
		'tanka5' => array('type' => 'float', 'null' => true, 'default' => null),
		'genka1' => array('type' => 'float', 'null' => true, 'default' => null),
		'genka2' => array('type' => 'float', 'null' => true, 'default' => null),
		'genka3' => array('type' => 'float', 'null' => true, 'default' => null),
		'genka4' => array('type' => 'float', 'null' => true, 'default' => null),
		'genka5' => array('type' => 'float', 'null' => true, 'default' => null),
		'hyouka_houhou' => array('type' => 'integer', 'null' => true, 'default' => null),
		'anzen_zaiko_suu' => array('type' => 'float', 'null' => true, 'default' => null),
		'lead_time' => array('type' => 'float', 'null' => true, 'default' => null),
		'torihikisaki_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'souko_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'zaiko_kanri_taishou_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'zaiko_hikiate_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'bikou' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1000),
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
			'code' => 'Lorem ipsum dolor ',
			'name' => 'Lorem ipsum dolor sit amet',
			'kana' => 'Lorem ipsum dolor sit amet',
			'seisiki_name' => 'Lorem ipsum dolor sit amet',
			'maker' => 'Lorem ipsum dolor sit amet',
			'kataban' => 'Lorem ipsum dolor sit amet',
			'lot' => 'Lorem ipsum dolor sit amet',
			'hansuu' => 'Lorem ipsum dolor ',
			'iroban' => 'Lorem ipsum dolor ',
			'iromei' => 'Lorem ipsum dolor sit amet',
			'iro_bikou' => 'Lorem ipsum dolor sit amet',
			'tanni_mr_id' => 1,
			'dai2_tanni_mr_id' => 1,
			'tanni_iti' => 1,
			'kazei_kbn_id' => 1,
			'kikaku1' => 1,
			'kikaku2' => 1,
			'kikaku3' => 1,
			'kikaku4' => 1,
			'kikaku5' => 1,
			'hinmoku_kbn_id' => 1,
			'hinmoku_bunrui1_kbn_id' => 1,
			'hinmoku_bunrui2_kbn_id' => 1,
			'hinmoku_bunrui3_kbn_id' => 1,
			'hinmoku_bunrui4_kbn_id' => 1,
			'hinmoku_bunrui5_kbn_id' => 1,
			'tanka1' => 1,
			'tanka2' => 1,
			'tanka3' => 1,
			'tanka4' => 1,
			'tanka5' => 1,
			'genka1' => 1,
			'genka2' => 1,
			'genka3' => 1,
			'genka4' => 1,
			'genka5' => 1,
			'hyouka_houhou' => 1,
			'anzen_zaiko_suu' => 1,
			'lead_time' => 1,
			'torihikisaki_mr_id' => 1,
			'souko_mr_id' => 1,
			'zaiko_kanri_taishou_flg' => 1,
			'zaiko_hikiate_flg' => 1,
			'bikou' => 'Lorem ipsum dolor sit amet',
			'kaisi_nitiji' => '2015-09-17 08:24:02',
			'id_moto' => 1,
			'kinsi_flg' => 1,
			'shuuryou_nitiji' => '2015-09-17 08:24:02',
			'sakusei_user_id' => 1,
			'created' => '2015-09-17 08:24:02',
			'kousin_user_id' => 1,
			'updated' => '2015-09-17 08:24:02'
		),
	);

}
