<?php
App::uses('AppModel', 'Model');
/**
 * ZeikeisanKbn Model
 *
 * @property JuhacchuuDt $JuhacchuuDt
 * @property SiireUriageDt $SiireUriageDt
 */
class ZeikeisanKbn extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
	public $order = 'code';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'JuhacchuuDt' => array(
			'className' => 'JuhacchuuDt',
			'foreignKey' => 'zeikeisan_kbn_id',
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
		'SiireUriageDt' => array(
			'className' => 'SiireUriageDt',
			'foreignKey' => 'zeikeisan_kbn_id',
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
