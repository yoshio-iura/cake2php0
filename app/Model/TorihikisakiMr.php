<?php
App::uses('AppModel', 'Model');
/**
 * TorihikisakiMr Model
 *
 * @property ShuugyouBiMr $ShuugyouBiMr
 * @property User $User
 * @property GroupOyaTorihikisakiMr $GroupOyaTorihikisakiMr
 * @property SiiresakiOyaTorihikisakiMr $SiiresakiOyaTorihikisakiMr
 * @property SeikyuuTorihikisakiMr $SeikyuuTorihikisakiMr
 * @property KokyakuOyaTorihikisakiMr $KokyakuOyaTorihikisakiMr
 * @property ShainKazkuDaihyouTorihikisakiMr $ShainKazkuDaihyouTorihikisakiMr
 * @property User $User
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
		'ShuugyouBiMr' => array(
			'className' => 'ShuugyouBiMr',
			'foreignKey' => 'shuugyou_bi_mr_id',
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
		'SiiresakiOyaTorihikisakiMr' => array(
			'className' => 'TorihikisakiMr',
			'foreignKey' => 'siiresaki_oya_torihikisaki_mr_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SeikyuuTorihikisakiMr' => array(
			'className' => 'TorihikisakiMr',
			'foreignKey' => 'seikyuu_torihikisaki_mr_id',
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
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
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
		)
	);

}
