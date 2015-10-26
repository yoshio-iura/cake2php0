<?php
App::uses('AppModel', 'Model');
/**
 * ZaikoFusokuHyoujiVw Model
 *
 * @property TanniMr $TanniMr
 * @property HinsituKbn $HinsituKbn
 */
class ZaikoFusokuHyoujiVw extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'hinmoku_mr_id';

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
		'TanniMr' => array(
			'className' => 'TanniMr',
			'foreignKey' => 'tanni_mr_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'HinsituKbn' => array(
			'className' => 'HinsituKbn',
			'foreignKey' => 'hinsitu_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
