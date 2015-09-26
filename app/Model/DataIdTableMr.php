<?php
App::uses('AppModel', 'Model');
/**
 * DataIdTableMr Model
 *
 * @property JournalKbn $JournalKbn
 */
class DataIdTableMr extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'JournalKbn' => array(
			'className' => 'JournalKbn',
			'foreignKey' => 'data_id_table_mr_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
