<?php
App::uses('AppController', 'Controller');
/**
 * DboMMeimokuses Controller
 *
 * @property DboMMeimokus $DboMMeimokus
 * @property PaginatorComponent $Paginator
 */
class DboMNominalsController extends AppController {

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
		$this->DboMNominal->recursive = 0;
		$this->set('dboMNominals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DboMNominals->exists($id)) {
			throw new NotFoundException(__('Invalid dbo m Nominals'));
		}
		$options = array('conditions' => array('DboMNominals.' . $this->DboMNominals->primaryKey => $id));
		$this->set('dboMNominals', $this->DboMNominals->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DboMNominals->create();
			if ($this->DboMNominals->save($this->request->data)) {
				$this->Session->setFlash(__('The dbo m Nominals has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo m Nominals could not be saved. Please, try again.'));
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
		if (!$this->DboMNominals->exists($id)) {
			throw new NotFoundException(__('Invalid dbo m Nominals'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DboMNominals->save($this->request->data)) {
				$this->Session->setFlash(__('The dbo m Nominals has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo m Nominals could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DboMNominals.' . $this->DboMNominals->primaryKey => $id));
			$this->request->data = $this->DboMNominals->find('first', $options);
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
		$this->DboMNominals->id = $id;
		if (!$this->DboMNominals->exists()) {
			throw new NotFoundException(__('Invalid dbo m Nominals'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DboMNominals->delete()) {
			$this->Session->setFlash(__('The dbo m Nominals has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dbo m Nominals could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
