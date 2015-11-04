<?php
App::uses('AppModel', 'Model');
/**
 * ZaikoFusokuHyoujiVw Model
 *
 * @property TanniMr $TanniMr
 * @property HinsituKbn $HinsituKbn
 */
class ZaikoFusokuHyoujiVw extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'hinmoku_mr_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'HinmokuMr.name';
	public $order = array('ZaikoFusokuHyoujiVw.yoyuu_zaiko','HinmokuMr.code');

//検索
	public $actsAs = array('Search.Searchable');
	public $filterArgs = array(
		array('name'=>'hinmoku_kbn_id', 'type' => 'value', 'field' => 'HinmokuMr.hinmoku_kbn_id'),
		'keyword' => array('type' => 'like', 'field' => array('HinmokuMr.code','HinmokuMr.name')),
		'min' => array('type' => 'value', 'field' => 'ZaikoFusokuHyoujiVw.yoyuu_zaiko >='),
		'max' => array('type' => 'value', 'field' => 'ZaikoFusokuHyoujiVw.yoyuu_zaiko <='),
	);

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
		'HinsituKbn' => array(
			'className' => 'HinsituKbn',
			'foreignKey' => 'hinsitu_kbn_id',
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
		'HinmokuMr' => array(
			'className' => 'HinmokuMr',
			'foreignKey' => 'hinmoku_mr_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
