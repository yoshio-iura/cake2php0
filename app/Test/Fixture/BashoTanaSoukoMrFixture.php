<?php
/**
 * BashoTanaSoukoMr Fixture
 */
class BashoTanaSoukoMrFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'joui_basho_tana_souko_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'torihikisaki_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'bumon_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'palet' => array('type' => 'integer', 'null' => true, 'default' => null),
		'retu' => array('type' => 'integer', 'null' => true, 'default' => null),
		'taka' => array('type' => 'integer', 'null' => true, 'default' => null),
		'oku' => array('type' => 'integer', 'null' => true, 'default' => null),
		'shuukei_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'souko_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'code' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'joui_basho_tana_souko_mr_id' => 1,
			'torihikisaki_mr_id' => 1,
			'bumon_mr_id' => 1,
			'palet' => 1,
			'retu' => 1,
			'taka' => 1,
			'oku' => 1,
			'shuukei_flg' => 1,
			'souko_kbn_id' => 1,
			'kaisi_nitiji' => '2015-09-17 12:33:30',
			'id_moto' => 1,
			'kinsi_flg' => 1,
			'shuuryou_nitiji' => '2015-09-17 12:33:30',
			'sakusei_user_id' => 1,
			'created' => '2015-09-17 12:33:30',
			'kousin_user_id' => 1,
			'updated' => '2015-09-17 12:33:30'
		),
	);

}
