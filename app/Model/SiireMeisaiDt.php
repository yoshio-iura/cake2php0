<?php
App::uses('AppModel', 'Model');
/**
 * SiireMeisaiDt Model
 *
 * @property SiireDt $SiireDt
 * @property HacchuuMeisaiDt $HacchuuMeisaiDt
 * @property HinmokuMr $HinmokuMr
 * @property BashoTanaSoukoMr $BashoTanaSoukoMr
 * @property TanniMr $TanniMr
 * @property TanniMr2 $TanniMr2
 */
class SiireMeisaiDt extends AppModel {

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
		'SiireDt' => array(
			'className' => 'SiireDt',
			'foreignKey' => 'siire_dt_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'HacchuuMeisaiDt' => array(
			'className' => 'HacchuuMeisaiDt',
			'foreignKey' => 'hacchuu_meisai_dt_id',
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
		'BashoTanaSoukoMr' => array(
			'className' => 'BashoTanaSoukoMr',
			'foreignKey' => 'basho_tana_souko_mr_id',
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
