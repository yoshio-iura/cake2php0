<?php
App::uses('AppModel', 'Model');
/**
 * ShuugyouBiMr Model
 *
 * @property ShuugyouPatternMr $ShuugyouPatternMr
 * @property ShuugyouKbn $ShuugyouKbn
 * @property ShuugyouJikanMr $ShuugyouJikanMr
 * @property TorihikisakiMr $TorihikisakiMr
 */
class ShuugyouBiMr extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'hiduke';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'ShuugyouPatternMr' => array(
			'className' => 'ShuugyouPatternMr',
			'foreignKey' => 'shuugyou_pattern_mr_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ShuugyouKbn' => array(
			'className' => 'ShuugyouKbn',
			'foreignKey' => 'shuugyou_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ShuugyouJikanMr' => array(
			'className' => 'ShuugyouJikanMr',
			'foreignKey' => 'shuugyou_jikan_mr_id',
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
		'TorihikisakiMr' => array(
			'className' => 'TorihikisakiMr',
			'foreignKey' => 'shuugyou_bi_mr_id',
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
