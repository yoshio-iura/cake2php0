<?php
App::uses('AppModel', 'Model');
/**
 * YokinShuruiKbn Model
 *
 * @property KouzaMr $KouzaMr
 * @property SiiresakiMr $SiiresakiMr
 */
class YokinShuruiKbn extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'KouzaMr' => array(
			'className' => 'KouzaMr',
			'foreignKey' => 'yokin_shurui_kbn_id',
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
		'SiiresakiMr' => array(
			'className' => 'SiiresakiMr',
			'foreignKey' => 'yokin_shurui_kbn_id',
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
