<?php
/**
 * ShuugyouJikanMr Fixture
 */
class ShuugyouJikanMrFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20),
		'jikoku_from' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'jikoku_to' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'shuugyou_shubetu_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'name' => 'Lorem ipsum dolor ',
			'jikoku_from' => '2015-09-15 07:55:23',
			'jikoku_to' => '2015-09-15 07:55:23',
			'shuugyou_shubetu_kbn_id' => 1,
			'kaisi_nitiji' => '2015-09-15 07:55:23',
			'id_moto' => 1,
			'kinsi_flg' => 1,
			'shuuryou_nitiji' => '2015-09-15 07:55:23',
			'sakusei_user_id' => 1,
			'created' => '2015-09-15 07:55:23',
			'kousin_user_id' => 1,
			'updated' => '2015-09-15 07:55:23'
		),
	);

}
