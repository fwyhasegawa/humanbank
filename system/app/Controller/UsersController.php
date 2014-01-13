<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');



//	public function beforeFilter()
//	{
//		// ハッシュ関数を『sha1』から『sha256』に変更
////		Security::setHash('sha256');
////		$this->Auth->allow(‘login’) ;
//
//		parent::beforeFilter();
//	}
	function beforeFilter() {
		// 管理者ユーザがいない場合は一覧と追加のみ表示
		//$this->Auth->allow('index','add');
	}

	public function login() {
print_r($this->request);
		if($this->request->is('post')) {		// データ取得、POST

//			if($this->Auth->login($this->request->data)){
			if($this->Auth->login()){
				$this->redirect($this->Auth->redirectUrl());
			}else{
				$this->Session->setFlash('ユーザー名またはパスワードが間違っています。');
			}
		}
	}

	public function logout($id = null)
	{
		$this->redirect($this->Auth->logout());
	}

	public function afterFilter() {
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
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$dboMManages = $this->User->DboMManages->find('list');
		$dboMCompanies = $this->User->DboMCompanies->find('list');
		$this->set(compact('dboMManages'));
		$this->set(compact('dboMCompanies'));
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
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$dboMManages = $this->User->DboMManage->find('list');
		$this->set(compact('dboMManages'));
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
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
