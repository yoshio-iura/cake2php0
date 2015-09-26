<?php
App::uses('AppModel', 'Model');
/**
 * ZaikoDt Model
 *
 * @property HinmokuMr $HinmokuMr
 * @property BashoTanaSoukoMr $BashoTanaSoukoMr
 * @property ShoyuushaKbn $ShoyuushaKbn
 * @property TorihikisakiMr $TorihikisakiMr
 * @property TanniMr $TanniMr
 * @property TanniMr2 $TanniMr2
 * @property HinsituKbn $HinsituKbn
 * @property JuhacchuuMeisaiDt $JuhacchuuMeisaiDt
 * @property HinmokuBunrui1Kbn $HinmokuBunrui1Kbn
 * @property HinmokuBunrui2Kbn $HinmokuBunrui2Kbn
 * @property HinmokuBunrui3Kbn $HinmokuBunrui3Kbn
 */
class ZaikoDt extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
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
		'ShoyuushaKbn' => array(
			'className' => 'ShoyuushaKbn',
			'foreignKey' => 'shoyuusha_kbn_id',
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
		'HinsituKbn' => array(
			'className' => 'HinsituKbn',
			'foreignKey' => 'hinsitu_kbn_id',
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
		'HinmokuBunrui1Kbn' => array(
			'className' => 'HinmokuBunrui1Kbn',
			'foreignKey' => 'hinmoku_bunrui1_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'HinmokuBunrui2Kbn' => array(
			'className' => 'HinmokuBunrui2Kbn',
			'foreignKey' => 'hinmoku_bunrui2_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'HinmokuBunrui3Kbn' => array(
			'className' => 'HinmokuBunrui3Kbn',
			'foreignKey' => 'hinmoku_bunrui3_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
