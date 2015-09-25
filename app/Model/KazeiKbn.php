<?php
App::uses('AppModel', 'Model');
/**
 * KazeiKbn Model
 *
 * @property HinmokuMr $HinmokuMr
 */
class KazeiKbn extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'HinmokuMr' => array(
			'className' => 'HinmokuMr',
			'foreignKey' => 'kazei_kbn_id',
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
