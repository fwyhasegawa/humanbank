<?php
App::uses('AppModel', 'Model');
/**
 * DboMCompany Model
 *
 * @property DboMBanks $DboMBanks
 */
class DboMCompany extends AppModel {

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
		'dbo_m_banks_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'account_num' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tel' => array(
			'custom' => array(
				'rule' => array('custom','/\d{2,4}-\d{2,4}-\d{4}/'),
				'message' => '電話番号を正確に入力してください。'
			),
		),
		'fax' => array(
			'custom' => array(
				'rule' => array('custom','/\d{2,4}-\d{2,4}-\d{4}/'),
				'message' => 'FAX番号を正確に入力してください。'
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
		'DboMBanks' => array(
			'className' => 'DboMBanks',
			'foreignKey' => 'dbo_m_banks_id',
			'conditions' => '',
			'fields' => array('name','siten_name','kouza'),
			'order' => ''
		)
	);
	public $hasMany = array(
		'DboMClients' => array(
			'className' => 'DboMClients',
			'foreignKey' => 'dbo_m_companies_id',
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
		'DboTMatters' => array(
			'className' => 'DboTMatters',
			'foreignKey' => 'dbo_m_companies_id',
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
		'DboTClaims' => array(
			'className' => 'DboTClaims',
			'foreignKey' => 'dbo_m_companies_id',
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
		'DboTAttendances' => array(
			'className' => 'DboTAttendances',
			'foreignKey' => 'dbo_m_companies_id',
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
		'DboMStaffs' => array(
			'className' => 'DboMStaffs',
			'foreignKey' => 'dbo_m_companies_id',
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
		'DboTPayments' => array(
			'className' => 'DboTPayments',
			'foreignKey' => 'dbo_m_companies_id',
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
		'users' => array(
			'className' => 'users',
			'foreignKey' => 'dbo_m_companies_id',
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
