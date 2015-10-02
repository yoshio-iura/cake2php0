<?php
App::uses('AppModel', 'Model');
/**
 * HinsituKbn Model
 *
 * @property HinmokuKbn $HinmokuKbn
 * @property ZaikoDt $ZaikoDt
 */
class HinsituKbn extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'HinmokuKbn' => array(
			'className' => 'HinmokuKbn',
			'foreignKey' => 'hinmoku_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ZaikoDt' => array(
			'className' => 'ZaikoDt',
			'foreignKey' => 'hinsitu_kbn_id',
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
