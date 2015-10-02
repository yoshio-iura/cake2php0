<?php
App::uses('AppModel', 'Model');
/**
 * JournalKongenMr Model
 *
 * @property SakuseiUser $SakuseiUser
 * @property KousinUser $KousinUser
 * @property JournalKbn $JournalKbn
 */
class JournalKongenMr extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'JournalKbn' => array(
			'className' => 'JournalKbn',
			'foreignKey' => 'journal_kongen_mr_id',
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
