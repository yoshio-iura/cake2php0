<?php
/**
 * History Fixture
 */
class HistoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'system' => array('type' => 'string', 'null' => false, 'length' => 64),
		'level' => array('type' => 'string', 'null' => false, 'length' => 6),
		'client' => array('type' => 'string', 'null' => false, 'length' => 15),
		'message' => array('type' => 'string', 'null' => false, 'length' => 512),
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
			'created' => '2015-10-27 08:55:27',
			'user_id' => 1,
			'system' => 'Lorem ipsum dolor sit amet',
			'level' => 'Lore',
			'client' => 'Lorem ipsum d',
			'message' => 'Lorem ipsum dolor sit amet'
		),
	);

}
