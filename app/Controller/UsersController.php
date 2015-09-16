<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');


	public function beforeFilter() {
	/*	if ($this->action == 'add' || $this->action == 'edit') {
	*		$this->Appauth->authenticate = $this->User; //
	*	}
	*/
		if ($this->User->find('count') == 0) {
			$this->Auth->allow('add');
			if ($this->action != 'add') {
				$this->redirect('add');
				exit;
			}
		}
		return parent::beforeFilter();
	}


	public function login() {
		if ($this->request->is('post')) {
		    if ($this->Auth->login()) {
		        return $this->redirect($this->Auth->redirect());
		    } else {
		        $this->Session->setFlash(__('Username or password is incorrect'), 'default', array(), 'auth');
		    }
		}
	}
	
	public function logout() {
		$this->redirect($this->Auth->logout());
	}




/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		}
		$bumonMrs = $this->User->BumonMr->find('list');
		$themaMrs = $this->User->ThemaMr->find('list');
		$torihikisakiMrs = $this->User->TorihikisakiMr->find('list');
		$shokushuKbns = $this->User->ShokushuKbn->find('list');
		$shouninKengenMrs = $this->User->ShouninKengenMr->find('list');
		$this->set(compact('bumonMrs', 'themaMrs', 'torihikisakiMrs', 'shokushuKbns', 'shouninKengenMrs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$bumonMrs = $this->User->BumonMr->find('list');
		$themaMrs = $this->User->ThemaMr->find('list');
		$torihikisakiMrs = $this->User->TorihikisakiMr->find('list');
		$shokushuKbns = $this->User->ShokushuKbn->find('list');
		$shouninKengenMrs = $this->User->ShouninKengenMr->find('list');
		$this->set(compact('bumonMrs', 'themaMrs', 'torihikisakiMrs', 'shokushuKbns', 'shouninKengenMrs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Flash->success(__('The user has been deleted.'));
		} else {
			$this->Flash->error(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
