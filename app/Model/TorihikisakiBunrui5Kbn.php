<?php
App::uses('AppModel', 'Model');
/**
 * TorihikisakiBunrui5Kbn Model
 *
 * @property SakuseiUser $SakuseiUser
 * @property KousinUser $KousinUser
 * @property TorihikisakiMr $TorihikisakiMr
 */
class TorihikisakiBunrui5Kbn extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'TorihikisakiMr' => array(
			'className' => 'TorihikisakiMr',
			'foreignKey' => 'torihikisaki_bunrui5_kbn_id',
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
