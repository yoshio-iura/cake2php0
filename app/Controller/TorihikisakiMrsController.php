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
 * Helpers
 *
 * @var array
 */
	public $helpers = array('TwitterBootstrap.BootstrapHtml', 'TwitterBootstrap.BootstrapForm', 'TwitterBootstrap.BootstrapPaginator');
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session', 'Search.Prg');
	public $presetVars = true;
/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;
/**
 * Popup
 *	参考： http://hijiriworld.com/web/cakephp-search-plugin/
 */
	public function popup() {
		$this->TorihikisakiMr->recursive = 0;

		$this->Prg->commonProcess();
		$this->paginate = array(
			'conditions' => $this->TorihikisakiMr->parseCriteria($this->passedArgs),
			'limit' => 10,
		);

		$torihikisakiBunrui1Kbns = $this->TorihikisakiMr->TorihikisakiBunrui1Kbn->find('list');
		$this->set(compact('torihikisakiBunrui1Kbns'));

		$this->set('torihikisakiMrs', $this->Paginator->paginate());
		$this->layout = 'popup';
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
 * ajaxgetid 使わない！
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
