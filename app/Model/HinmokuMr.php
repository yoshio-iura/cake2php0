<?php
App::uses('AppModel', 'Model');
/**
 * HinmokuMr Model
 *
 * @property TanniMr $TanniMr
 * @property Dai2TanniMr $Dai2TanniMr
 * @property KazeiKbn $KazeiKbn
 * @property HinmokuKbn $HinmokuKbn
 * @property HinmokuBunrui1Kbn $HinmokuBunrui1Kbn
 * @property HinmokuBunrui2Kbn $HinmokuBunrui2Kbn
 * @property HinmokuBunrui3Kbn $HinmokuBunrui3Kbn
 * @property HinmokuBunrui4Kbn $HinmokuBunrui4Kbn
 * @property HinmokuBunrui5Kbn $HinmokuBunrui5Kbn
 * @property TorihikisakiMr $TorihikisakiMr
 * @property basho_tana_SoukoMr $basho_tana_SoukoMr
 */
class HinmokuMr extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TanniMr' => array(
			'className' => 'TanniMr',
			'foreignKey' => 'tanni_mr_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Dai2TanniMr' => array(
			'className' => 'TanniMr',
			'foreignKey' => 'dai2_tanni_mr_id',
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
		'HinmokuKbn' => array(
			'className' => 'HinmokuKbn',
			'foreignKey' => 'hinmoku_kbn_id',
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
		),
		'HinmokuBunrui4Kbn' => array(
			'className' => 'HinmokuBunrui4Kbn',
			'foreignKey' => 'hinmoku_bunrui4_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'HinmokuBunrui5Kbn' => array(
			'className' => 'HinmokuBunrui5Kbn',
			'foreignKey' => 'hinmoku_bunrui5_kbn_id',
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
		'BashoTanaSoukoMr' => array(
			'className' => 'BashoTanaSoukoMr',
			'foreignKey' => 'basho_tana_souko_mr_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
