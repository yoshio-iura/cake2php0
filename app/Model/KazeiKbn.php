<?php
App::uses('AppModel', 'Model');
/**
 * KazeiKbn Model
 *
 * @property HinmokuMr $HinmokuMr
 * @property JuhacchuuMeisaiDt $JuhacchuuMeisaiDt
 * @property SiireUriageMeisaiDt $SiireUriageMeisaiDt
 */
class KazeiKbn extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name_zeiritu';
	var $virtualFields = array('name_zeiritu' => "CONCAT(KazeiKbn.ryakugou, ',', KazeiKbn.zeiritu, ',%')");
	public $order = 'hyouji_jun';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'HinmokuMr' => array(
			'className' => 'HinmokuMr',
			'foreignKey' => 'kazei_kbn_id',
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
		'JuhacchuuMeisaiDt' => array(
			'className' => 'JuhacchuuMeisaiDt',
			'foreignKey' => 'kazei_kbn_id',
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
		'SiireUriageMeisaiDt' => array(
			'className' => 'SiireUriageMeisaiDt',
			'foreignKey' => 'kazei_kbn_id',
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
