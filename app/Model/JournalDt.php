<?php
App::uses('AppModel', 'Model');
/**
 * JournalDt Model
 *
 * @property JournalKbn $JournalKbn
 * @property Data $Data
 * @property HinmokuMr $HinmokuMr
 * @property BashoTanaSoukoMr $BashoTanaSoukoMr
 * @property TorihikisakiMr $TorihikisakiMr
 * @property TanniMr $TanniMr
 * @property TanniMr2 $TanniMr2
 */
class JournalDt extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'JournalKbn' => array(
			'className' => 'JournalKbn',
			'foreignKey' => 'journal_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Data' => array(
			'className' => 'Data',
			'foreignKey' => 'data_id',
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
		)
	);
}
