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
		);
		$hinmokuKbns = $this->ZaikoFusokuHyoujiVw->HinmokuMr->HinmokuKbn->find('list');
		$this->set(compact('hinmokuKbns'));

		$this->set('zaikoFusokuHyoujiVws', $this->Paginator->paginate());
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
 */
	public function popup() {
		$this->ZaikoFusokuHyoujiVw->recursive = 0;

		$this->Prg->commonProcess();
		$this->paginate = array(
			'conditions' => $this->ZaikoFusokuHyoujiVw->parseCriteria($this->passedArgs),
		);
 
		$hinmokuKbns = $this->ZaikoFusokuHyoujiVw->HinmokuMr->HinmokuKbn->find('list');
		$this->set(compact('hinmokuKbns'));

		$this->set('zaikoFusokuHyoujiVws', $this->Paginator->paginate());
		$this->Paginator->settings = array('limit' => 10);
		$this->layout = 'popup';
	}

}
