<?php
App::uses('AppController', 'Controller');
/**
 * Natures Controller
 *
 * @property Nature $Nature
 * @property PaginatorComponent $Paginator
 */
class NaturesController extends AppController {

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
		$this->Nature->recursive = 0;
		$this->set('natures', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Nature->exists($id)) {
			throw new NotFoundException(__('Invalid nature'));
		}
		$options = array('conditions' => array('Nature.' . $this->Nature->primaryKey => $id));
		$this->set('nature', $this->Nature->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Nature->create();
			if ($this->Nature->save($this->request->data)) {
				$this->Session->setFlash(__('The nature has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nature could not be saved. Please, try again.'));
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
		if (!$this->Nature->exists($id)) {
			throw new NotFoundException(__('Invalid nature'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Nature->save($this->request->data)) {
				$this->Session->setFlash(__('The nature has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nature could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Nature.' . $this->Nature->primaryKey => $id));
			$this->request->data = $this->Nature->find('first', $options);
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
		$this->Nature->id = $id;
		if (!$this->Nature->exists()) {
			throw new NotFoundException(__('Invalid nature'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Nature->delete()) {
			$this->Session->setFlash(__('The nature has been deleted.'));
		} else {
			$this->Session->setFlash(__('The nature could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
