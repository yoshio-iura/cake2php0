<?php
App::uses('AppModel', 'Model');
/**
 * JournalKbn Model
 *
 * @property JournalDaiKbn $JournalDaiKbn
 * @property DataTableMr $DataTableMr
 * @property JournalDt $JournalDt
 */
class JournalKbn extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'JournalDaiKbn' => array(
			'className' => 'JournalDaiKbn',
			'foreignKey' => 'journal_dai_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DataTableMr' => array(
			'className' => 'DataTableMr',
			'foreignKey' => 'data_id_table_mr_id',
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
		'JournalDt' => array(
			'className' => 'JournalDt',
			'foreignKey' => 'journal_kbn_id',
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
