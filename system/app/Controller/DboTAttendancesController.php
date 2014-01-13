<?php
App::uses('AppController', 'Controller');
/**
 * DboTAttendances Controller
 *
 * @property DboTAttendance $DboTAttendance
 * @property PaginatorComponent $Paginator
 */
class DboTAttendancesController extends AppController {

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
		$this->DboTAttendance->recursive = 0;
		$this->set('dboTAttendances', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DboTAttendance->exists($id)) {
			throw new NotFoundException(__('Invalid dbo t Attendance'));
		}
		$options = array('conditions' => array('DboTAttendance.' . $this->DboTAttendance->primaryKey => $id));
		$this->set('dboTAttendance', $this->DboTAttendance->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DboTAttendance->create();
			if ($this->DboTAttendance->save($this->request->data)) {
				$this->Session->setFlash(__('The dbo t Attendance has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo t Attendance could not be saved. Please, try again.'));
			}
		}
		$dboMCompanies = $this->DboTAttendance->DboMCompanies->find('list');
//		$dboMStaffs = $this->DboTAttendance->DboMStaffs->find('all');
		$work = $this->DboTAttendance->DboMStaffs->find('all');
		foreach( $work as $key => $data) {

			$dboMStaffs[$key] = $data['DboMStaffs']['family_name'].' '.$data['DboMStaffs']['first_name'];
		}
		$dboTMatters = $this->DboTAttendance->DboTMatters->find('list');
		$dboTClaims = $this->DboTAttendance->DboTClaims->find('list');
		$dboMAllowances1 = $this->DboTAttendance->DboMAllowances1->find('list');
		$dboMAllowances2 = $this->DboTAttendance->DboMAllowances2->find('list');
		$dboMAllowances3 = $this->DboTAttendance->DboMAllowances3->find('list');
		$this->set(compact('dboMCompanies', 'dboMStaffs', 'dboTMatters', 'dboTClaims', 'dboMAllowances1', 'dboMAllowances2', 'dboMAllowances3'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DboTAttendance->exists($id)) {
			throw new NotFoundException(__('Invalid dbo t Attendance'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DboTAttendance->save($this->request->data)) {
				$this->Session->setFlash(__('The dbo t Attendance has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo t Attendance could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DboTAttendance.' . $this->DboTAttendance->primaryKey => $id));
			$this->request->data = $this->DboTAttendance->find('first', $options);
		}
		$dboMStaffs = $this->DboTAttendance->DboMStaff->find('list');
		$dboTMatters = $this->DboTAttendance->DboTMatter->find('list');
		$dboTSeikyus = $this->DboTAttendance->DboTSeikyu->find('list');
		$dboMTeates = $this->DboTAttendance->DboMTeate->find('list');
		$this->set(compact('dboMStaffs', 'dboTMatters', 'dboTSeikyus', 'dboMTeates'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DboTAttendance->id = $id;
		if (!$this->DboTAttendance->exists()) {
			throw new NotFoundException(__('Invalid dbo t Attendance'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DboTAttendance->delete()) {
			$this->Session->setFlash(__('The dbo t Attendance has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dbo t Attendance could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
