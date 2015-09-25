<?php
App::uses('AppModel', 'Model');
/**
 * SiharaiHouhouKbn Model
 *
 * @property SeikyuusakiMr $SeikyuusakiMr
 * @property SiiresakiMr $SiiresakiMr
 */
class SiharaiHouhouKbn extends AppModel {

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
		'SeikyuusakiMr' => array(
			'className' => 'SeikyuusakiMr',
			'foreignKey' => 'siharai_houhou_kbn_id',
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
			'foreignKey' => 'siharai_houhou_kbn_id',
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
