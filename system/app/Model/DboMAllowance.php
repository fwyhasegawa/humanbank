<?php
App::uses('AppModel', 'Model');
/**
 * DboMAllowance Model
 *
 * @property DboTAttendance $DboTAttendance
 * @property DboTAttendance $DboTAttendance
 * @property DboTAttendance $DboTAttendance
 */
class DboMAllowance extends AppModel {

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
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
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
		'DboTAttendance' => array(
			'className' => 'DboTAttendance',
			'foreignKey' => 'dbo_m_allowances_id1',
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
		'DboTAttendance' => array(
			'className' => 'DboTAttendance',
			'foreignKey' => 'dbo_m_allowances_id2',
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
		'DboTAttendance' => array(
			'className' => 'DboTAttendance',
			'foreignKey' => 'dbo_m_allowances_id3',
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
