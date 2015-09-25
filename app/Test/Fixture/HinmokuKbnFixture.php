<?php
/**
 * HinmokuKbn Fixture
 */
class HinmokuKbnFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20),
		'tanni_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'dai2_tanni_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'suu_shoushu_keta1' => array('type' => 'integer', 'null' => true, 'default' => null),
		'suu_shoushu_keta2' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tanka_shoushu_keta1' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tanka_shoushu_keta2' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tanka_iti' => array('type' => 'integer', 'null' => true, 'default' => null),
		'zaiko_kanri_taishou_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
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
			'tanni_mr_id' => 1,
			'dai2_tanni_mr_id' => 1,
			'suu_shoushu_keta1' => 1,
			'suu_shoushu_keta2' => 1,
			'tanka_shoushu_keta1' => 1,
			'tanka_shoushu_keta2' => 1,
			'tanka_iti' => 1,
			'zaiko_kanri_taishou_flg' => 1,
			'kaisi_nitiji' => '2015-09-17 04:25:39',
			'id_moto' => 1,
			'kinsi_flg' => 1,
			'shuuryou_nitiji' => '2015-09-17 04:25:39',
			'sakusei_user_id' => 1,
			'created' => '2015-09-17 04:25:39',
			'kousin_user_id' => 1,
			'updated' => '2015-09-17 04:25:39'
		),
	);

}
