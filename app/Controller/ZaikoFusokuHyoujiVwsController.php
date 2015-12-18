<?php
App::uses('AppController', 'Controller');
/**
 * ZaikoFusokuHyoujiVws Controller
 *
 * @property ZaikoFusokuHyoujiVw $ZaikoFusokuHyoujiVw
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ZaikoFusokuHyoujiVwsController extends AppController {

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
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ZaikoFusokuHyoujiVw->recursive = 0;

		$this->Prg->commonProcess();
		$this->paginate = array(
			'conditions' => $this->ZaikoFusokuHyoujiVw->parseCriteria($this->passedArgs),
			//'limit' => 10,
		);
		$hinmokuKbns = $this->ZaikoFusokuHyoujiVw->HinmokuMr->HinmokuKbn->find('list');
		$this->set(compact('hinmokuKbns'));

		$this->set('zaikoFusokuHyoujiVws', $this->Paginator->paginate());
		//�Q�l�F http://mawatari.jp/archives/introduction-of-cakedc-search-plugin-for-cakephp
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ZaikoFusokuHyoujiVw->id = $id;
		if (!$this->ZaikoFusokuHyoujiVw->exists()) {
			throw new NotFoundException(__('Invalid %s', __('zaiko fusoku hyouji vw')));
		}
		$this->set('zaikoFusokuHyoujiVw', $this->ZaikoFusokuHyoujiVw->read(null, $id));
	}

/**
 * Popup
 *	�Q�l�F http://hijiriworld.com/web/cakephp-search-plugin/
 */
	public function popup() {
		$this->ZaikoFusokuHyoujiVw->recursive = 0;

		$this->Prg->commonProcess();
		$this->paginate = array(
			'conditions' => $this->ZaikoFusokuHyoujiVw->parseCriteria($this->passedArgs),
			'limit' => 10,
		);

		$hinmokuKbns = $this->ZaikoFusokuHyoujiVw->HinmokuMr->HinmokuKbn->find('list');
		$this->set(compact('hinmokuKbns'));

		$this->set('zaikoFusokuHyoujiVws', $this->Paginator->paginate());
		$this->layout = 'popup';
	}

}
