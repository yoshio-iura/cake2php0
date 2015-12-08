<?php
App::uses('AppModel', 'Model');
/**
 * JuhacchuuMeisaiDt Model
 *
 * @property JuhacchuuDt $JuhacchuuDt
 * @property HinmokuMr $HinmokuMr
 * @property TanniMr $TanniMr
 * @property TanniMr2 $TanniMr2
 * @property KazeiKbn $KazeiKbn
 * @property BashoTanaSoukoMr $BashoTanaSoukoMr
 * @property OyaJuhacchuuMeisaiDt $OyaJuhacchuuMeisaiDt
 * @property OrderDt $OrderDt
 * @property JuchuuMeisaiDt $JuchuuMeisaiDt
 * @property SiireUriageMeisaiDt $SiireUriageMeisaiDt
 * @property SikyuuMeisaiDt $SikyuuMeisaiDt
 * @property ZaikoDt $ZaikoDt
 */
class JuhacchuuMeisaiDt extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'hinmoku_mei';

	public function afterFind($results, $primary = false) {
		foreach ($results as $key => $val) {
			$results[$key]['JuhacchuuMeisaiDt']['suu'] = number_format($val['JuhacchuuMeisaiDt']['suu'],2);	//数量のカンマ編集
			$results[$key]['JuhacchuuMeisaiDt']['suu2'] = number_format($val['JuhacchuuMeisaiDt']['suu2'],2);	//数量2のカンマ編集
			$results[$key]['JuhacchuuMeisaiDt']['nouhin_zumi_suu'] = number_format($val['JuhacchuuMeisaiDt']['nouhin_zumi_suu'],2);	//納品済み数量のカンマ編集
			$results[$key]['JuhacchuuMeisaiDt']['nouhin_zumi_suu2'] = number_format($val['JuhacchuuMeisaiDt']['nouhin_zumi_suu2'],2);	//納品済み数量2のカンマ編集
			$results[$key]['JuhacchuuMeisaiDt']['tanka'] = number_format($val['JuhacchuuMeisaiDt']['tanka']);	//単価のカンマ編集
			$results[$key]['JuhacchuuMeisaiDt']['kingaku'] = number_format($val['JuhacchuuMeisaiDt']['kingaku']);	//金額のカンマ編集
		}
		return $results;
	}

	public function beforeSave($options = array()) {
		$this->data['JuhacchuuMeisaiDt']['suu']=str_replace(',','',$this->data['JuhacchuuMeisaiDt']['suu']);	//数量のカンマ編集除去
		$this->data['JuhacchuuMeisaiDt']['suu2']=str_replace(',','',$this->data['JuhacchuuMeisaiDt']['suu2']);	//数量2のカンマ編集除去
		if (!empty($this->data['JuhacchuuMeisaiDt']['nouhin_zumi_suu'])){
			$this->data['JuhacchuuMeisaiDt']['nouhin_zumi_suu']=str_replace(',','',$this->data['JuhacchuuMeisaiDt']['nouhin_zumi_suu']);	//納品済み数量のカンマ編集除去
		}
		if (!empty($this->data['JuhacchuuMeisaiDt']['nouhin_zumi_suu2'])){
			$this->data['JuhacchuuMeisaiDt']['nouhin_zumi_suu2']=str_replace(',','',$this->data['JuhacchuuMeisaiDt']['nouhin_zumi_suu2']);	//納品済み数量2のカンマ編集除去
		}
		$this->data['JuhacchuuMeisaiDt']['tanka']=str_replace(',','',$this->data['JuhacchuuMeisaiDt']['tanka']);	//単価のカンマ編集除去
		$this->data['JuhacchuuMeisaiDt']['kingaku']=str_replace(',','',$this->data['JuhacchuuMeisaiDt']['kingaku']);	//金額のカンマ編集除去
	}

/**
 * Validation rules
 *
 * @var array
 */
/*	public $validate = array(
		'tanka_iti' => array(
			'rule' => array('inList', array(1,2)),
			//'message' => '単位位置は1か2だけが可能です。',
			//'allowEmpty' => false,
			//'required' => false,
			//'last' => false, // Stop validation after this rule
			//'on' => 'create', // Limit validation to 'create' or 'update' operations
		),
		'basho_tana_souko_mr_id' => array(
			'rule' => 'notEmpty',
		),
	);
*/
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'JuhacchuuDt' => array(
			'className' => 'JuhacchuuDt',
			'foreignKey' => 'juhacchuu_dt_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'HinmokuMr' => array(
			'className' => 'HinmokuMr',
			'foreignKey' => 'hinmoku_mr_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TanniMr' => array(
			'className' => 'TanniMr',
			'foreignKey' => 'tanni_mr_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TanniMr2' => array(
			'className' => 'TanniMr',
			'foreignKey' => 'tanni_mr2_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'KazeiKbn' => array(
			'className' => 'KazeiKbn',
			'foreignKey' => 'kazei_kbn_id',
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
		'OyaJuhacchuuMeisaiDt' => array(
			'className' => 'JuhacchuuMeisaiDt',
			'foreignKey' => 'oya_juhacchuu_meisai_dt_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
/*		),
		'OrderDt' => array(
			'className' => 'OrderDt',
			'foreignKey' => 'order_dt_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
*/		),
		'JuchuuMeisaiDt' => array(
			'className' => 'JuhacchuuMeisaiDt',
			'foreignKey' => 'juchuu_meisai_dt_id',
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
			'foreignKey' => 'juhacchuu_meisai_dt_id',
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
/*		'SikyuuMeisaiDt' => array(
			'className' => 'SikyuuMeisaiDt',
			'foreignKey' => 'juhacchuu_meisai_dt_id',
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
*/		'ZaikoDt' => array(
			'className' => 'ZaikoDt',
			'foreignKey' => 'juhacchuu_meisai_dt_id',
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
