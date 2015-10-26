<?php
/**
 * SeikyuuDt Fixture
 */
class SeikyuuDtFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'bi' => array('type' => 'date', 'null' => true, 'default' => null),
		'torihikisaki_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'zenkai_nyuukin_gaku' => array('type' => 'float', 'null' => true, 'default' => null),
		'tougetu_uriage_gaku' => array('type' => 'float', 'null' => true, 'default' => null),
		'tougetu_nyuukin_gaku' => array('type' => 'float', 'null' => true, 'default' => null),
		'tougetu_seikyuu_gaku' => array('type' => 'float', 'null' => true, 'default' => null),
		'shouhizei_kingaku' => array('type' => 'float', 'null' => true, 'default' => null),
		'seikyuu_zeikomi_kingaku' => array('type' => 'float', 'null' => true, 'default' => null),
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
			'bi' => '2015-10-05',
			'torihikisaki_mr_id' => 1,
			'zenkai_nyuukin_gaku' => 1,
			'tougetu_uriage_gaku' => 1,
			'tougetu_nyuukin_gaku' => 1,
			'tougetu_seikyuu_gaku' => 1,
			'shouhizei_kingaku' => 1,
			'seikyuu_zeikomi_kingaku' => 1,
			'kaisi_nitiji' => '2015-10-05 09:22:41',
			'id_moto' => 1,
			'kinsi_flg' => 1,
			'shuuryou_nitiji' => '2015-10-05 09:22:41',
			'sakusei_user_id' => 1,
			'created' => '2015-10-05 09:22:41',
			'kousin_user_id' => 1,
			'updated' => '2015-10-05 09:22:41'
		),
	);

}
