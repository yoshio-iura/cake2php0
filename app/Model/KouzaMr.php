<?php
App::uses('AppModel', 'Model');
/**
 * KouzaMr Model
 *
 * @property YokinShuruiKbn $YokinShuruiKbn
 * @property BumonMr $BumonMr
 * @property SeikyuusakiMr $SeikyuusakiMr
 */
class KouzaMr extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'ginkou_mei';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'YokinShuruiKbn' => array(
			'className' => 'YokinShuruiKbn',
			'foreignKey' => 'yokin_shurui_kbn_id',
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
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'SeikyuusakiMr' => array(
			'className' => 'SeikyuusakiMr',
			'foreignKey' => 'kouza_mr_id',
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
