<?php
/**
 * BumonMr Fixture
 */
class BumonMrFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10),
		'joui_bumon_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'kaisou' => array('type' => 'float', 'null' => true, 'default' => null),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30),
		'ryakushou' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10),
		'kana_mei' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
		'torihikisaki_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'koutin' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 13),
		'kaisi_bi' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'id_moto' => array('type' => 'integer', 'null' => true, 'default' => null),
		'kinsi_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'shuuryou_nitiji' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'sakusei_user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'kousin_user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			
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
			'joui_bumon_mr_id' => 1,
			'kaisou' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'ryakushou' => 'Lorem ip',
			'kana_mei' => 'Lorem ipsum dolor sit amet',
			'torihikisaki_mr_id' => 1,
			'koutin' => 'Lorem ipsum',
			'kaisi_bi' => '2015-09-14 11:29:39',
			'id_moto' => 1,
			'kinsi_flg' => 1,
			'shuuryou_nitiji' => '2015-09-14 11:29:39',
			'sakusei_user_id' => 1,
			'created' => '2015-09-14 11:29:39',
			'kousin_user_id' => 1,
			'updated' => '2015-09-14 11:29:39'
		),
	);

}
