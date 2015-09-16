<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property BumonMr $BumonMr
 * @property ThemaMr $ThemaMr
 * @property TorihikisakiMr $TorihikisakiMr
 * @property ShokushuKbn $ShokushuKbn
 * @property ShouninKengenMr $ShouninKengenMr
 * @property ShokushuKbn $ShokushuKbn
 * @property TorihikisakiMr $TorihikisakiMr
 */
class User extends AppModel {

	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
		return true;
	}

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
		'BumonMr' => array(
			'className' => 'BumonMr',
			'foreignKey' => 'bumon_mr_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ThemaMr' => array(
			'className' => 'ThemaMr',
			'foreignKey' => 'thema_mr_id',
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
		'ShokushuKbn' => array(
			'className' => 'ShokushuKbn',
			'foreignKey' => 'shokushu_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ShouninKengenMr' => array(
			'className' => 'ShouninKengenMr',
			'foreignKey' => 'shounin_kengen_mr_id',
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
/*	public $hasMany = array(
		'ShokushuKbn' => array(
			'className' => 'ShokushuKbn',
			'foreignKey' => 'user_id',
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
		'TorihikisakiMr' => array(
			'className' => 'TorihikisakiMr',
			'foreignKey' => 'user_id',
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
*/
}
