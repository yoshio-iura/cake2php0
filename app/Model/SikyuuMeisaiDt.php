<?php
App::uses('AppModel', 'Model');
/**
 * JuhacchuuMeisaiDt Model
 *
 * @property JuhacchuuDt $JuhacchuuDt
 * @property HinmokuMr $HinmokuMr
 * @property TanniMr $TanniMr
 * @property TanniMr2 $TanniMr2
 * @property BashoTanaSoukoMr $BashoTanaSoukoMr
 * @property OyaJuhacchuuMeisai $OyaJuhacchuuMeisai
 * @property OrderDt $OrderDt
 * @property JuchuuMeisaiDt $JuchuuMeisaiDt
 * @property SikyuuMeisaiDt $SikyuuMeisaiDt
 * @property ZaikoDt $ZaikoDt
 */
class SikyuuMeisaiDt extends AppModel {

	var $useTable = 'juhacchuu_meisai_dts';
	var $primaryKey = 'id';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'hinmoku_mei';

	public function afterFind($results, $primary = false) {
		foreach ($results as $key => $val) {
			$results[$key]['SikyuuMeisaiDt']['suu'] = number_format($val['SikyuuMeisaiDt']['suu'],2);	//���ʂ̃J���}�ҏW
			$results[$key]['SikyuuMeisaiDt']['suu2'] = number_format($val['SikyuuMeisaiDt']['suu2'],2);	//����2�̃J���}�ҏW
			$results[$key]['SikyuuMeisaiDt']['nouhin_zumi_suu'] = number_format($val['SikyuuMeisaiDt']['nouhin_zumi_suu'],2);	//�[�i�ςݐ��ʂ̃J���}�ҏW
			$results[$key]['SikyuuMeisaiDt']['nouhin_zumi_suu2'] = number_format($val['SikyuuMeisaiDt']['nouhin_zumi_suu2'],2);	//�[�i�ςݐ���2�̃J���}�ҏW
			$results[$key]['SikyuuMeisaiDt']['tanka'] = number_format($val['SikyuuMeisaiDt']['tanka']);	//�P���̃J���}�ҏW
			$results[$key]['SikyuuMeisaiDt']['kingaku'] = number_format($val['SikyuuMeisaiDt']['kingaku']);	//���z�̃J���}�ҏW
		}
		return $results;
	}

	public function beforeSave($options = array()) {
		$this->data['SikyuuMeisaiDt']['suu']=str_replace(',','',$this->data['SikyuuMeisaiDt']['suu']);	//���ʂ̃J���}�ҏW����
		$this->data['SikyuuMeisaiDt']['suu2']=str_replace(',','',$this->data['SikyuuMeisaiDt']['suu2']);	//����2�̃J���}�ҏW����
		if (!empty($this->data['SikyuuMeisaiDt']['nouhin_zumi_suu'])){
			$this->data['SikyuuMeisaiDt']['nouhin_zumi_suu']=str_replace(',','',$this->data['SikyuuMeisaiDt']['nouhin_zumi_suu']);	//�[�i�ςݐ��ʂ̃J���}�ҏW����
		}
		if (!empty($this->data['SikyuuMeisaiDt']['nouhin_zumi_suu2'])){
			$this->data['SikyuuMeisaiDt']['nouhin_zumi_suu2']=str_replace(',','',$this->data['SikyuuMeisaiDt']['nouhin_zumi_suu2']);	//�[�i�ςݐ���2�̃J���}�ҏW����
		}
		if (!empty($this->data['SikyuuMeisaiDt']['tanka'])){
			$this->data['SikyuuMeisaiDt']['tanka']=str_replace(',','',$this->data['SikyuuMeisaiDt']['tanka']);	//�P���̃J���}�ҏW����
		}
		if (!empty($this->data['SikyuuMeisaiDt']['kingaku'])){
			$this->data['SikyuuMeisaiDt']['kingaku']=str_replace(',','',$this->data['SikyuuMeisaiDt']['kingaku']);	//���z�̃J���}�ҏW����
		}
	}

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'JuhacchuuDt' => array(
			'className' => 'JuhacchuuDt',
			'foreignKey' => 'juhacchuu_dt_id',
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
		),
		'TanniMr' => array(
			'className' => 'TanniMr',
			'foreignKey' => 'tanni_mr_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TanniMr2' => array(
			'className' => 'TanniMr',
			'foreignKey' => 'tanni_mr2_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'BashoTanaSoukoMr' => array(
			'className' => 'BashoTanaSoukoMr',
			'foreignKey' => 'basho_tana_souko_mr_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'JuhacchuuMeisaiDt' => array(
			'className' => 'JuhacchuuMeisaiDt',
			'foreignKey' => 'oya_juhacchuu_meisai_dt_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
/*		),
		'OrderDt' => array(
			'className' => 'OrderDt',
			'foreignKey' => 'order_dt_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'JuchuuMeisaiDt' => array(
			'className' => 'JuchuuMeisaiDt',
			'foreignKey' => 'juchuu_meisai_dt_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
*/		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
/*		'SikyuuMeisaiDt' => array(
			'className' => 'SikyuuMeisaiDt',
			'foreignKey' => 'juhacchuu_meisai_dt_id',
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
*/		'ZaikoDt' => array(
			'className' => 'ZaikoDt',
			'foreignKey' => 'juhacchuu_meisai_dt_id',
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
