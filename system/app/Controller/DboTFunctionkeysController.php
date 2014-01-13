<?php
App::uses('AppController', 'Controller');
/**
 * DboTFunctionkeys Controller
 *
 * @property DboTFunctionkey $DboTFunctionkey
 * @property PaginatorComponent $Paginator
 */
class DboTFunctionkeysController extends AppController {

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
		$this->DboTFunctionkey->recursive = 0;
		$this->set('dboTFunctionkeys', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DboTFunctionkey->exists($id)) {
			throw new NotFoundException(__('Invalid dbo t functionkey'));
		}
		$options = array('conditions' => array('DboTFunctionkey.' . $this->DboTFunctionkey->primaryKey => $id));
		$this->set('dboTFunctionkey', $this->DboTFunctionkey->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DboTFunctionkey->create();
			if ($this->DboTFunctionkey->save($this->request->data)) {
				$this->Session->setFlash(__('The dbo t functionkey has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo t functionkey could not be saved. Please, try again.'));
			}
		}
		$dboMKeycodes = $this->DboTFunctionkey->DboMKeycode->find('list');
		$dboTMatters = $this->DboTFunctionkey->DboTMatter->find('list');
		$users = $this->DboTFunctionkey->User->find('list');
		$this->set(compact('dboMKeycodes', 'dboTMatters', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DboTFunctionkey->exists($id)) {
			throw new NotFoundException(__('Invalid dbo t functionkey'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DboTFunctionkey->save($this->request->data)) {
				$this->Session->setFlash(__('The dbo t functionkey has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo t functionkey could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DboTFunctionkey.' . $this->DboTFunctionkey->primaryKey => $id));
			$this->request->data = $this->DboTFunctionkey->find('first', $options);
		}
		$dboMKeycodes = $this->DboTFunctionkey->DboMKeycode->find('list');
		$dboTMatters = $this->DboTFunctionkey->DboTMatter->find('list');
		$users = $this->DboTFunctionkey->User->find('list');
		$this->set(compact('dboMKeycodes', 'dboTMatters', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DboTFunctionkey->id = $id;
		if (!$this->DboTFunctionkey->exists()) {
			throw new NotFoundException(__('Invalid dbo t functionkey'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DboTFunctionkey->delete()) {
			$this->Session->setFlash(__('The dbo t functionkey has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dbo t functionkey could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
