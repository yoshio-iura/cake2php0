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
			if (!empty($this->request->data)) {
				unset($this->JuhacchuuDt->JuhacchuuMeisaiDt->validate['JuhacchuuDt_id']);	// バリデーションエラーを出さないため
				if ($this->JuhacchuuDt->saveAll($this->request->data, array('deep' => true))) {
					$this->Session->setFlash(__('The juhacchuu dt has been saved.'), 'default', array('class' => 'alert alert-success'));
					return $this->redirect(array('action' => ($this->action=='edit')?'index':'add'));
				} else {
					$this->Session->setFlash(__('The juhacchuu dt could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
				}
			}
		} else {
			$options = array('conditions' => array('JuhacchuuDt.' . $this->JuhacchuuDt->primaryKey => $id));
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

public function excel(){
    //レイアウトは使わない
    $this->layout = '';
    //$this->layout = false; でもOK！
 
   //DBのデータを読み込む
   $data = $this->JuhacchuuDt->find('all');
   $this->set('data', $data);
}

}
