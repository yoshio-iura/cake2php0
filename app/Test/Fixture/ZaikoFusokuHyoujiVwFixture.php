<?php
/**
 * ZaikoFusokuHyoujiVw Fixture
 */
class ZaikoFusokuHyoujiVwFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'hinmoku_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40),
		'tanni_mr_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hinsitu_kbn_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'anzen_zaiko_suu' => array('type' => 'float', 'null' => true, 'default' => null),
		'zaiko' => array('type' => 'float', 'null' => true, 'default' => null),
		'nouzan' => array('type' => 'float', 'null' => true, 'default' => null),
		'kafusoku' => array('type' => 'float', 'null' => true, 'default' => null),
		'chuuzan' => array('type' => 'float', 'null' => true, 'default' => null),
		'you_hachuu' => array('type' => 'float', 'null' => true, 'default' => null),
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
			'hinmoku_mr_id' => 1,
			'code' => 'Lorem ipsum dolor ',
			'name' => 'Lorem ipsum dolor sit amet',
			'tanni_mr_id' => 1,
			'hinsitu_kbn_id' => 1,
			'anzen_zaiko_suu' => 1,
			'zaiko' => 1,
			'nouzan' => 1,
			'kafusoku' => 1,
			'chuuzan' => 1,
			'you_hachuu' => 1
		),
	);

}
