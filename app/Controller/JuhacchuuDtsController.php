<?php
App::uses('AppController', 'Controller');
/**
 * JuhacchuuDts Controller
 *
 * @property JuhacchuuDt $JuhacchuuDt
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class JuhacchuuDtsController extends AppController {

	var $uses = array('JuhacchuuDt', 'KeishouKbn', 'TanniMr');
/**
 *  Layout
 *
 * @var string
 */
	public $layout = 'bootstrap';

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('TwitterBootstrap.BootstrapHtml', 'TwitterBootstrap.BootstrapForm', 'TwitterBootstrap.BootstrapPaginator', 'Js', 'Number');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->JuhacchuuDt->recursive = 0;
		$this->set('juhacchuuDts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void

	public function view($id = null) {
		if (!$this->JuhacchuuDt->exists($id)) {
			throw new NotFoundException(__('Invalid juhacchuu dt'));
		}
		$options = array('conditions' => array('JuhacchuuDt.' . $this->JuhacchuuDt->primaryKey => $id));
		$this->set('juhacchuuDt', $this->JuhacchuuDt->find('first', $options));
	}
*/
/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->edit();
		$this->render('edit');
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->write_log('JuhacchuuDt');
		if ($this->action == 'edit' && !$this->JuhacchuuDt->exists($id)) {
			throw new NotFoundException(__('Invalid juhacchuu dt'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if (!empty($this->request->data)) {	//pr($this->request->data);
				unset($this->JuhacchuuDt->JuhacchuuMeisaiDt->validate['JuhacchuuDt_id']);	// バリデーションエラーを出さないため
				if ($this->JuhacchuuDt->saveAll($this->request->data, array('deep' => true))) {
					if($id==null){$id = $this->JuhacchuuDt->getLastInsertID();}
					$this->Session->setFlash(__('The juhacchuu dt has been saved.').$id, 'default', array('class' => 'alert alert-success'));
					$this->Session->setFlash(Router::url(array('action' => 'excel',$id),true), 'default', null, 'download');
					return $this->redirect(array('action' => 'add'));
				} else {
					$this->Session->setFlash(__('The juhacchuu dt could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
				}
			}
		} else {
			$this->JuhacchuuDt->Behaviors->load('Containable');
			$options = array(
				'contain' => array('JuhacchuuMeisaiDt' =>
						array('conditions' => array('JuhacchuuMeisaiDt.oya_juhacchuu_meisai_dt_id' => null,),
							'order' => array('JuhacchuuMeisaiDt.gyou_bangou'),
							'HinmokuMr' => array('fields' => array('code'),),
							'SikyuuMeisaiDt' => array('order' => array('SikyuuMeisaiDt.gyou_bangou'),
								'HinmokuMr' => array('fields' => array('code'),),),),
					'TorihikisakiMr' => array('fields' => array('code','name'),),
					'ShukkaTorihikisakiMr' => array('fields' => array('code','name'),),
					'KitukeTorihikisakiMr' => array('fields' => array('code','name'),),),
				'conditions' => array('JuhacchuuDt.' . $this->JuhacchuuDt->primaryKey => $id,),);
			$this->request->data = $this->JuhacchuuDt->find('first', $options);
		}
		//$torihikisakiMrs = $this->JuhacchuuDt->TorihikisakiMr->find('list');
		//$shukkaTorihikisakiMrs = $this->JuhacchuuDt->ShukkaTorihikisakiMr->find('list');
		//$kitukeTorihikisakiMrs = $this->JuhacchuuDt->KitukeTorihikisakiMr->find('list');
		$users = $this->JuhacchuuDt->User->find('list');
		$bumonMrs = $this->JuhacchuuDt->BumonMr->find('list');
		//$juchuuDts = $this->JuhacchuuDt->JuchuuDt->find('list');
		$bashoTanaSoukoMrs = $this->JuhacchuuDt->BashoTanaSoukoMr->find('list');
		$tanniMrs = $this->JuhacchuuDt->JuhacchuuMeisaiDt->TanniMr->find('list');
		$tanniMr2s = $this->JuhacchuuDt->JuhacchuuMeisaiDt->TanniMr2->find('list');
		$zeikeisanKbns = $this->JuhacchuuDt->ZeikeisanKbn->find('list');
		$kazeiKbns = $this->JuhacchuuDt->JuhacchuuMeisaiDt->KazeiKbn->find('list');
		$this->set(compact('users', 'bumonMrs', 'bashoTanaSoukoMrs', 'tanniMrs', 'tanniMr2s', 'zeikeisanKbns', 'kazeiKbns'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void

	public function delete($id = null) {
		$this->JuhacchuuDt->id = $id;
		if (!$this->JuhacchuuDt->exists()) {
			throw new NotFoundException(__('Invalid juhacchuu dt'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->JuhacchuuDt->delete()) {
			$this->Flash->success(__('The juhacchuu dt has been deleted.'));
		} else {
			$this->Flash->error(__('The juhacchuu dt could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
*/

public function excel($id = null){
	if (!$this->JuhacchuuDt->exists($id)) {
		throw new NotFoundException(__('Invalid juhacchuu dt'));
	}
	//レイアウトは使わない
	$this->layout = '';
	//$this->layout = false; でもOK！
	
	//DBのデータを読み込む
	$options = array('conditions' => array('JuhacchuuDt.' . $this->JuhacchuuDt->primaryKey => $id));
	$data = $this->JuhacchuuDt->find('first', $options);

	// Excel出力用ライブラリ
	App::import('Vendor', 'PHPExcel', array('file'=>'phpexcel' . DS . 'PHPExcel.php'));
	App::import('Vendor', 'PHPExcel_IOFactory', array('file'=>'phpexcel' . DS . 'PHPExcel' . DS . 'IOFactory.php'));
	App::import('Vendor', 'PHPExcel_Cell_AdvancedValueBinder', array('file'=>'phpexcel' . DS . 'PHPExcel' . DS . 'Cell' . DS . 'AdvancedValueBinder.php'));
	 
	// Excel95用ライブラリ
	App::import('Vendor', 'PHPExcel_Writer_Excel5', array('file'=>'phpexcel' . DS . 'PHPExcel' . DS . 'Writer' . DS . 'Excel5.php'));
	App::import('Vendor', 'PHPExcel_Reader_Excel5', array('file'=>'phpexcel' . DS . 'PHPExcel' . DS . 'Reader' . DS . 'Excel5.php'));
	
	//PHPExcelオブジェクトの作成
	//新規の場合
	//$PHPExcel = new PHPExcel();
	 
	//テンプレートの読み込み
	$objReader = PHPExcel_IOFactory::createReader("Excel5");
	//テンプレートファイルフルパス
	$template = realpath(TMP);
	$template .= DS . 'excel' . DS;
	$template_path = $template . "template.xls";
	$PHPExcel = $objReader->load($template_path);
	
	//表紙への入力
	//シートの設定
	$PHPExcel->setActiveSheetIndex(0);  //0はsheet1(一番左のシート)
	$sheet = $PHPExcel->getActiveSheet();
	$sheet->setCellValue('AV2', '_'.$data['JuhacchuuDt']['id'].'_'); //伝票№
	$sheet->setCellValue('A2', $data['TorihikisakiMr']['name']); //宛先名称
	$keishou = $this->KeishouKbn->findById($data['TorihikisakiMr']['keishou_kbn_id']);
	$sheet->setCellValue('A3', $data['TorihikisakiMr']['tantou_bumon'].' '.$data['TorihikisakiMr']['yakushoku'].' '.$data['TorihikisakiMr']['tantousha_mei'].' '.$keishou['KeishouKbn']['keishou']); //宛先名称
	$sheet->setCellValue('A4', '〒 '.$data['TorihikisakiMr']['yuubin_bangou']); //宛先〒番号
	$sheet->setCellValue('A5', $data['TorihikisakiMr']['juusho1']); //宛先住所
	$sheet->setCellValue('A6', $data['TorihikisakiMr']['juusho1']); //宛先住所2
	$sheet->setCellValue('A7', 'TEL '.$data['TorihikisakiMr']['tel'].'  FAX '.$data['TorihikisakiMr']['fax']); //宛先TEL+FAX
	$sheet->setCellValue('Z12', $data['ShukkaTorihikisakiMr']['name']); //出荷先名称
	$sheet->setCellValue('Z13', '〒 '.$data['ShukkaTorihikisakiMr']['yuubin_bangou']); //出荷先〒番号
	$sheet->setCellValue('AG13', 'TEL '.$data['ShukkaTorihikisakiMr']['tel']); //出荷先TEL+FAX
	$sheet->setCellValue('Z14', $data['ShukkaTorihikisakiMr']['juusho1'].' '.$data['ShukkaTorihikisakiMr']['juusho2']); //出荷先住所
	$sheet->setCellValue('AP12', $data['KitukeTorihikisakiMr']['name']); //気付先名称
	$sheet->setCellValue('Z8', substr($data['JuhacchuuDt']['bi'],0,4)); //依頼年
	$sheet->setCellValue('AC8', substr($data['JuhacchuuDt']['bi'],5,2)); //依頼月
	$sheet->setCellValue('AE8', substr($data['JuhacchuuDt']['bi'],8,2)); //依頼日
	$sheet->setCellValue('AU8', $data['User']['name']); //入力担当者名
	$sheet->setCellValue('B31', $data['JuhacchuuDt']['bikou']); //備考
	$i = 12; //EXCELの明細開始行
	foreach($data['JuhacchuuMeisaiDt'] as $juhacchuuMeisaiDt) {
		$sheet->setCellValue('A'.$i, $juhacchuuMeisaiDt['hinmoku_mei']); //品目名
		$sheet->setCellValue('M'.$i, $juhacchuuMeisaiDt['lot']); //品目名
		$tanni = $this->TanniMr->findById($juhacchuuMeisaiDt['tanni_mr_id']);
		$sheet->setCellValue('R'.$i, $juhacchuuMeisaiDt['suu'].$tanni['TanniMr']['kigou']); //数量
		$tanni = $this->TanniMr->findById($juhacchuuMeisaiDt['tanni_mr2_id']);
		$sheet->setCellValue('V'.$i, $juhacchuuMeisaiDt['suu2'].$tanni['TanniMr']['kigou']); //数量2
		$sheet->setCellValue('AW'.$i, str_replace('-','/',substr($juhacchuuMeisaiDt['nouki'],5,5))); //納期
		$i += 3;
	}//end foreach
	
	// Excelファイルの保存 ------------------------------------------  
	
	//保存ファイル名
	$filename = "output.xls";
	
	// 保存ファイルパス = realpath(TMP).DS.'excel'.DS.'output.xls'
	$upload = realpath( TMP );
	$upload .= DS . 'excel' . DS;
	$path = $upload . $filename;
	
	$objWriter = new PHPExcel_Writer_Excel5( $PHPExcel );   //2003形式で保存
	$objWriter->save( $path );
	
	// Excelファイルをクライアントに出力 ----------------------------
	//保存をしてから出力
	Configure::write('debug', 0);       // debugコードを非表示
	//header("Content-disposition: attachment; filename={$filename}");  
	//header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet; name={$filename}");  
	  
	//$result = file_get_contents( $path );   // ダウンロードするデータの取得  
	//print( $result );                       // 出力  
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename={$filename}");
	readfile( $path );
}

}
