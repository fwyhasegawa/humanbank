<?php
App::uses('AppController', 'Controller');
/**
 * DboTClaims Controller
 *
 * @property DboTSeikyus $DboTSeikyus
 * @property PaginatorComponent $Paginator
 */
class DboTClaimsController extends AppController {

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
		$this->DboTClaim->recursive = 0;
		$this->set('dboTClaims', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DboTClaim->exists($id)) {
			throw new NotFoundException(__('Invalid dbo t Claim'));
		}
		$options = array('conditions' => array('DboTClaim.' . $this->DboTClaim->primaryKey => $id));
		$this->set('dboTClaim', $this->DboTClaim->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DboTClaim->create();
			if ($this->DboTClaim->save($this->request->data)) {
				$this->Session->setFlash(__('The dbo t Claim has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo t Claim could not be saved. Please, try again.'));
			}
		}
		$dboMClients = $this->DboTClaim->DboMClient->find('list');
		$this->set(compact('dboMClients'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DboTClaim->exists($id)) {
			throw new NotFoundException(__('Invalid dbo t Claim'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DboTClaim->save($this->request->data)) {
				$this->Session->setFlash(__('The dbo t Claim has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo t Claim could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DboTClaim.' . $this->DboTClaim->primaryKey => $id));
			$this->request->data = $this->DboTClaim->find('first', $options);
		}
		$dboMClients = $this->DboTClaim->DboMClient->find('list');
		$this->set(compact('dboMClients'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DboTClaim->id = $id;
		if (!$this->DboTClaim->exists()) {
			throw new NotFoundException(__('Invalid dbo t Claim'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DboTClaim->delete()) {
			$this->Session->setFlash(__('The dbo t Claim has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dbo t Claim could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
