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

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');
	public $helpers = array('Js');
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
 */
	public function view($id = null) {
		if (!$this->JuhacchuuDt->exists($id)) {
			throw new NotFoundException(__('Invalid juhacchuu dt'));
		}
		$options = array('conditions' => array('JuhacchuuDt.' . $this->JuhacchuuDt->primaryKey => $id));
		$this->set('juhacchuuDt', $this->JuhacchuuDt->find('first', $options));
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
		if ($this->action == 'edit' && !$this->JuhacchuuDt->exists($id)) {
			throw new NotFoundException(__('Invalid juhacchuu dt'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if (!empty($this->request->data)) {
				unset($this->JuhacchuuDt->JuhacchuuMeisaiDt->validate['JuhacchuuDt_id']);	// バリデーションエラーを出さないため
				if ($this->JuhacchuuDt->save($this->request->data)) {
					$juhacchuu_dt_id=$this->JuhacchuuDt->getInsertId();
					foreach($this->request->data['JuhacchuuMeisaiDt'] as $juhacchuuMeisaiDt) {
						//loop for each person added
$this->Session->setFlash("juhacchuu_dt_id=$juhacchuu_dt_id"));
						$juhacchuuMeisaiDt['juhacchuu_dt_id']=$juhacchuu_dt_id;
						$this->JuhacchuuDt->JuhacchuuMeisaiDt->create();
						$this->JuhacchuuDt->JuhacchuuMeisaiDt->save($juhacchuuMeisaiDt);
					}//end foreach
				//	$this->Session->setFlash(__('The juhacchuu dt has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The juhacchuu dt could not be saved. Please, try again.'));
				}
			}
		} else {
			$options = array('conditions' => array('JuhacchuuDt.' . $this->JuhacchuuDt->primaryKey => $id));
			$this->request->data = $this->JuhacchuuDt->find('first', $options);
		}
		$torihikisakiMrs = $this->JuhacchuuDt->TorihikisakiMr->find('list');
		$shukkaTorihikisakiMrs = $this->JuhacchuuDt->ShukkaTorihikisakiMr->find('list');
		$kitukeTorihikisakiMrs = $this->JuhacchuuDt->KitukeTorihikisakiMr->find('list');
		$users = $this->JuhacchuuDt->User->find('list');
		$bumonMrs = $this->JuhacchuuDt->BumonMr->find('list');
		$juchuuDts = $this->JuhacchuuDt->JuchuuDt->find('list');
		$bashoTanaSoukoMrs = $this->JuhacchuuDt->BashoTanaSoukoMr->find('list');
		$this->set(compact('torihikisakiMrs', 'shukkaTorihikisakiMrs', 'kitukeTorihikisakiMrs', 'users', 'bumonMrs', 'juchuuDts', 'bashoTanaSoukoMrs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
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
}
