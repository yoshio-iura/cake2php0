<?php
App::uses('AppModel', 'Model');
/**
 * SiiresakiMr Model
 *
 * @property TorihikisakiMr $TorihikisakiMr
 * @property KakeGenkinKbn $KakeGenkinKbn
 * @property SimebiKbn $SimebiKbn
 * @property SiharaiTukiKbn $SiharaiTukiKbn
 * @property SiharaiHouhouKbn $SiharaiHouhouKbn
 * @property YokinShuruiKbn $YokinShuruiKbn
 * @property KouzaKankeiKbn $KouzaKankeiKbn
 * @property FurikomiFutanKbn $FurikomiFutanKbn
 * @property FurikomiHouhouKbn $FurikomiHouhouKbn
 * @property code $siharaibi_kbns
 */
class SiiresakiMr extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'code';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TorihikisakiMr' => array(
			'className' => 'TorihikisakiMr',
			'foreignKey' => 'torihikisaki_mr_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'KakeGenkinKbn' => array(
			'className' => 'KakeGenkinKbn',
			'foreignKey' => 'kake_genkin_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SimebiKbn' => array(
			'className' => 'SimebiKbn',
			'foreignKey' => 'simebi_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SiharaiTukiKbn' => array(
			'className' => 'SiharaiTukiKbn',
			'foreignKey' => 'siharai_tuki_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SiharaiHouhouKbn' => array(
			'className' => 'SiharaiHouhouKbn',
			'foreignKey' => 'siharai_houhou_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'YokinShuruiKbn' => array(
			'className' => 'YokinShuruiKbn',
			'foreignKey' => 'yokin_shurui_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'KouzaKankeiKbn' => array(
			'className' => 'KouzaKankeiKbn',
			'foreignKey' => 'kouza_kankei_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'FurikomiFutanKbn' => array(
			'className' => 'FurikomiFutanKbn',
			'foreignKey' => 'furikomi_futan_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'FurikomiHouhouKbn' => array(
			'className' => 'FurikomiHouhouKbn',
			'foreignKey' => 'furikomi_houhou_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SiharaibiKbn' => array(
			'className' => 'SiharaibiKbn',
			'foreignKey' => 'siharaibi_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
