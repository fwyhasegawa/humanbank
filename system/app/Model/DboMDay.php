<?php
App::uses('AppModel', 'Model');
/**
 * DboMDay Model
 *
 * @property DboMClient $DboMClient
 * @property DboMClient $DboMClient
 * @property DboMStaff $DboMStaff
 */
class DboMDay extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'DboMClient' => array(
			'className' => 'DboMClient',
			'foreignKey' => 'dbo_m_days_id_cutoff',
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
		'DboMClient' => array(
			'className' => 'DboMClient',
			'foreignKey' => 'dbo_m_days_id_pay',
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
		'DboMStaff' => array(
			'className' => 'DboMStaff',
			'foreignKey' => 'dbo_m_days_id',
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
