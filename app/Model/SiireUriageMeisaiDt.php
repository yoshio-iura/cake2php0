<?php
App::uses('AppModel', 'Model');
/**
 * SiireUriageMeisaiDt Model
 *
 * @property SiireUriageDt $SiireUriageDt
 * @property JuhacchuuMeisaiDt $JuhacchuuMeisaiDt
 * @property HinmokuMr $HinmokuMr
 * @property BashoTanaSoukoMr $BashoTanaSoukoMr
 * @property TanniMr $TanniMr
 * @property TanniMr2 $TanniMr2
 * @property KazeiKbn $KazeiKbn
 * @property AkakuroMotoMeisaiDt $AkakuroMotoMeisaiDt
 * @property SeikyuuDt $SeikyuuDt
 * @property SeikyuuTienKbn $SeikyuuTienKbn
 */
class SiireUriageMeisaiDt extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'hinmoku_mei';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'SiireUriageDt' => array(
			'className' => 'SiireUriageDt',
			'foreignKey' => 'siire_uriage_dt_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'JuhacchuuMeisaiDt' => array(
			'className' => 'JuhacchuuMeisaiDt',
			'foreignKey' => 'juhacchuu_meisai_dt_id',
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
		'BashoTanaSoukoMr' => array(
			'className' => 'BashoTanaSoukoMr',
			'foreignKey' => 'basho_tana_souko_mr_id',
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
		'AkakuroMotoMeisaiDt' => array(
			'className' => 'SiireUriageMeisaiDt',
			'foreignKey' => 'akakuro_moto_meisai_dt_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SeikyuuDt' => array(
			'className' => 'SeikyuuDt',
			'foreignKey' => 'seikyuu_dt_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
/*		),
		'SeikyuuTienKbn' => array(
			'className' => 'SeikyuuTienKbn',
			'foreignKey' => 'seikyuu_tien_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
*/		)
	);
}
