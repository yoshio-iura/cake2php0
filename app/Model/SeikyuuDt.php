<?php
App::uses('AppModel', 'Model');
/**
 * SeikyuuDt Model
 *
 * @property TorihikisakiMr $TorihikisakiMr
 * @property SakuseiUser $SakuseiUser
 * @property KousinUser $KousinUser
 * @property SeikyuuMeisaiDt $SeikyuuMeisaiDt
 * @property UriageMeisaiDt $UriageMeisaiDt
 */
class SeikyuuDt extends AppModel {


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
		'SakuseiUser' => array(
			'className' => 'SakuseiUser',
			'foreignKey' => 'sakusei_user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'KousinUser' => array(
			'className' => 'KousinUser',
			'foreignKey' => 'kousin_user_id',
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
		'SeikyuuMeisaiDt' => array(
			'className' => 'SeikyuuMeisaiDt',
			'foreignKey' => 'seikyuu_dt_id',
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
		'UriageMeisaiDt' => array(
			'className' => 'UriageMeisaiDt',
			'foreignKey' => 'seikyuu_dt_id',
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
