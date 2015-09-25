<?php
App::uses('AppModel', 'Model');
/**
 * SeikyuusakiMr Model
 *
 * @property TorihikisakiMr $TorihikisakiMr
 * @property KaishuuTorihikisakiMr $KaishuuTorihikisakiMr
 * @property KakeGenkinKbn $KakeGenkinKbn
 * @property SimebiKbn $SimebiKbn
 * @property SiharaiTukiKbn $SiharaiTukiKbn
 * @property SiharaiHouhouKbn $SiharaiHouhouKbn
 * @property KouzaMr $KouzaMr
 * @property FurikomiFutanKbn $FurikomiFutanKbn
 * @property YoshinTorihikisakiMr $YoshinTorihikisakiMr
 */
class SeikyuusakiMr extends AppModel {

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
		'KaishuuTorihikisakiMr' => array(
			'className' => 'TorihikisakiMr',
			'foreignKey' => 'kaishuu_torihikisaki_mr_id',
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
		'KouzaMr' => array(
			'className' => 'KouzaMr',
			'foreignKey' => 'kouza_mr_id',
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
		'YoshinTorihikisakiMr' => array(
			'className' => 'TorihikisakiMr',
			'foreignKey' => 'yoshin_torihikisaki_mr_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
