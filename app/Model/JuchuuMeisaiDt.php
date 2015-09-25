<?php
App::uses('AppModel', 'Model');
/**
 * JuchuuMeisaiDt Model
 *
 * @property JuchuuDt $JuchuuDt
 * @property HinmokuMr $HinmokuMr
 * @property TanniMr $TanniMr
 * @property TanniMr2 $TanniMr2
 * @property HacchuuMeisaiDt $HacchuuMeisaiDt
 */
class JuchuuMeisaiDt extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'hinmoku_mei';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'JuchuuDt' => array(
			'className' => 'JuchuuDt',
			'foreignKey' => 'juchuu_dt_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'HinmokuMr' => array(
			'className' => 'HinmokuMr',
			'foreignKey' => 'hinmoku_mr_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TanniMr' => array(
			'className' => 'TanniMr',
			'foreignKey' => 'tanni_mr_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TanniMr2' => array(
			'className' => 'TanniMr',
			'foreignKey' => 'tanni_mr2_id',
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
		'HacchuuMeisaiDt' => array(
			'className' => 'HacchuuMeisaiDt',
			'foreignKey' => 'juchuu_meisai_dt_id',
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
