<?php
/**
 * ShuugyouBiMr Fixture
 */
class ShuugyouBiMrFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'shuugyou_pattern_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hiduke' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'shuugyou_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'shuugyou_jikan_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'bikou' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 60),
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
			'shuugyou_pattern_mr_id' => 1,
			'hiduke' => '2015-09-15 08:28:15',
			'shuugyou_kbn_id' => 1,
			'shuugyou_jikan_mr_id' => 1,
			'bikou' => 'Lorem ipsum dolor sit amet',
			'kaisi_nitiji' => '2015-09-15 08:28:15',
			'id_moto' => 1,
			'kinsi_flg' => 1,
			'shuuryou_nitiji' => '2015-09-15 08:28:15',
			'sakusei_user_id' => 1,
			'created' => '2015-09-15 08:28:15',
			'kousin_user_id' => 1,
			'updated' => '2015-09-15 08:28:15'
		),
	);

}
