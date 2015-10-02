<?php
App::uses('AppModel', 'Model');
/**
 * HinmokuBunrui3Kbn Model
 *
 * @property SakuseiUser $SakuseiUser
 * @property KousinUser $KousinUser
 * @property HinmokuMr $HinmokuMr
 * @property ZaikoDt $ZaikoDt
 */
class HinmokuBunrui3Kbn extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'HinmokuMr' => array(
			'className' => 'HinmokuMr',
			'foreignKey' => 'hinmoku_bunrui3_kbn_id',
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
		'ZaikoDt' => array(
			'className' => 'ZaikoDt',
			'foreignKey' => 'hinmoku_bunrui3_kbn_id',
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
