<?php
App::uses('AppModel', 'Model');
/**
 * JournalDaiKbn Model
 *
 * @property JournalKbn $JournalKbn
 */
class JournalDaiKbn extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'JournalKbn' => array(
			'className' => 'JournalKbn',
			'foreignKey' => 'journal_dai_kbn_id',
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
