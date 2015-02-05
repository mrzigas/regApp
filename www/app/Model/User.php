<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
/**
 * User Model
 *
 * @property Person $Person
 * @property Competitor $Competitor
 * @property Confirmation $Confirmation
 * @property Invoice $Invoice
 */
class User extends AppModel {




/**
 * Use table
 *
 * @var mixed False or table name
 */ 
	public $useTable = 'user';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'username';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'username' => array(
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'Not empty'=>array(
				'rule'=>'notEmpty',
				'message'=>'Please enter your password'
			),
			'Match password' =>array(
				'rule'=>'matchPasswords',
				'message'=>'Your passwords do not match!'
			),
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				'message' => 'Invalid password',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password_confirmation' => array(
			'Not empty'=>array(
				'rule'=>'notEmpty',
				'message'=>'Please enter your password'
			),
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				'message' => 'Invalid password',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'person_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	
	public function matchPasswords($data){
		
		if($data['password'] == $this->data['User']['password_confirmation']){
			return true;
		}
		$this->invalidate('password_confirmation', 'Your passwords do not match!');
		return false;
	}
	
	//This method hashes the password for database
	public function beforeSave(){

		if(isset($this->data['User']['password'])){
			$passwordHasher = new BlowfishPasswordHasher();
			
			//$this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
			$this->data['User']['password'] =  $passwordHasher->hash($this->data['User']['password']);
		}
		return true;
		
	}


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $hasOne = array(
		'Person' => array(
			'className' => 'Person',
			'foreignKey' => 'person_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Competitor' => array(
			'className' => 'Competitor',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Confirmation' => array(
			'className' => 'Confirmation',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Invoice' => array(
			'className' => 'Invoice',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
