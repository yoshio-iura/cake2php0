<?php
/**
 * SeikyuuMeisaiDt Fixture
 */
class SeikyuuMeisaiDtFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'seikyuu_dt_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'uriage_dt_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'uriage_meisai_dt_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'seikyuu_dt_id' => 1,
			'uriage_dt_id' => 1,
			'uriage_meisai_dt_id' => 1,
			'kaisi_nitiji' => '2015-10-05 09:22:51',
			'id_moto' => 1,
			'kinsi_flg' => 1,
			'shuuryou_nitiji' => '2015-10-05 09:22:51',
			'sakusei_user_id' => 1,
			'created' => '2015-10-05 09:22:51',
			'kousin_user_id' => 1,
			'updated' => '2015-10-05 09:22:51'
		),
	);

}
