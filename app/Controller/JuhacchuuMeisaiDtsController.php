<?php
App::uses('AppController', 'Controller');
/**
 * JuhacchuuMeisaiDts Controller
 *
 * @property JuhacchuuMeisaiDt $JuhacchuuMeisaiDt
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class JuhacchuuMeisaiDtsController extends AppController {

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
	public $components = array('Paginator', 'Flash', 'Session');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->JuhacchuuMeisaiDt->recursive = 0;
		$this->set('juhacchuuMeisaiDts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->JuhacchuuMeisaiDt->id = $id;
		if (!$this->JuhacchuuMeisaiDt->exists()) {
			throw new NotFoundException(__('Invalid %s', __('juhacchuu meisai dt')));
		}
		$this->set('juhacchuuMeisaiDt', $this->JuhacchuuMeisaiDt->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->JuhacchuuMeisaiDt->create();
			if ($this->JuhacchuuMeisaiDt->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('juhacchuu meisai dt')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('juhacchuu meisai dt')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		}
		$juhacchuuDts = $this->JuhacchuuMeisaiDt->JuhacchuuDt->find('list');
		$tanniMrs = $this->JuhacchuuMeisaiDt->TanniMr->find('list');
		$tanniMr2s = $this->JuhacchuuMeisaiDt->TanniMr2->find('list');
		$bashoTanaSoukoMrs = $this->JuhacchuuMeisaiDt->BashoTanaSoukoMr->find('list');
		$this->set(compact('juhacchuuDts', 'tanniMrs', 'tanniMr2s', 'bashoTanaSoukoMrs'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->JuhacchuuMeisaiDt->id = $id;
		if (!$this->JuhacchuuMeisaiDt->exists()) {
			throw new NotFoundException(__('Invalid %s', __('juhacchuu meisai dt')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->JuhacchuuMeisaiDt->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('juhacchuu meisai dt')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('juhacchuu meisai dt')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->JuhacchuuMeisaiDt->read(null, $id);
		}
		$juhacchuuDts = $this->JuhacchuuMeisaiDt->JuhacchuuDt->find('list');
		$tanniMrs = $this->JuhacchuuMeisaiDt->TanniMr->find('list');
		$tanniMr2s = $this->JuhacchuuMeisaiDt->TanniMr2->find('list');
		$bashoTanaSoukoMrs = $this->JuhacchuuMeisaiDt->BashoTanaSoukoMr->find('list');
		$this->set(compact('juhacchuuDts', 'tanniMrs', 'tanniMr2s', 'bashoTanaSoukoMrs'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->JuhacchuuMeisaiDt->id = $id;
		if (!$this->JuhacchuuMeisaiDt->exists()) {
			throw new NotFoundException(__('Invalid %s', __('juhacchuu meisai dt')));
		}
		if ($this->JuhacchuuMeisaiDt->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('juhacchuu meisai dt')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('juhacchuu meisai dt')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}

}
