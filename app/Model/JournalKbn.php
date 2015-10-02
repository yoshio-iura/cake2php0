<?php
App::uses('AppModel', 'Model');
/**
 * JournalKbn Model
 *
 * @property JournalDaiKbn $JournalDaiKbn
 * @property JournalKongenMr $JournalKongenMr
 * @property JournalDt $JournalDt
 */
class JournalKbn extends AppModel {

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
		'JournalDaiKbn' => array(
			'className' => 'JournalDaiKbn',
			'foreignKey' => 'journal_dai_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'JournalKongenMr' => array(
			'className' => 'JournalKongenMr',
			'foreignKey' => 'journal_kongen_mr_id',
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
