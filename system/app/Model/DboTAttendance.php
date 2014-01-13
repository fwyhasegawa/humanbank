<?php
App::uses('AppModel', 'Model');
/**
 * DboTAttendance Model
 *
 * @property DboMCompanies $DboMCompanies
 * @property DboMStaffs $DboMStaffs
 * @property DboTMatters $DboTMatters
 * @property DboTClaims $DboTClaims
 * @property DboMAllowances1 $DboMAllowances1
 * @property DboMAllowances2 $DboMAllowances2
 * @property DboMAllowances3 $DboMAllowances3
 */
class DboTAttendance extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'dbo_m_companies_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'dbo_m_staffs_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'dbo_t_matters_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'service_day' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'time_start' => array(
			'time' => array(
				'rule' => array('time'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'time_end' => array(
			'time' => array(
				'rule' => array('time'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sales' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'pay' => array(
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'DboMCompanies' => array(
			'className' => 'DboMCompanies',
			'foreignKey' => 'dbo_m_companies_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DboMStaffs' => array(
			'className' => 'DboMStaffs',
			'foreignKey' => 'dbo_m_staffs_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DboTMatters' => array(
			'className' => 'DboTMatters',
			'foreignKey' => 'dbo_t_matters_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DboTClaims' => array(
			'className' => 'DboTClaims',
			'foreignKey' => 'dbo_t_claims_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DboMAllowances1' => array(
			'className' => 'DboMAllowances',
			'foreignKey' => 'dbo_m_allowances_id1',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DboMAllowances2' => array(
			'className' => 'DboMAllowances',
			'foreignKey' => 'dbo_m_allowances_id2',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DboMAllowances3' => array(
			'className' => 'DboMAllowances',
			'foreignKey' => 'dbo_m_allowances_id3',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
