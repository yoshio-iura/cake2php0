<?php
App::uses('AppController', 'Controller');
/**
 * Histories Controller
 *
 * @property History $History
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class HistoriesController extends AppController {

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
	public function admin_index() {
		$this->History->recursive = 0;

		$this->Prg->commonProcess();
		$this->paginate = array(
			'conditions' => $this->History->parseCriteria($this->passedArgs),
		);
		$users = $this->History->User->find('list');
		$this->set(compact('users'));

		$this->set('histories', $this->Paginator->paginate());
	}

}
