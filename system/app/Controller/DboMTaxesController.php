<?php
App::uses('AppController', 'Controller');
/**
 * DboMTaxes Controller
 *
 * @property DboMTax $DboMTax
 * @property PaginatorComponent $Paginator
 */
class DboMTaxesController extends AppController {

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
		$this->DboMTax->recursive = 0;
		$this->set('dboMTaxes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DboMTax->exists($id)) {
			throw new NotFoundException(__('Invalid dbo m tax'));
		}
		$options = array('conditions' => array('DboMTax.' . $this->DboMTax->primaryKey => $id));
		$this->set('dboMTax', $this->DboMTax->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DboMTax->create();
			if ($this->DboMTax->save($this->request->data)) {
				$this->Session->setFlash(__('The dbo m tax has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo m tax could not be saved. Please, try again.'));
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
		if (!$this->DboMTax->exists($id)) {
			throw new NotFoundException(__('Invalid dbo m tax'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DboMTax->save($this->request->data)) {
				$this->Session->setFlash(__('The dbo m tax has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo m tax could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DboMTax.' . $this->DboMTax->primaryKey => $id));
			$this->request->data = $this->DboMTax->find('first', $options);
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
		$this->DboMTax->id = $id;
		if (!$this->DboMTax->exists()) {
			throw new NotFoundException(__('Invalid dbo m tax'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DboMTax->delete()) {
			$this->Session->setFlash(__('The dbo m tax has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dbo m tax could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
