<?php
App::uses('AppModel', 'Model');
/**
 * SiireDt Model
 *
 * @property TorihikisakiMr $TorihikisakiMr
 * @property User $User
 * @property BumonMr $BumonMr
 * @property HacchuuDt $HacchuuDt
 * @property SiireMeisaiDt $SiireMeisaiDt
 */
class SiireDt extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'bi';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TorihikisakiMr' => array(
			'className' => 'TorihikisakiMr',
			'foreignKey' => 'torihikisaki_mr_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'BumonMr' => array(
			'className' => 'BumonMr',
			'foreignKey' => 'bumon_mr_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'HacchuuDt' => array(
			'className' => 'HacchuuDt',
			'foreignKey' => 'hacchuu_dt_id',
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
		'SiireMeisaiDt' => array(
			'className' => 'SiireMeisaiDt',
			'foreignKey' => 'siire_dt_id',
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
