<?php
App::uses('AppController', 'Controller');
/**
 * DboMClients Controller
 *
 * @property DboMClient $DboMClient
 * @property PaginatorComponent $Paginator
 */
class DboMClientsController extends AppController {

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
		$this->DboMClient->recursive = 0;
		$this->set('dboMClients', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DboMClient->exists($id)) {
			throw new NotFoundException(__('Invalid dbo m client'));
		}
		$options = array('conditions' => array('DboMClient.' . $this->DboMClient->primaryKey => $id));
		$this->set('dboMClient', $this->DboMClient->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DboMClient->create();
			if ($this->DboMClient->save($this->request->data)) {
				$this->Session->setFlash(__('The dbo m client has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo m client could not be saved. Please, try again.'));
			}
		}
		$dboMDays1 = $this->DboMClient->DboMDays1->find('list');
		$dboMDays2 = $this->DboMClient->DboMDays2->find('list');
		$dboMCompanies = $this->DboMClient->DboMCompanies->find('list');
		$this->set(compact('dboMDays1', 'dboMDays2', 'dboMCompanies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DboMClient->exists($id)) {
			throw new NotFoundException(__('Invalid dbo m client'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DboMClient->save($this->request->data)) {
				$this->Session->setFlash(__('The dbo m client has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo m client could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DboMClient.' . $this->DboMClient->primaryKey => $id));
			$this->request->data = $this->DboMClient->find('first', $options);
		}
		$dboMDays1 = $this->DboMClient->DboMDays1->find('list');
		$dboMDays2 = $this->DboMClient->DboMDays2->find('list');
		$dboMCompanies = $this->DboMClient->DboMCompanies->find('list');
		$this->set(compact('dboMDays1', 'dboMDays2', 'dboMCompanies'));
			}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DboMClient->id = $id;
		if (!$this->DboMClient->exists()) {
			throw new NotFoundException(__('Invalid dbo m client'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DboMClient->delete()) {
			$this->Session->setFlash(__('The dbo m client has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dbo m client could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
