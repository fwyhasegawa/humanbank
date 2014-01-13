<?php
App::uses('AppController', 'Controller');
/**
 * DboMDays Controller
 *
 * @property DboMDay $DboMDay
 * @property PaginatorComponent $Paginator
 */
class DboMDaysController extends AppController {

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
		$this->DboMDay->recursive = 0;
		$this->set('dboMDays', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DboMDay->exists($id)) {
			throw new NotFoundException(__('Invalid dbo m day'));
		}
		$options = array('conditions' => array('DboMDay.' . $this->DboMDay->primaryKey => $id));
		$this->set('dboMDay', $this->DboMDay->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DboMDay->create();
			if ($this->DboMDay->save($this->request->data)) {
				$this->Session->setFlash(__('日にちマスタに項目を追加しました。'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo m day could not be saved. Please, try again.'));
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
		if (!$this->DboMDay->exists($id)) {
			throw new NotFoundException(__('Invalid dbo m day'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DboMDay->save($this->request->data)) {
				$this->Session->setFlash(__('The dbo m day has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo m day could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DboMDay.' . $this->DboMDay->primaryKey => $id));
			$this->request->data = $this->DboMDay->find('first', $options);
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
		$this->DboMDay->id = $id;
		if (!$this->DboMDay->exists()) {
			throw new NotFoundException(__('Invalid dbo m day'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DboMDay->delete()) {
			$this->Session->setFlash(__('The dbo m day has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dbo m day could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
