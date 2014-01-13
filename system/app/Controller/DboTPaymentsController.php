<?php
App::uses('AppController', 'Controller');
/**
 * DboTPayments Controller
 *
 * @property DboTPayment $DboTPayment
 * @property PaginatorComponent $Paginator
 */
class DboTPaymentsController extends AppController {

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
		$this->DboTPayment->recursive = 0;
		$this->set('dboTPayments', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DboTPayment->exists($id)) {
			throw new NotFoundException(__('Invalid dbo t Payment'));
		}
		$options = array('conditions' => array('DboTPayment.' . $this->DboTPayment->primaryKey => $id));
		$this->set('dboTPayment', $this->DboTPayment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DboTPayment->create();
			if ($this->DboTPayment->save($this->request->data)) {
				$this->Session->setFlash(__('The dbo t Payment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo t Payment could not be saved. Please, try again.'));
			}
		}
		$dboMStaffs = $this->DboTPayment->DboMStaff->find('list');
		$this->set(compact('dboMStaffs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DboTPayment->exists($id)) {
			throw new NotFoundException(__('Invalid dbo t Payment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DboTPayment->save($this->request->data)) {
				$this->Session->setFlash(__('The dbo t Payment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo t Payment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DboTPayment.' . $this->DboTPayment->primaryKey => $id));
			$this->request->data = $this->DboTPayment->find('first', $options);
		}
		$dboMStaffs = $this->DboTPayment->DboMStaff->find('list');
		$this->set(compact('dboMStaffs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DboTPayment->id = $id;
		if (!$this->DboTPayment->exists()) {
			throw new NotFoundException(__('Invalid dbo t Payment'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DboTPayment->delete()) {
			$this->Session->setFlash(__('The dbo t Payment has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dbo t Payment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
