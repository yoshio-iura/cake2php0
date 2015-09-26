<?php
/**
 * JournalKbn Fixture
 */
class JournalKbnFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'journal_dai_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'data_id_table_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'zaiko_zougen_fugou' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'code' => 'Lore',
			'name' => 'Lorem ipsum dolor sit amet',
			'journal_dai_kbn_id' => 1,
			'data_id_table_mr_id' => 1,
			'zaiko_zougen_fugou' => 1,
			'kaisi_nitiji' => '2015-09-26 09:01:00',
			'id_moto' => 1,
			'kinsi_flg' => 1,
			'shuuryou_nitiji' => '2015-09-26 09:01:00',
			'sakusei_user_id' => 1,
			'created' => '2015-09-26 09:01:00',
			'kousin_user_id' => 1,
			'updated' => '2015-09-26 09:01:00'
		),
	);

}
