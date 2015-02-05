<?php
App::uses('AppModel', 'Model');
/**
 * Person Model
 *
 * @property User $User
 * @property Country $Country
 * @property Address $Address
 * @property Competitor $Competitor
 */
class Person extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'person';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	
	public $hasOne = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'person_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Competitor' => array(
			'className' => 'Competitor',
			'foreignKey' => 'person_id',
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


/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Address' => array(
			'className' => 'Address',
			'foreignKey' => 'address_id',
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
 /*
	public $hasMany = array(
		
	);
*/
}
