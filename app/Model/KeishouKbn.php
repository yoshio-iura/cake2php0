<?php
App::uses('AppModel', 'Model');
/**
 * KeishouKbn Model
 *
 * @property TorihikisakiMr $TorihikisakiMr
 */
class KeishouKbn extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'keishou';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'TorihikisakiMr' => array(
			'className' => 'TorihikisakiMr',
			'foreignKey' => 'keishou_kbn_id',
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
