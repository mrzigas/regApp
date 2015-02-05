<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PersonsController extends AppController {
	
	public $components = array('Paginator', 'Session');
	
	/*
	*Method beforeFilter() runs 
	*before all other
	*methods
	*/
	

	//ZIGA
	public function person_information($id){
		
		$this->loadModel('person');
		$data = $this->person->findById($id);
		$this->set('person', $data);
		
	}
	
	//END ZIGA
	
/**
 * index method
 *
 * @return void
 */
	
 
	public function index() {
		$this->Person->recursive = 0;
		$this->set('persons', $this->Person->find('all'));
		$this->layout = 'bootstrap3';
		$this->title = 'Titula el grande';
		//$this->set('persons', $this->Paginator->paginate());
	}
	
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Person->exists($id)) {
			throw new NotFoundException(__('Invalid person'));
		}
		
		$options = array('conditions' => array('Person.' . $this->User->primaryKey => $id));
		$this->set('person', $this->Person->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Person->create();
			/*
			uncomment to save hashed password to database
			$this->request->data['username']['password'] = AuthComponent::password($this->request->data['username']['password']);
			*/
			if ($this->Person->save($this->request->data)) {
				//$this->Session->setFlash(__('The user has been saved.'));
				
				$this->Session->setFlash("Person added");
				//return $this->redirect(array('action' => 'index'));;
				
			} else {
				//$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
				$this->Session->setFlash('The user could not be saved. Please, try again.');
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
		if (!$this->Person->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Person->save($this->request->data)) {
				$this->Session->setFlash(__('Person saved (by Jesus).'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Persona non-grata.'));
			}
		} else {
			$options = array('conditions' => array('Person.' . $this->Person->primaryKey => $id));
			$this->request->data = $this->Person->find('first', $options);
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
		$this->Person->id = $id;
		
		if (!$this->Person->exists()) {
			throw new NotFoundException(__('Persona invisibilia'));
		}
		
		$this->request->allowMethod('post', 'delete');
		
		if ($this->Person->delete()) {
			$this->Session->setFlash(__('Person has been offed.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		
		return $this->redirect(array('action' => 'index'));
	}
	
	/*
	public function list() {
		$this->Person->
	}
	* */

// end
}
