<?php
App::uses('AppModel', 'Model');
/**
 * Country Model
 *
 */
class Country extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'country';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name_iso';
	
	public $hasMany = array(
		'Address' => array(
			'className' => 'Address',
			'foreignKey' => 'country_id',
			'dependent' => true
		),
		'Competitor' => array(
			'className' => 'Competitor',
			'foreignKey' => 'country_id',
			'dependent' => true
		)
	);

}
