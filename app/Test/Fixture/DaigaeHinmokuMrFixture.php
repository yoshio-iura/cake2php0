<?php
/**
 * DaigaeHinmokuMr Fixture
 */
class DaigaeHinmokuMrFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'hinmoku_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'daikae_hinmoku_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'yuusen_junni' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'daikae_hinmoku_mr_id' => 1,
			'yuusen_junni' => 1,
			'kaisi_nitiji' => '2015-09-17 08:27:34',
			'id_moto' => 1,
			'kinsi_flg' => 1,
			'shuuryou_nitiji' => '2015-09-17 08:27:34',
			'sakusei_user_id' => 1,
			'created' => '2015-09-17 08:27:34',
			'kousin_user_id' => 1,
			'updated' => '2015-09-17 08:27:34'
		),
	);

}
