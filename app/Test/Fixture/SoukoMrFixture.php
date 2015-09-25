<?php
/**
 * SoukoMr Fixture
 */
class SoukoMrFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'souko_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'bumon_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'kaisi_bi' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'torihikisaki_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'souko_kbn_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'bumon_mr_id' => 1,
			'kaisi_bi' => '2015-09-16 13:26:53',
			'torihikisaki_mr_id' => 1,
			'kaisi_nitiji' => '2015-09-16 13:26:53',
			'id_moto' => 1,
			'kinsi_flg' => 1,
			'shuuryou_nitiji' => '2015-09-16 13:26:53',
			'sakusei_user_id' => 1,
			'created' => '2015-09-16 13:26:53',
			'kousin_user_id' => 1,
			'updated' => '2015-09-16 13:26:53'
		),
	);

}
