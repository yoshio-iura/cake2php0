<?php
App::uses('AppModel', 'Model');
/**
 * SiireUriageDt Model
 *
 * @property TorihikisakiMr $TorihikisakiMr
 * @property ShukkaTorihikisakiMr $ShukkaTorihikisakiMr
 * @property KitukeTorihikisakiMr $KitukeTorihikisakiMr
 * @property User $User
 * @property BumonMr $BumonMr
 * @property JuhacchuuDt $JuhacchuuDt
 * @property ZeikeisanKbn $ZeikeisanKbn
 * @property AkakuroUrigakeDt $AkakuroUrigakeDt
 * @property SiireUriageMeisaiDt $SiireUriageMeisaiDt
 */
class SiireUriageDt extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


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
		'ShukkaTorihikisakiMr' => array(
			'className' => 'TorihikisakiMr',
			'foreignKey' => 'shukka_torihikisaki_mr_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'KitukeTorihikisakiMr' => array(
			'className' => 'TorihikisakiMr',
			'foreignKey' => 'kituke_torihikisaki_mr_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
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
		),
		'JuhacchuuDt' => array(
			'className' => 'JuhacchuuDt',
			'foreignKey' => 'juhacchuu_dt_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ZeikeisanKbn' => array(
			'className' => 'ZeikeisanKbn',
			'foreignKey' => 'zeikeisan_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AkakuroUriageDt' => array(
			'className' => 'SiireUriaGeDt',
			'foreignKey' => 'akakuro_uriage_dt_id',
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
		'SiireUriageMeisaiDt' => array(
			'className' => 'SiireUriageMeisaiDt',
			'foreignKey' => 'siire_uriage_dt_id',
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
