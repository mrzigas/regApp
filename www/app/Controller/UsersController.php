<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
	
	public $uses = array('Person');
	
	/*
	*Method beforeFilter() runs 
	*before all other
	*methods
	*/
	
	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('register');
	}
	
	
	public function check_summary(){
		
	}
	
	public function create_new(){
		
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}
	
/**
 * index method
 *
 * @return void
 */

	public function login(){
		
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->redirect($this->Auth->reditect());
			} else {
				$this->Session->setFlash('Invalid username or password');
			}
		}
		
	}
	
	public function logout(){
		$this->redirect($this->Auth->logout());
	}
	
	public function profile() {
		
		$this->loadModel('person');
		$this->set('persons', $this->person->find('all'));

	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
 

 public function register(){
	 
	 if(!empty($this->request->data)){
		 
		 $this->loadModel('Country');
		 $country_name = array('Country.name' => $this->request->data['Country']['name']);
		 $country = $this -> Country ->find('first' , array('conditions' => array('Country.name' => $country_name)));
		 
		 $this->Country->set($country);
		 if(!empty($country)){
			$this->loadModel('Address');
			$this->request->data['Address']['country_id'] = $this->Country->id;
			
			if($this->Person->saveAssociated($this->request->data, array('deep' => true))){
				$this->Session->setFlash('The user has been saved.');
				return $this->redirect(array('action' => 'login'));;
			}
		 }
		 
		 
		 
	 }
	 
 }
 
 
 
	//public function register() {
		//if ($this->request->is('post')) {
			//$this->User->create();
			/*
			uncomment to save hashed password to database
			$this->request->data['username']['password'] = AuthComponent::password($this->request->data['username']['password']);
			*/
			//if ($this->User->save($this->request->data)) {
				//$this->Session->setFlash(__('The user has been saved.'));
				
				//$this->Session->setFlash("User has been created");
				//return $this->redirect(array('action' => 'index'));;
				
			//} else {
				//$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
				//$this->Session->setFlash('The user could not be saved. Please, try again.');
			//}
		//} else {
		
		//$this->set('users', $this->User->find('all'));
		//}
	
	

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		
		$people = $this->User->Person->find('list');
		$this->set(compact('people'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		
		$this->request->allowMethod('post', 'delete');
		
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		
		return $this->redirect(array('action' => 'index'));
	}

/**
 * mng_index method
 *
 * @return void
 */
	public function mng_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * mng_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function mng_view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * mng_add method
 *
 * @return void
 */
	public function mng_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		
		$people = $this->User->Person->find('list');
		$this->set(compact('people'));
	}

/**
 * mng_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function mng_edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		
		$people = $this->User->Person->find('list');
		$this->set(compact('people'));
	}

/**
 * mng_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function mng_delete($id = null) {
		$this->User->id = $id;
		
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		
		$this->request->allowMethod('post', 'delete');
		
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		
		return $this->redirect(array('action' => 'index'));
	}
}
