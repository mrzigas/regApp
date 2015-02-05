<?php
App::uses('AppModel', 'Model');
/**
 * CompetitorTeam Model
 *
 * @property Competitor $Competitor
 */
class CompetitorTeam extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'competitor_team';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'team_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'team_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Competitor' => array(
			'className' => 'Competitor',
			'foreignKey' => 'competitor_team_id',
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
