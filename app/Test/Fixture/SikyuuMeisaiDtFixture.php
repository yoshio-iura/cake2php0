<?php
/**
 * SikyuuMeisaiDt Fixture
 */
class SikyuuMeisaiDtFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'juhacchuu_meisai_dt_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'gyou_bangou' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hinmoku_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hinmoku_mei' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 60),
		'tanka' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 60),
		'suu' => array('type' => 'float', 'null' => true, 'default' => null),
		'tanni_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'suu2' => array('type' => 'float', 'null' => true, 'default' => null),
		'tanni_mr2_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'zumi_suu' => array('type' => 'float', 'null' => true, 'default' => null),
		'zumi_suu2' => array('type' => 'float', 'null' => true, 'default' => null),
		'tanni_iti' => array('type' => 'integer', 'null' => true, 'default' => null),
		'shoyou_tanni' => array('type' => 'float', 'null' => true, 'default' => null),
		'hikiotosi_suu' => array('type' => 'float', 'null' => true, 'default' => null),
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
			'juhacchuu_meisai_dt_id' => 1,
			'gyou_bangou' => 1,
			'hinmoku_mr_id' => 1,
			'hinmoku_mei' => 'Lorem ipsum dolor sit amet',
			'tanka' => 'Lorem ipsum dolor sit amet',
			'suu' => 1,
			'tanni_mr_id' => 1,
			'suu2' => 1,
			'tanni_mr2_id' => 1,
			'zumi_suu' => 1,
			'zumi_suu2' => 1,
			'tanni_iti' => 1,
			'shoyou_tanni' => 1,
			'hikiotosi_suu' => 1,
			'kaisi_nitiji' => '2015-09-26 08:50:57',
			'id_moto' => 1,
			'kinsi_flg' => 1,
			'shuuryou_nitiji' => '2015-09-26 08:50:57',
			'sakusei_user_id' => 1,
			'created' => '2015-09-26 08:50:57',
			'kousin_user_id' => 1,
			'updated' => '2015-09-26 08:50:57'
		),
	);

}
