<?php
App::uses('AppController', 'Controller');
/**
 * DboMManeges Controller
 *
 * @property DboMManage $DboMManage
 * @property PaginatorComponent $Paginator
 */
class DboMManagesController extends AppController {

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
	public function index() {
		$this->DboMManage->recursive = 0;
		$this->set('dboMManages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DboMManage->exists($id)) {
			throw new NotFoundException(__('Invalid dbo m Manage'));
		}
		$options = array('conditions' => array('DboMManage.' . $this->DboMManage->primaryKey => $id));
		$this->set('dboMManage', $this->DboMManage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DboMManage->create();
			if ($this->DboMManage->save($this->request->data)) {
				$this->Session->setFlash(__('The dbo m Manage has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo m Manage could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DboMManage->exists($id)) {
			throw new NotFoundException(__('Invalid dbo m Manage'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DboMManage->save($this->request->data)) {
				$this->Session->setFlash(__('The dbo m Manage has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo m Manage could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DboMManage.' . $this->DboMManage->primaryKey => $id));
			$this->request->data = $this->DboMManage->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DboMManage->id = $id;
		if (!$this->DboMManage->exists()) {
			throw new NotFoundException(__('Invalid dbo m Manage'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DboMManage->delete()) {
			$this->Session->setFlash(__('The dbo m Manage has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dbo m Manage could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
