<?php
App::uses('AppController', 'Controller');
/**
 * DboMBanks Controller
 *
 * @property DboMBank $DboMBank
 * @property PaginatorComponent $Paginator
 */
class DboMBanksController extends AppController {

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
		$this->DboMBank->recursive = 0;
		$this->set('dboMBanks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DboMBank->exists($id)) {
			throw new NotFoundException(__('Invalid dbo m bank'));
		}
		$options = array('conditions' => array('DboMBank.' . $this->DboMBank->primaryKey => $id));
		$this->set('dboMBank', $this->DboMBank->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DboMBank->create();
			if ($this->DboMBank->save($this->request->data)) {
				$this->Session->setFlash(__('The dbo m bank has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo m bank could not be saved. Please, try again.'));
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
		if (!$this->DboMBank->exists($id)) {
			throw new NotFoundException(__('Invalid dbo m bank'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DboMBank->save($this->request->data)) {
				$this->Session->setFlash(__('The dbo m bank has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo m bank could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DboMBank.' . $this->DboMBank->primaryKey => $id));
			$this->request->data = $this->DboMBank->find('first', $options);
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
		$this->DboMBank->id = $id;
		if (!$this->DboMBank->exists()) {
			throw new NotFoundException(__('Invalid dbo m bank'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DboMBank->delete()) {
			$this->Session->setFlash(__('The dbo m bank has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dbo m bank could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
