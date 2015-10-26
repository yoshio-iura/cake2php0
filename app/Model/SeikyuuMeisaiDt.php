<?php
App::uses('AppModel', 'Model');
/**
 * SeikyuuMeisaiDt Model
 *
 * @property SeikyuuDt $SeikyuuDt
 * @property UriageDt $UriageDt
 * @property UriageMeisaiDt $UriageMeisaiDt
 * @property SakuseiUser $SakuseiUser
 * @property KousinUser $KousinUser
 */
class SeikyuuMeisaiDt extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'SeikyuuDt' => array(
			'className' => 'SeikyuuDt',
			'foreignKey' => 'seikyuu_dt_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'UriageDt' => array(
			'className' => 'UriageDt',
			'foreignKey' => 'uriage_dt_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'UriageMeisaiDt' => array(
			'className' => 'UriageMeisaiDt',
			'foreignKey' => 'uriage_meisai_dt_id',
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
}
