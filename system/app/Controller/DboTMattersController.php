<?php
App::uses('AppController', 'Controller');
/**
 * DboTMatters Controller
 *
 * @property DboTMatter $DboTMatter
 * @property PaginatorComponent $Paginator
 * @property PaginatorComponent $Paginator
 */
class DboTMattersController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Html', 'Form');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DboTMatter->recursive = 0;
		$this->set('dboTMatters', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DboTMatter->exists($id)) {
			throw new NotFoundException(__('Invalid dbo t matter'));
		}
		$options = array('conditions' => array('DboTMatter.' . $this->DboTMatter->primaryKey => $id));
		$this->set('dboTMatter', $this->DboTMatter->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DboTMatter->create();
			if ($this->DboTMatter->save($this->request->data)) {
				$this->Session->setFlash(__('The dbo t matter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo t matter could not be saved. Please, try again.'));
			}
		}
		$dboMCompanies = $this->DboTMatter->DboMCompany->find('list');
		$dboMClients = $this->DboTMatter->DboMClient->find('list');
		$this->set(compact('dboMCompanies', 'dboMClients'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DboTMatter->exists($id)) {
			throw new NotFoundException(__('Invalid dbo t matter'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DboTMatter->save($this->request->data)) {
				$this->Session->setFlash(__('The dbo t matter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo t matter could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DboTMatter.' . $this->DboTMatter->primaryKey => $id));
			$this->request->data = $this->DboTMatter->find('first', $options);
		}
		$dboMCompanies = $this->DboTMatter->DboMCompany->find('list');
		$dboMClients = $this->DboTMatter->DboMClient->find('list');
		$this->set(compact('dboMCompanies', 'dboMClients'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DboTMatter->id = $id;
		if (!$this->DboTMatter->exists()) {
			throw new NotFoundException(__('Invalid dbo t matter'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DboTMatter->delete()) {
			$this->Session->setFlash(__('The dbo t matter has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dbo t matter could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
