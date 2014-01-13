<?php
App::uses('AppController', 'Controller');
/**
 * DboMStaffs Controller
 *
 * @property DboMStaff $DboMStaff
 * @property PaginatorComponent $Paginator
 */
class DboMStaffsController extends AppController {

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
		$this->DboMStaff->recursive = 0;
		$this->set('dboMStaffs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DboMStaff->exists($id)) {
			throw new NotFoundException(__('Invalid dbo m staff'));
		}
		$options = array('conditions' => array('DboMStaff.' . $this->DboMStaff->primaryKey => $id));
		$this->set('dboMStaff', $this->DboMStaff->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DboMStaff->create();
			if ($this->DboMStaff->save($this->request->data)) {
				$this->Session->setFlash(__('The dbo m staff has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo m staff could not be saved. Please, try again.'));
			}
		}
		$dboMDays = $this->DboMStaff->DboMDays->find('list');
		$dboMBanks = $this->DboMStaff->DboMBanks->find('list');
		$dboMCompanies = $this->DboMStaff->DboMCompanies->find('list');
		$this->set(compact('dboMDays', 'dboMBanks', 'dboMCompanies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DboMStaff->exists($id)) {
			throw new NotFoundException(__('Invalid dbo m staff'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DboMStaff->save($this->request->data)) {
				$this->Session->setFlash(__('The dbo m staff has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo m staff could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DboMStaff.' . $this->DboMStaff->primaryKey => $id));
			$this->request->data = $this->DboMStaff->find('first', $options);
		}
		$dboMDays = $this->DboMStaff->DboMDays->find('list');
		$dboMBanks = $this->DboMStaff->DboMBanks->find('list');
		$dboMCompanies = $this->DboMStaff->DboMCompanies->find('list');
		$this->set(compact('dboMDays', 'dboMBanks', 'dboMCompanies'));
			}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DboMStaff->id = $id;
		if (!$this->DboMStaff->exists()) {
			throw new NotFoundException(__('Invalid dbo m staff'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DboMStaff->delete()) {
			$this->Session->setFlash(__('The dbo m staff has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dbo m staff could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
