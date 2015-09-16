<?php
App::uses('AppModel', 'Model');
/**
 * ShuugyouShubetuKbn Model
 *
 * @property ShuugyouBiMr $ShuugyouBiMr
 * @property ShuugyouJikanMr $ShuugyouJikanMr
 */
class ShuugyouShubetuKbn extends AppModel {

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
		'ShuugyouBiMr' => array(
			'className' => 'ShuugyouBiMr',
			'foreignKey' => 'shuugyou_shubetu_kbn_id',
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
		'ShuugyouJikanMr' => array(
			'className' => 'ShuugyouJikanMr',
			'foreignKey' => 'shuugyou_shubetu_kbn_id',
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
