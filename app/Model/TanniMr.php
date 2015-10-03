<?php
App::uses('AppModel', 'Model');
/**
 * TanniMr Model
 *
 * @property HinmokuKbn $HinmokuKbn
 * @property HinmokuMr $HinmokuMr
 */
class TanniMr extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'kigou';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'HinmokuKbn' => array(
			'className' => 'HinmokuKbn',
			'foreignKey' => 'tanni_mr_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'HinmokuMr' => array(
			'className' => 'HinmokuMr',
			'foreignKey' => 'tanni_mr_id',
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
