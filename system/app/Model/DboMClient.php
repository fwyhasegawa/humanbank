<?php
App::uses('AppModel', 'Model');
/**
 * DboMClient Model
 *
 * @property DboMCompanies $DboMCompanies
 * @property DboMDaysCutoff $DboMDaysCutoff
 * @property DboMDaysPay $DboMDaysPay
 */
class DboMClient extends AppModel {

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
		'dbo_m_days_id_cutoff' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'dbo_m_days_id_pay' => array(
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
		'DboMDays1' => array(
			'className' => 'DboMDays',
			'foreignKey' => 'dbo_m_days_id_cutoff',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DboMDays2' => array(
			'className' => 'DboMDays',
			'foreignKey' => 'dbo_m_days_id_pay',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DboMCompanies' => array(
			'className' => 'DboMCompanies',
			'foreignKey' => 'dbo_m_companies_id',
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
		'DboTClaim' => array(
			'className' => 'DboTClaim',
			'foreignKey' => 'dbo_m_clients_id',
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
		'DboTMatter' => array(
			'className' => 'DboTMatter',
			'foreignKey' => 'dbo_m_clients_id',
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
