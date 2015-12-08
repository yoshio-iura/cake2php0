<?php
App::uses('AppController', 'Controller');
/**
 * TorihikisakiMrs Controller
 *
 */
class TorihikisakiMrsController extends AppController {

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


	public $components = array('Paginator', 'Flash', 'Session', 'RequestHandler');
	
/**
 * Popup
 */
	public function popup() {
		//リクエストがPOSTで送られたデータが空白で無ければ
		if($this->request->is('post') && $this->request->data['TorihikisakiMr']['search'] != ''){
			//Formの値を取得
			$search = $this->request->data['TorihikisakiMr']['search'];
			//検索文字を空白（全角又は半角）で区切って配列$keywordsに代入
			$keywords = preg_split('/  |\\s/',$search);
			//配列$keywordsの数だけ繰り返して検索条件を$conditionsに代入
			foreach($keywords as $keyword){
				$conditions[] = "TorihikisakiMr.name like '%$keyword%'";
				$conditions[] = "TorihikisakiMr.code like '%$keyword%'";
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
		$this->TorihikisakiMr->recursive = 0;
		$this->set('torihikisaki_mrs', $this->Paginator->paginate($conditions));
	}

/**
 * BootstrapDialogPopup
 */
	public function btpopup() {
		//リクエストがPOSTで送られたデータが空白で無ければ
		if($this->request->is('post') && $this->request->data['TorihikisakiMr']['search'] != ''){
			//Formの値を取得
			$search = $this->request->data['TorihikisakiMr']['search'];
			//検索文字を空白（全角又は半角）で区切って配列$keywordsに代入
			$keywords = preg_split('/  |\\s/',$search);
			//配列$keywordsの数だけ繰り返して検索条件を$conditionsに代入
			foreach($keywords as $keyword){
				$conditions[] = "TorihikisakiMr.name like '%$keyword%'";
				$conditions[] = "TorihikisakiMr.code like '%$keyword%'";
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
		$this->TorihikisakiMr->recursive = 0;
		$this->set('torihikisaki_mrs', $this->Paginator->paginate($conditions));
	}

/**
 * ajaxget
 */
	public function ajaxget() {
		$this->autoRender = false;
		$this->TorihikisakiMr->recursive = -1;
		Configure::write('debug',0);
		$torihikisaki_code = (isset($_POST['torihikisaki_code']))? h($_POST['torihikisaki_code']) : "";
//		echo $torihikisaki_code.'BbBbBb';
//		if($this->RequestHandler->isAjax()){
//			echo $torihikisaki_code.'BbBbBb';
			// get student info.
			$options = array('conditions' => array('TorihikisakiMr.code' => $torihikisaki_code));
			$torihikisaki_mr = $this->TorihikisakiMr->find('first', $options);
//			echo $torihikisaki_mr['TorihikisakiMr']['name'];
			echo json_encode($torihikisaki_mr);
/*			// viewにはjson形式のファイルを表示させるように。
			$this->layout = 'ajax';
			$this->RequestHandler->setContent('json');
			$this->RequestHandler->respondAs('application/json; charset=UTF-8');
	
			// $studentsの配列をviewに渡す。
			$this->set('torihikisaki_mr', $torihikisaki_mr);
*/		}
//	}

/**
 * ajaxgetid
 */
	public function ajaxgetid() {
		$this->autoRender = false;
		$this->TorihikisakiMr->recursive = -1;
		Configure::write('debug',0);
		$torihikisaki_id = (isset($_POST['torihikisaki_id']))? h($_POST['torihikisaki_id']) : 0;
		$options = array('conditions' => array('TorihikisakiMr.id' => $torihikisaki_id));
		$torihikisaki_mr = $this->TorihikisakiMr->find('first', $options);
		echo json_encode($torihikisaki_mr);
	}
}
