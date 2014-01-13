<?php
App::uses('AppController', 'Controller');
/**
 * DboMCompanies Controller
 *
 * @property DboMCompany $DboMCompany
 * @property PaginatorComponent $Paginator
 */
class DboMCompaniesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	function beforeFilter() {
		// 管理者ユーザがいない場合は一覧と追加のみ表示
		//$this->Auth->allow('index','add');
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DboMCompany->exists($id)) {
			throw new NotFoundException(__('Invalid dbo m company'));
		}
		$options = array('conditions' => array('DboMCompany.' . $this->DboMCompany->primaryKey => $id));
		$this->set('dboMCompany', $this->DboMCompany->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DboMCompany->create();
			if ($this->DboMCompany->save($this->request->data)) {
				$this->Session->setFlash(__('The dbo m company has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo m company could not be saved. Please, try again.'));
			}
		}
		$dboMBanks = $this->DboMCompany->DboMBanks->find('list');

		$this->set(compact('dboMBanks'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DboMCompany->exists($id)) {
			throw new NotFoundException(__('Invalid dbo m company'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DboMCompany->save($this->request->data)) {
				$this->Session->setFlash(__('The dbo m company has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo m company could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DboMCompany.' . $this->DboMCompany->primaryKey => $id));
			$this->request->data = $this->DboMCompany->find('first', $options);
		}
		$dboMBanks = $this->DboMCompany->DboMBank->find('list');
		$this->set(compact('dboMBanks'));
	}
	
	
	// 2014-01-06 Shimizu Start [Add]
	public function index(){
		
	}
	// 2014-01-06 Shimizu End
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DboMCompany->id = $id;
		if (!$this->DboMCompany->exists()) {
			throw new NotFoundException(__('Invalid dbo m company'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DboMCompany->delete()) {
			$this->Session->setFlash(__('The dbo m company has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dbo m company could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
