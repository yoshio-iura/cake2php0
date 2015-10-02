<?php
App::uses('AppController', 'Controller');
/**
 * HacchuuDts Controller
 *
 * @property HacchuuDt $HacchuuDt
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class HacchuuDtsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->HacchuuDt->recursive = 0;
		$this->set('hacchuuDts', $this->Paginator->paginate());
	}

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
		if ($this->action == 'edit' && !$this->HacchuuDt->exists($id)) {
			throw new NotFoundException(__('Invalid hacchuu dt'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if (!empty($this->request->data)) {
				unset($this->HacchuuDt->HacchuuMeisaiDt->validate['HacchuuDt_id']);	// バリデーションエラーを出さないため
				if ($this->HacchuuDt->saveAll($this->request->data)) {
					$this->Session->setFlash(__('The hacchuu dt has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The hacchuu dt could not be saved. Please, try again.'));
				}
			}
		} else {
			$options = array('conditions' => array('HacchuuDt.' . $this->HacchuuDt->primaryKey => $id));
			$this->request->data = $this->HacchuuDt->find('first', $options);
		}
		$torihikisakiMrs = $this->HacchuuDt->TorihikisakiMr->find('list');
		$users = $this->HacchuuDt->User->find('list');
		$bumonMrs = $this->HacchuuDt->BumonMr->find('list');
		$juchuuDts = $this->HacchuuDt->JuchuuDt->find('list');
		$bashoTanaSoukoMrs = $this->HacchuuDt->BashoTanaSoukoMr->find('list');
		$hinmokuMrs = $this->HacchuuDt->HacchuuMeisaiDt->HinmokuMr->find('list');
		$tanniMrs = $this->HacchuuDt->HacchuuMeisaiDt->TanniMr->find('list');
		$this->set(compact('torihikisakiMrs', 'users', 'bumonMrs', 'juchuuDts', 'bashoTanaSoukoMrs', 'hinmokuMrs', 'tanniMrs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->HacchuuDt->id = $id;
		if (!$this->HacchuuDt->exists()) {
			throw new NotFoundException(__('Invalid hacchuu dt'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->HacchuuDt->delete()) {
			$this->Session->setFlash(__('The hacchuu dt has been deleted.'));
		} else {
			$this->Session->setFlash(__('The hacchuu dt could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HacchuuDt->exists($id)) {
			throw new NotFoundException(__('Invalid hacchuu dt'));
		}
		$options = array('conditions' => array('HacchuuDt.' . $this->HacchuuDt->primaryKey => $id));
		$this->set('hacchuuDt', $this->HacchuuDt->find('first', $options));
	}
}
