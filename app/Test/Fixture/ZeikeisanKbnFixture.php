<?php
/**
 * ZeikeisanKbn Fixture
 */
class ZeikeisanKbnFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'code' => array('type' => 'integer', 'null' => true, 'default' => null),
		'utizei_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'soukei_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'cyousei_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'tenyuuryoku_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'menzei_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20),
		'ryakugou' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2),
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
			'code' => 1,
			'utizei_flg' => 1,
			'soukei_flg' => 1,
			'cyousei_flg' => 1,
			'tenyuuryoku_flg' => 1,
			'menzei_flg' => 1,
			'name' => 'Lorem ipsum dolor ',
			'ryakugou' => '',
			'kaisi_nitiji' => '2015-10-17 13:53:49',
			'id_moto' => 1,
			'kinsi_flg' => 1,
			'shuuryou_nitiji' => '2015-10-17 13:53:49',
			'sakusei_user_id' => 1,
			'created' => '2015-10-17 13:53:49',
			'kousin_user_id' => 1,
			'updated' => '2015-10-17 13:53:49'
		),
	);

}
