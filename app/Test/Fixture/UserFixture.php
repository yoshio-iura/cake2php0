<?php
/**
 * User Fixture
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20),
		'kana_mei' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
		'kigou' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10),
		'bumon_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'mail_address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
		'username' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'password' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'thema_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'torihikisaki_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'shokushu_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'shounin_kengen_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'kaisi_nitiji' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'name' => 'Lorem ipsum dolor ',
			'kana_mei' => 'Lorem ipsum dolor sit amet',
			'kigou' => 'Lorem ip',
			'bumon_mr_id' => 1,
			'mail_address' => 'Lorem ipsum dolor sit amet',
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'thema_mr_id' => 1,
			'torihikisaki_mr_id' => 1,
			'shokushu_kbn_id' => 1,
			'shounin_kengen_mr_id' => 1,
			'kaisi_nitiji' => '2015-09-14 06:13:15',
			'id_moto' => 1,
			'kinsi_flg' => 1,
			'shuuryou_nitiji' => '2015-09-14 06:13:15',
			'sakusei_user_id' => 1,
			'created' => '2015-09-14 06:13:15',
			'kousin_user_id' => 1,
			'updated' => '2015-09-14 06:13:15'
		),
	);

}
