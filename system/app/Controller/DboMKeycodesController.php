<?php
App::uses('AppController', 'Controller');
/**
 * DboMKeycodes Controller
 *
 * @property DboMKeycode $DboMKeycode
 * @property PaginatorComponent $Paginator
 */
class DboMKeycodesController extends AppController {

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
		$this->DboMKeycode->recursive = 0;
		$this->set('dboMKeycodes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DboMKeycode->exists($id)) {
			throw new NotFoundException(__('Invalid dbo m keycode'));
		}
		$options = array('conditions' => array('DboMKeycode.' . $this->DboMKeycode->primaryKey => $id));
		$this->set('dboMKeycode', $this->DboMKeycode->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DboMKeycode->create();
			if ($this->DboMKeycode->save($this->request->data)) {
				$this->Session->setFlash(__('The dbo m keycode has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo m keycode could not be saved. Please, try again.'));
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
		if (!$this->DboMKeycode->exists($id)) {
			throw new NotFoundException(__('Invalid dbo m keycode'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DboMKeycode->save($this->request->data)) {
				$this->Session->setFlash(__('The dbo m keycode has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dbo m keycode could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DboMKeycode.' . $this->DboMKeycode->primaryKey => $id));
			$this->request->data = $this->DboMKeycode->find('first', $options);
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
		$this->DboMKeycode->id = $id;
		if (!$this->DboMKeycode->exists()) {
			throw new NotFoundException(__('Invalid dbo m keycode'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DboMKeycode->delete()) {
			$this->Session->setFlash(__('The dbo m keycode has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dbo m keycode could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
