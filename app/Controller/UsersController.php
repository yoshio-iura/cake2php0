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
 *  Layout
 *
 * @var string
 */
	public $layout = 'bootstrap';

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
			$this->write_log('User');
		        return $this->redirect($this->Auth->redirect('../juhacchuu_dts/add'));
		    } else {
		        $this->Session->setFlash(__('Username or password is incorrect'), 'default', array(), 'auth');
		    }
		}
	}
	
	public function logout() {
		$this->write_log('User');
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
		$themeMrs = $this->User->ThemeMr->find('list');
		$torihikisakiMrs = $this->User->TorihikisakiMr->find('list');
		$shokushuKbns = $this->User->ShokushuKbn->find('list');
		$shouninKengenMrs = $this->User->ShouninKengenMr->find('list');
		$this->set(compact('bumonMrs', 'themeMrs', 'torihikisakiMrs', 'shokushuKbns', 'shouninKengenMrs'));
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
		$themeMrs = $this->User->ThemeMr->find('list');
		$torihikisakiMrs = $this->User->TorihikisakiMr->find('list');
		$shokushuKbns = $this->User->ShokushuKbn->find('list');
		$shouninKengenMrs = $this->User->ShouninKengenMr->find('list');
		$this->set(compact('bumonMrs', 'themeMrs', 'torihikisakiMrs', 'shokushuKbns', 'shouninKengenMrs'));
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

	public function popup() {
 //リクエストがPOSTで送られたデータが空白で無ければ
   if($this->request->is('post') && $this->request->data['User']['search'] != ''){
      //Formの値を取得
      $search = $this->request->data['User']['search'];
       //検索文字を空白（全角又は半角）で区切って配列$keywordsに代入
       $keywords = preg_split('/  |\\s/',$search);
      //配列$keywordsの数だけ繰り返して検索条件を$conditionsに代入
      foreach($keywords as $keyword){
          $conditions[] = "User.name like '%$keyword%'";
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
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate($conditions));
	}

	public function ajaxget() {
		$this->autoRender = false;
		Configure::write('debug',0);
		echo 'BbBbBb';
	}

}
