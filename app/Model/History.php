<?php
App::uses('AppModel', 'Model');
/**
 * History Model
 *
 * @property User $User
 */
class History extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'created';
	public $order = 'History.id DESC';
	public $actsAs = array('Search.Searchable');
	public $filterArgs = array(
		'user_id' => array('type' => 'value'),
		'gamen_page' => array('type' => 'like'),
		'from' => array('type' => 'value', 'field' => 'History.created >='),
		'to' => array('type' => 'value', 'field' => 'History.created <='),
	);


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
