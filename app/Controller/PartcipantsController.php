<?php
App::uses('AppController', 'Controller');
/**
 * Partcipants Controller
 *
 * @property Partcipant $Partcipant
 * @property PaginatorComponent $Paginator
 */
class PartcipantsController extends AppController {

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
		$this->Partcipant->recursive = 0;
		$this->set('partcipants', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Partcipant->exists($id)) {
			throw new NotFoundException(__('Invalid partcipant'));
		}
		$options = array('conditions' => array('Partcipant.' . $this->Partcipant->primaryKey => $id));
		$this->set('partcipant', $this->Partcipant->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Partcipant->create();
			if ($this->Partcipant->save($this->request->data)) {
				$this->Session->setFlash(__('The partcipant has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The partcipant could not be saved. Please, try again.'));
			}
		}
		$events = $this->Partcipant->Event->find('list');
		$this->set(compact('events'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Partcipant->exists($id)) {
			throw new NotFoundException(__('Invalid partcipant'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Partcipant->save($this->request->data)) {
				$this->Session->setFlash(__('The partcipant has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The partcipant could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Partcipant.' . $this->Partcipant->primaryKey => $id));
			$this->request->data = $this->Partcipant->find('first', $options);
		}
		$events = $this->Partcipant->Event->find('list');
		$this->set(compact('events'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Partcipant->id = $id;
		if (!$this->Partcipant->exists()) {
			throw new NotFoundException(__('Invalid partcipant'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Partcipant->delete()) {
			$this->Session->setFlash(__('The partcipant has been deleted.'));
		} else {
			$this->Session->setFlash(__('The partcipant could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
