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


/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'tanka_iti' => array(
			'range' => array(
				'rule' => array('range',1,2),
				'message' => '単位位置は1か2だけが可能です。',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

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
		'SikyuuMeisaiDt' => array(
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
		'ZaikoDt' => array(
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
