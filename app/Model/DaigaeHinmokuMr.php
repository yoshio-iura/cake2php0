<?php
App::uses('AppModel', 'Model');
/**
 * DaigaeHinmokuMr Model
 *
 * @property HinmokuMr $HinmokuMr
 * @property DaikaeHinmokuMr $DaikaeHinmokuMr
 */
class DaigaeHinmokuMr extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'hinmoku_mr_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'HinmokuMr' => array(
			'className' => 'HinmokuMr',
			'foreignKey' => 'hinmoku_mr_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DaikaeHinmokuMr' => array(
			'className' => 'HinmokuMr',
			'foreignKey' => 'daikae_hinmoku_mr_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
