<?php
App::uses('AppController', 'Controller');
/**
 * DboMAllowances Controller
 *
 * @property DboMAllowance $DboMAllowance
 * @property PaginatorComponent $Paginator
 */
class DboMAllowancesController extends AppController {

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
		$this->DboMAllowance->recursive = 0;
		$this->set('dboMAllowances', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DboMAllowance->exists($id)) {
			throw new NotFoundException(__('Invalid dbo m Allowance'));
		}
		$options = array('conditions' => array('DboMAllowance.' . $this->DboMAllowance->primaryKey => $id));
		$this->set('dboMAllowance', $this->DboMAllowance->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DboMAllowance->create();
			if ($this->DboMAllowance->save($this->request->data)) {
				$this->Session->setFlash(__('手当マスタに項目を追加しました。'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo m Allowance could not be saved. Please, try again.'));
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
		if (!$this->DboMAllowance->exists($id)) {
			throw new NotFoundException(__('Invalid dbo m Allowance'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DboMAllowance->save($this->request->data)) {
				$this->Session->setFlash(__('手当マスタの項目を変更しました。'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo m Allowance could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DboMAllowance.' . $this->DboMAllowance->primaryKey => $id));
			$this->request->data = $this->DboMAllowance->find('first', $options);
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
		$this->DboMAllowance->id = $id;
		if (!$this->DboMAllowance->exists()) {
			throw new NotFoundException(__('Invalid dbo m Allowance'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DboMAllowance->delete()) {
			$this->Session->setFlash(__('The dbo m Allowance has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dbo m Allowance could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
