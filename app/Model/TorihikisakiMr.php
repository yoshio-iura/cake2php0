<?php
App::uses('AppModel', 'Model');
/**
 * TorihikisakiMr Model
 *
 * @property KeishouKbn $KeishouKbn
 * @property ShuugyouPatternMr $ShuugyouPatternMr
 * @property User $User
 * @property GroupOyaTorihikisakiMr $GroupOyaTorihikisakiMr
 * @property KokyakuOyaTorihikisakiMr $KokyakuOyaTorihikisakiMr
 * @property ShainKazkuDaihyouTorihikisakiMr $ShainKazkuDaihyouTorihikisakiMr
 * @property TorihikisakiBunrui1Kbn $TorihikisakiBunrui1Kbn
 * @property TorihikisakiBunrui2Kbn $TorihikisakiBunrui2Kbn
 * @property TorihikisakiBunrui3Kbn $TorihikisakiBunrui3Kbn
 * @property TorihikisakiBunrui4Kbn $TorihikisakiBunrui4Kbn
 * @property TorihikisakiBunrui5Kbn $TorihikisakiBunrui5Kbn
 * @property KaishuuTorihikisakiMr $KaishuuTorihikisakiMr
 * @property KakeGenkinKbn $KakeGenkinKbn
 * @property SimebiKbn $SimebiKbn
 * @property KaishuuTukiKbn $KaishuuTukiKbn
 * @property KaishuuHouhouKbn $KaishuuHouhouKbn
 * @property KouzaMr $KouzaMr
 * @property FurikomiFutanKbn $FurikomiFutanKbn
 * @property YoshinTorihikisakiMr $YoshinTorihikisakiMr
 * @property SiireKakeGenkinKbn $SiireKakeGenkinKbn
 * @property SireSimebiKbn $SireSimebiKbn
 * @property SiharaiTukiKbn $SiharaiTukiKbn
 * @property SiharaiHouhouKbn $SiharaiHouhouKbn
 * @property YokinShuruiKbn $YokinShuruiKbn
 * @property KouzaKankeiKbn $KouzaKankeiKbn
 * @property BashoTanaSoukoMr $BashoTanaSoukoMr
 * @property BumonMr $BumonMr
 * @property HinmokuMr $HinmokuMr
 * @property JournalDt $JournalDt
 * @property JuhacchuuDt $JuhacchuuDt
 * @property NyuukinDt $NyuukinDt
 * @property SeikyuuDt $SeikyuuDt
 * @property SeikyuusakiMr $SeikyuusakiMr
 * @property SiireUriageDt $SiireUriageDt
 * @property SiiresakiMr $SiiresakiMr
 * @property User $User
 * @property ZaikoDt $ZaikoDt
 */
class TorihikisakiMr extends AppModel {

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
		'KeishouKbn' => array(
			'className' => 'KeishouKbn',
			'foreignKey' => 'keishou_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ShuugyouPatternMr' => array(
			'className' => 'ShuugyouPatternMr',
			'foreignKey' => 'shuugyou_pattern_mr_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GroupOyaTorihikisakiMr' => array(
			'className' => 'TorihikisakiMr',
			'foreignKey' => 'group_oya_torihikisaki_mr_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'KokyakuOyaTorihikisakiMr' => array(
			'className' => 'TorihikisakiMr',
			'foreignKey' => 'kokyaku_oya_torihikisaki_mr_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ShainKazkuDaihyouTorihikisakiMr' => array(
			'className' => 'TorihikisakiMr',
			'foreignKey' => 'shain_kazku_daihyou_torihikisaki_mr_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TorihikisakiBunrui1Kbn' => array(
			'className' => 'TorihikisakiBunrui1Kbn',
			'foreignKey' => 'torihikisaki_bunrui1_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TorihikisakiBunrui2Kbn' => array(
			'className' => 'TorihikisakiBunrui2Kbn',
			'foreignKey' => 'torihikisaki_bunrui2_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TorihikisakiBunrui3Kbn' => array(
			'className' => 'TorihikisakiBunrui3Kbn',
			'foreignKey' => 'torihikisaki_bunrui3_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TorihikisakiBunrui4Kbn' => array(
			'className' => 'TorihikisakiBunrui4Kbn',
			'foreignKey' => 'torihikisaki_bunrui4_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TorihikisakiBunrui5Kbn' => array(
			'className' => 'TorihikisakiBunrui5Kbn',
			'foreignKey' => 'torihikisaki_bunrui5_kbn_id',
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
		'KaishuuTukiKbn' => array(
			'className' => 'SiharaiTukiKbn',
			'foreignKey' => 'kaishuu_tuki_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'KaishuuHouhouKbn' => array(
			'className' => 'SiharaiHouhouKbn',
			'foreignKey' => 'kaishuu_houhou_kbn_id',
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
		),
		'SiireKakeGenkinKbn' => array(
			'className' => 'KakeGenkinKbn',
			'foreignKey' => 'siire_kake_genkin_kbn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SireSimebiKbn' => array(
			'className' => 'SimebiKbn',
			'foreignKey' => 'sire_simebi_kbn_id',
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
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'BashoTanaSoukoMr' => array(
			'className' => 'BashoTanaSoukoMr',
			'foreignKey' => 'torihikisaki_mr_id',
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
		'BumonMr' => array(
			'className' => 'BumonMr',
			'foreignKey' => 'torihikisaki_mr_id',
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
		'HinmokuMr' => array(
			'className' => 'HinmokuMr',
			'foreignKey' => 'torihikisaki_mr_id',
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
		'JournalDt' => array(
			'className' => 'JournalDt',
			'foreignKey' => 'torihikisaki_mr_id',
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
		'JuhacchuuDt' => array(
			'className' => 'JuhacchuuDt',
			'foreignKey' => 'torihikisaki_mr_id',
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
		'NyuukinDt' => array(
			'className' => 'NyuukinDt',
			'foreignKey' => 'torihikisaki_mr_id',
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
		'SeikyuuDt' => array(
			'className' => 'SeikyuuDt',
			'foreignKey' => 'torihikisaki_mr_id',
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
		'SeikyuusakiMr' => array(
			'className' => 'SeikyuusakiMr',
			'foreignKey' => 'torihikisaki_mr_id',
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
			'foreignKey' => 'torihikisaki_mr_id',
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
		'SiiresakiMr' => array(
			'className' => 'SiiresakiMr',
			'foreignKey' => 'torihikisaki_mr_id',
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
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'torihikisaki_mr_id',
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
		'ZaikoDt' => array(
			'className' => 'ZaikoDt',
			'foreignKey' => 'torihikisaki_mr_id',
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
