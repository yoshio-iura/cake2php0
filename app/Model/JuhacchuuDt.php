<?php
App::uses('AppModel', 'Model');
/**
 * JuhacchuuDt Model
 *
 * @property TorihikisakiMr $TorihikisakiMr
 * @property ShukkaTorihikisakiMr $ShukkaTorihikisakiMr
 * @property KitukeTorihikisakiMr $KitukeTorihikisakiMr
 * @property User $User
 * @property BumonMr $BumonMr
 * @property JuchuuDt $JuchuuDt
 * @property BashoTanaSoukoMr $BashoTanaSoukoMr
 * @property ZeikeisanKbn $ZeikeisanKbn
 * @property JuhacchuuMeisaiDt $JuhacchuuMeisaiDt
 * @property SiireUriageDt $SiireUriageDt
 */
class JuhacchuuDt extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

	public function afterFind($results, $primary = false) {
		if($primary && !empty($results[0]) && !empty($results[0]['JuhacchuuDt']['kingaku_goukei'])) {
			$results[0]['JuhacchuuDt']['kingaku_goukei'] = number_format($results[0]['JuhacchuuDt']['kingaku_goukei']);	//金額合計のカンマ編集
			$results[0]['JuhacchuuDt']['shouhizei_kingaku'] = number_format($results[0]['JuhacchuuDt']['shouhizei_kingaku']);	//消費税額のカンマ編集
		}
		return $results;
	}

	public function beforeSave($options = array()) {
		$this->data['JuhacchuuDt']['kingaku_goukei']=str_replace(',','',$this->data['JuhacchuuDt']['kingaku_goukei']);	//金額合計のカンマ編集除去
		$this->data['JuhacchuuDt']['shouhizei_kingaku']=str_replace(',','',$this->data['JuhacchuuDt']['shouhizei_kingaku']);	//消費税額のカンマ編集除去
	}

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
		'JuchuuDt' => array(
			'className' => 'JuhacchuuDt',
			'foreignKey' => 'juchuu_dt_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'BashoTanaSoukoMr' => array(
			'className' => 'BashoTanaSoukoMr',
			'foreignKey' => 'basho_tana_souko_mr_id',
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
		'History' => array(
			'className' => 'History',
			'foreignKey' => 'id',
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
		'JuhacchuuMeisaiDt' => array(
			'className' => 'JuhacchuuMeisaiDt',
			'foreignKey' => 'juhacchuu_dt_id',
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
		'SiireUriageDt' => array(
			'className' => 'SiireUriageDt',
			'foreignKey' => 'juhacchuu_dt_id',
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
