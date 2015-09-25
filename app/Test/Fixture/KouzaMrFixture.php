<?php
/**
 * KouzaMr Fixture
 */
class KouzaMrFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'ginkou_bangou' => array('type' => 'integer', 'null' => true, 'default' => null),
		'ginkou_mei' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'ginkou_kana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'honsiten_bangou' => array('type' => 'integer', 'null' => true, 'default' => null),
		'honsiten_mei' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'honsiten_kana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'yokin_shurui_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'kouza_bangou' => array('type' => 'integer', 'null' => true, 'default' => null),
		'kouza_meigi' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'kouza_meigi_kana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'bumon_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'ginkou_bangou' => 1,
			'ginkou_mei' => 'Lorem ipsum dolor sit amet',
			'ginkou_kana' => 'Lorem ipsum dolor sit amet',
			'honsiten_bangou' => 1,
			'honsiten_mei' => 'Lorem ipsum dolor sit amet',
			'honsiten_kana' => 'Lorem ipsum dolor sit amet',
			'yokin_shurui_kbn_id' => 1,
			'kouza_bangou' => 1,
			'kouza_meigi' => 'Lorem ipsum dolor sit amet',
			'kouza_meigi_kana' => 'Lorem ipsum dolor sit amet',
			'bumon_mr_id' => 1,
			'kaisi_nitiji' => '2015-09-16 11:22:35',
			'id_moto' => 1,
			'kinsi_flg' => 1,
			'shuuryou_nitiji' => '2015-09-16 11:22:35',
			'sakusei_user_id' => 1,
			'created' => '2015-09-16 11:22:35',
			'kousin_user_id' => 1,
			'updated' => '2015-09-16 11:22:35'
		),
	);

}
