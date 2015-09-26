<?php
App::uses('AppModel', 'Model');
/**
 * SikyuuMeisaiDt Model
 *
 * @property JuhacchuuMeisaiDt $JuhacchuuMeisaiDt
 * @property HinmokuMr $HinmokuMr
 * @property TanniMr $TanniMr
 * @property TanniMr2 $TanniMr2
 */
class SikyuuMeisaiDt extends AppModel {

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
		'JuhacchuuMeisaiDt' => array(
			'className' => 'JuhacchuuMeisaiDt',
			'foreignKey' => 'juhacchuu_meisai_dt_id',
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
}
