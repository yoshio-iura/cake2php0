<?php
/**
 * JuhacchuuDt Fixture
 */
class JuhacchuuDtFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10),
		'bi' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'torihikisaki_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'bumon_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'nouki' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'bikou' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 240),
		'juchuu_dt_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'basho_tana_souko_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'kingaku_goukei' => array('type' => 'integer', 'null' => true, 'default' => null),
		'shouhizei_kingaku' => array('type' => 'integer', 'null' => true, 'default' => null),
		'utizei_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'matome_kazei_flg' => array('type' => 'boolean', 'null' => true, 'default' => null),
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
			'code' => 'Lorem ip',
			'bi' => '2015-09-26 08:45:35',
			'torihikisaki_mr_id' => 1,
			'user_id' => 1,
			'bumon_mr_id' => 1,
			'nouki' => '2015-09-26 08:45:35',
			'bikou' => 'Lorem ipsum dolor sit amet',
			'juchuu_dt_id' => 1,
			'basho_tana_souko_mr_id' => 1,
			'kingaku_goukei' => 1,
			'shouhizei_kingaku' => 1,
			'utizei_flg' => 1,
			'matome_kazei_flg' => 1,
			'kaisi_nitiji' => '2015-09-26 08:45:35',
			'id_moto' => 1,
			'kinsi_flg' => 1,
			'shuuryou_nitiji' => '2015-09-26 08:45:35',
			'sakusei_user_id' => 1,
			'created' => '2015-09-26 08:45:35',
			'kousin_user_id' => 1,
			'updated' => '2015-09-26 08:45:35'
		),
	);

}
