<?php
App::uses('AppModel', 'Model');
/**
 * ShoyuushaKbn Model
 *
 * @property SakuseiUser $SakuseiUser
 * @property KousinUser $KousinUser
 * @property ZaikoDt $ZaikoDt
 */
class ShoyuushaKbn extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ZaikoDt' => array(
			'className' => 'ZaikoDt',
			'foreignKey' => 'shoyuusha_kbn_id',
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
