<?php
App::uses('AppController', 'Controller');
/**
 * TorihikisakiMrs Controller
 *
 * @property TorihikisakiMr $TorihikisakiMr
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class TorihikisakiMrsController extends AppController {

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
		$this->TorihikisakiMr->recursive = 0;
		$this->set('torihikisakiMrs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TorihikisakiMr->exists($id)) {
			throw new NotFoundException(__('Invalid torihikisaki mr'));
		}
		$options = array('conditions' => array('TorihikisakiMr.' . $this->TorihikisakiMr->primaryKey => $id));
		$this->set('torihikisakiMr', $this->TorihikisakiMr->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TorihikisakiMr->create();
			if ($this->TorihikisakiMr->save($this->request->data)) {
				$this->Flash->success(__('The torihikisaki mr has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The torihikisaki mr could not be saved. Please, try again.'));
			}
		}
		$keishouKbns = $this->TorihikisakiMr->KeishouKbn->find('list');
		$shuugyouPatternMrs = $this->TorihikisakiMr->ShuugyouPatternMr->find('list');
		$users = $this->TorihikisakiMr->User->find('list');
		$groupOyaTorihikisakiMrs = $this->TorihikisakiMr->GroupOyaTorihikisakiMr->find('list');
		$siiresakiOyaTorihikisakiMrs = $this->TorihikisakiMr->SiiresakiOyaTorihikisakiMr->find('list');
		$seikyuuTorihikisakiMrs = $this->TorihikisakiMr->SeikyuuTorihikisakiMr->find('list');
		$kokyakuOyaTorihikisakiMrs = $this->TorihikisakiMr->KokyakuOyaTorihikisakiMr->find('list');
		$shainKazkuDaihyouTorihikisakiMrs = $this->TorihikisakiMr->ShainKazkuDaihyouTorihikisakiMr->find('list');
		$torihikisakiBunrui1Kbns = $this->TorihikisakiMr->TorihikisakiBunrui1Kbn->find('list');
		$torihikisakiBunrui2Kbns = $this->TorihikisakiMr->TorihikisakiBunrui2Kbn->find('list');
		$torihikisakiBunrui3Kbns = $this->TorihikisakiMr->TorihikisakiBunrui3Kbn->find('list');
		$torihikisakiBunrui4Kbns = $this->TorihikisakiMr->TorihikisakiBunrui4Kbn->find('list');
		$torihikisakiBunrui5Kbns = $this->TorihikisakiMr->TorihikisakiBunrui5Kbn->find('list');
		$this->set(compact('keishouKbns', 'shuugyouPatternMrs', 'users', 'groupOyaTorihikisakiMrs', 'siiresakiOyaTorihikisakiMrs', 'seikyuuTorihikisakiMrs', 'kokyakuOyaTorihikisakiMrs', 'shainKazkuDaihyouTorihikisakiMrs', 'torihikisakiBunrui1Kbns', 'torihikisakiBunrui2Kbns', 'torihikisakiBunrui3Kbns', 'torihikisakiBunrui4Kbns', 'torihikisakiBunrui5Kbns'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TorihikisakiMr->exists($id)) {
			throw new NotFoundException(__('Invalid torihikisaki mr'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TorihikisakiMr->save($this->request->data)) {
				$this->Flash->success(__('The torihikisaki mr has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The torihikisaki mr could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TorihikisakiMr.' . $this->TorihikisakiMr->primaryKey => $id));
			$this->request->data = $this->TorihikisakiMr->find('first', $options);
		}
		$keishouKbns = $this->TorihikisakiMr->KeishouKbn->find('list');
		$shuugyouPatternMrs = $this->TorihikisakiMr->ShuugyouPatternMr->find('list');
		$users = $this->TorihikisakiMr->User->find('list');
		$groupOyaTorihikisakiMrs = $this->TorihikisakiMr->GroupOyaTorihikisakiMr->find('list');
		$siiresakiOyaTorihikisakiMrs = $this->TorihikisakiMr->SiiresakiOyaTorihikisakiMr->find('list');
		$seikyuuTorihikisakiMrs = $this->TorihikisakiMr->SeikyuuTorihikisakiMr->find('list');
		$kokyakuOyaTorihikisakiMrs = $this->TorihikisakiMr->KokyakuOyaTorihikisakiMr->find('list');
		$shainKazkuDaihyouTorihikisakiMrs = $this->TorihikisakiMr->ShainKazkuDaihyouTorihikisakiMr->find('list');
		$torihikisakiBunrui1Kbns = $this->TorihikisakiMr->TorihikisakiBunrui1Kbn->find('list');
		$torihikisakiBunrui2Kbns = $this->TorihikisakiMr->TorihikisakiBunrui2Kbn->find('list');
		$torihikisakiBunrui3Kbns = $this->TorihikisakiMr->TorihikisakiBunrui3Kbn->find('list');
		$torihikisakiBunrui4Kbns = $this->TorihikisakiMr->TorihikisakiBunrui4Kbn->find('list');
		$torihikisakiBunrui5Kbns = $this->TorihikisakiMr->TorihikisakiBunrui5Kbn->find('list');
		$this->set(compact('keishouKbns', 'shuugyouPatternMrs', 'users', 'groupOyaTorihikisakiMrs', 'siiresakiOyaTorihikisakiMrs', 'seikyuuTorihikisakiMrs', 'kokyakuOyaTorihikisakiMrs', 'shainKazkuDaihyouTorihikisakiMrs', 'torihikisakiBunrui1Kbns', 'torihikisakiBunrui2Kbns', 'torihikisakiBunrui3Kbns', 'torihikisakiBunrui4Kbns', 'torihikisakiBunrui5Kbns'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TorihikisakiMr->id = $id;
		if (!$this->TorihikisakiMr->exists()) {
			throw new NotFoundException(__('Invalid torihikisaki mr'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TorihikisakiMr->delete()) {
			$this->Flash->success(__('The torihikisaki mr has been deleted.'));
		} else {
			$this->Flash->error(__('The torihikisaki mr could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
