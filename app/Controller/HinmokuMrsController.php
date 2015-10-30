<?php
App::uses('AppController', 'Controller');
/**
 * HinmokuMrs Controller
 *
 */
class HinmokuMrsController extends AppController {

/**
 *  Layout
 *
 * @var string
 */
	public $layout = 'bootstrap';

	public $components = array('Paginator', 'Flash', 'Session', 'RequestHandler');

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;


/**
 * Popup
 */
	public function popup() {
		//リクエストがPOSTで送られたデータが空白で無ければ
		if($this->request->is('post') && $this->request->data['HinmokuMr']['search'] != ''){
			//Formの値を取得
			$search = $this->request->data['HinmokuMr']['search'];
			//検索文字を空白（全角又は半角）で区切って配列$keywordsに代入
			$keywords = preg_split('/  |\\s/',$search);
			//配列$keywordsの数だけ繰り返して検索条件を$conditionsに代入
			foreach($keywords as $keyword){
				$conditions[] = "HinmokuMr.name like '%$keyword%'";
				$conditions[] = "HinmokuMr.code like '%$keyword%'";
			}
			//POSTされたデータを曖昧検索
			/*   $data=$this->User->find('all',array(
			'conditions' => $conditions
			));
			$this->set('users',$data);
			*/
		}else{
			//POST以外の場合
			//一覧表示
			/*  $data=$this->Post->find('all');
			$this->set('users',$data);
			*/
			$conditions='';
		}
 
		$this->layout = 'popup';
		$this->Paginator->settings = array('limit' => 10);
		$this->HinmokuMr->recursive = 0;
		$this->set('hinmoku_mrs', $this->Paginator->paginate($conditions));
	}
/**
 * ajaxget
 */
	public function ajaxget() {
		$this->autoRender = false;
		$this->HinmokuMr->recursive = -1;
		Configure::write('debug',0);
		$hinmoku_code = (isset($_POST['hinmoku_code']))? h($_POST['hinmoku_code']) : "";
//		echo $hinmoku_code.'BbBbBb';
//		if($this->RequestHandler->isAjax()){
//			echo $hinmoku_code.'BbBbBb';
			// get student info.
			$options = array('conditions' => array('HinmokuMr.code' => $hinmoku_code));
			$hinmoku_mr = $this->HinmokuMr->find('first', $options);
//			echo $hinmoku_mr['HinmokuMr']['name'];
			echo json_encode($hinmoku_mr);
/*			// viewにはjson形式のファイルを表示させるように。
			$this->layout = 'ajax';
			$this->RequestHandler->setContent('json');
			$this->RequestHandler->respondAs('application/json; charset=UTF-8');
	
			// $studentsの配列をviewに渡す。
			$this->set('hinmoku_mr', $hinmoku_mr);
*/		}
//	}
/**
 * ajaxgetid
 */
	public function ajaxgetid() {
		$this->autoRender = false;
		$this->HinmokuMr->recursive = -1;
		Configure::write('debug',0);
		$hinmoku_id = (isset($_POST['hinmoku_id']))? h($_POST['hinmoku_id']) : 0;
		$options = array('conditions' => array('HinmokuMr.id' => $hinmoku_id));
		$hinmoku_mr = $this->HinmokuMr->find('first', $options);
		echo json_encode($hinmoku_mr);
	}

}
