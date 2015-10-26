<?php
App::uses('AppModel', 'Model');
/**
 * NyuukinDt Model
 *
 * @property BumonMr $BumonMr
 * @property TorihikisakiMr $TorihikisakiMr
 * @property SiharaiHouhouKbn $SiharaiHouhouKbn
 * @property NyuukinKouza $NyuukinKouza
 * @property SakuseiUser $SakuseiUser
 * @property KousinUser $KousinUser
 */
class NyuukinDt extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'BumonMr' => array(
			'className' => 'BumonMr',
			'foreignKey' => 'bumon_mr_id',
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
		'SiharaiHouhouKbn' => array(
			'className' => 'SiharaiHouhouKbn',
			'foreignKey' => 'siharai_houhou_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'NyuukinKouza' => array(
			'className' => 'NyuukinKouza',
			'foreignKey' => 'nyuukin_kouza_id',
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
