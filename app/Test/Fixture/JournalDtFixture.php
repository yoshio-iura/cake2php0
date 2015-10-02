<?php
/**
 * JournalDt Fixture
 */
class JournalDtFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'nichiji' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'journal_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'data_ids' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hinmoku_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hinmoku_mei' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 60),
		'lot' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 80),
		'basho_tana_souko_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'torihikisaki_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'suu' => array('type' => 'float', 'null' => true, 'default' => null),
		'tanni_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'suu2' => array('type' => 'float', 'null' => true, 'default' => null),
		'tanni_mr2_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tanka_iti' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tanka' => array('type' => 'float', 'null' => true, 'default' => null),
		'utizei_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'zeiritu' => array('type' => 'float', 'null' => true, 'default' => null),
		'zeikomi_kingaku' => array('type' => 'float', 'null' => true, 'default' => null),
		'data_suu' => array('type' => 'float', 'null' => true, 'default' => null),
		'data_suu2' => array('type' => 'float', 'null' => true, 'default' => null),
		'zaiko_suu' => array('type' => 'float', 'null' => true, 'default' => null),
		'zaiko_suu2' => array('type' => 'float', 'null' => true, 'default' => null),
		'bikou' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 240),
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
			'nichiji' => '2015-09-28 19:40:20',
			'journal_kbn_id' => 1,
			'data_ids' => 1,
			'hinmoku_mr_id' => 1,
			'hinmoku_mei' => 'Lorem ipsum dolor sit amet',
			'lot' => 'Lorem ipsum dolor sit amet',
			'basho_tana_souko_mr_id' => 1,
			'torihikisaki_mr_id' => 1,
			'suu' => 1,
			'tanni_mr_id' => 1,
			'suu2' => 1,
			'tanni_mr2_id' => 1,
			'tanka_iti' => 1,
			'tanka' => 1,
			'utizei_flg' => 1,
			'zeiritu' => 1,
			'zeikomi_kingaku' => 1,
			'data_suu' => 1,
			'data_suu2' => 1,
			'zaiko_suu' => 1,
			'zaiko_suu2' => 1,
			'bikou' => 'Lorem ipsum dolor sit amet',
			'id_moto' => 1,
			'kinsi_flg' => 1,
			'shuuryou_nitiji' => '2015-09-28 19:40:20',
			'sakusei_user_id' => 1,
			'created' => '2015-09-28 19:40:20',
			'kousin_user_id' => 1,
			'updated' => '2015-09-28 19:40:20'
		),
	);

}
