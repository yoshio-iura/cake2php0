<?php
App::uses('AppModel', 'Model');
/**
 * KouzaKankeiKbn Model
 *
 * @property SiiresakiMr $SiiresakiMr
 */
class KouzaKankeiKbn extends AppModel {

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
		'SiiresakiMr' => array(
			'className' => 'SiiresakiMr',
			'foreignKey' => 'kouza_kankei_kbn_id',
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
