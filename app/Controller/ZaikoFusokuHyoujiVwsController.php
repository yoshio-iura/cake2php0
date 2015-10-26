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
	public $components = array('Paginator', 'Flash', 'Session');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ZaikoFusokuHyoujiVw->recursive = 0;
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
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ZaikoFusokuHyoujiVw->create();
			if ($this->ZaikoFusokuHyoujiVw->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('zaiko fusoku hyouji vw')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('zaiko fusoku hyouji vw')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ZaikoFusokuHyoujiVw->id = $id;
		if (!$this->ZaikoFusokuHyoujiVw->exists()) {
			throw new NotFoundException(__('Invalid %s', __('zaiko fusoku hyouji vw')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ZaikoFusokuHyoujiVw->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('zaiko fusoku hyouji vw')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('zaiko fusoku hyouji vw')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->ZaikoFusokuHyoujiVw->read(null, $id);
		}
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
		$this->ZaikoFusokuHyoujiVw->id = $id;
		if (!$this->ZaikoFusokuHyoujiVw->exists()) {
			throw new NotFoundException(__('Invalid %s', __('zaiko fusoku hyouji vw')));
		}
		if ($this->ZaikoFusokuHyoujiVw->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('zaiko fusoku hyouji vw')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('zaiko fusoku hyouji vw')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}

}
