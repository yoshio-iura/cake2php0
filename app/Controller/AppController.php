<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $components = array(
//		'DebugKit.Toolbar',
		'Session',
		'Auth' => array(
			'loginAction' => array('controller' => 'users', 'action' => 'login', 'admin'=>true),	// ログインページのパス
			'loginRedirect' => array('controller' => 'users', 'action' => 'index'),		// ログイン後のページを指定
			'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),	// ログアウト後の移動先
			'authError' => 'ログインして使用して下さい。',		//復活20150917iura//削除20150917s.m.//未ログイン時のメッセージ
		)
	); //認証でここまで追加

	function beforeFilter() {
		$this->Auth->allow('login', 'logout');//追加20150917s.m.
		$this->set('loginUser', $this->Auth->user());
		return parent::beforeFilter();
	}

	//http://blog.s-giken.net/102.html
	function write_log($model){
		//$ip = $this->request->clientIp(false);
		$data = array(
			'user_id' => ''.$this->Auth->user('id'),
			'created' => date('Y-m-d H:i:s'),
			'gamen_page' => ''.env('REQUEST_URI'),//$systemName,
			'from_page'  => ''.env('HTTP_REFERER'),//$level,
			'pc_ip' => ''.env('REMOTE_ADDR'),//$ip,
			'browser' => ''.env('HTTP_USER_AGENT'),//$message,
		);
		if	( $model == 'User' ) {
			$this->User->History->create();
			$this->User->History->save($data);
		}elseif	( $model == 'JuhacchuuDt' ) {
			$this->JuhacchuuDt->History->create();
			$this->JuhacchuuDt->History->save($data);
		}
	}

 public $helpers = array(
	 		'Session',
	 		'Html' => array('className' => 'TwitterBootstrap.BootstrapHtml'),
	 		'Form' => array('className' => 'TwitterBootstrap.BootstrapForm'),
	 		'Paginator' => array('className' => 'TwitterBootstrap.BootstrapPaginator'),
	 );
	 	public $layout = 'bootstrap';


}
