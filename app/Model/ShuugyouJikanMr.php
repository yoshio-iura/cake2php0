<?php
App::uses('AppModel', 'Model');
/**
 * ShuugyouJikanMr Model
 *
 * @property ShuugyouShubetuKbn $ShuugyouShubetuKbn
 * @property ShuugyouBiMr $ShuugyouBiMr
 */
class ShuugyouJikanMr extends AppModel {

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
		'ShuugyouShubetuKbn' => array(
			'className' => 'ShuugyouShubetuKbn',
			'foreignKey' => 'shuugyou_shubetu_kbn_id',
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
		'ShuugyouBiMr' => array(
			'className' => 'ShuugyouBiMr',
			'foreignKey' => 'shuugyou_jikan_mr_id',
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
