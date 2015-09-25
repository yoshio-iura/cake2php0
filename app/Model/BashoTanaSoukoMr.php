<?php
App::uses('AppModel', 'Model');
/**
 * BashoTanaSoukoMr Model
 *
 * @property JouiBashoTanaSoukoMr $JouiBashoTanaSoukoMr
 * @property TorihikisakiMr $TorihikisakiMr
 * @property BumonMr $BumonMr
 * @property SoukoKbn $SoukoKbn
 * @property HinmokuMr $HinmokuMr
 */
class BashoTanaSoukoMr extends AppModel {

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
		'JouiBashoTanaSoukoMr' => array(
			'className' => 'BashoTanaSoukoMr',
			'foreignKey' => 'joui_basho_tana_souko_mr_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TorihikisakiMr' => array(
			'className' => 'TorihikisakiMr',
			'foreignKey' => 'torihikisaki_mr_id',
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
		'SoukoKbn' => array(
			'className' => 'SoukoKbn',
			'foreignKey' => 'souko_kbn_id',
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
		'HinmokuMr' => array(
			'className' => 'HinmokuMr',
			'foreignKey' => 'basho_tana_souko_mr_id',
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
