<?php
App::uses('AppModel', 'Model');
/**
 * DboMTax Model
 *
 */
class DboMTax extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'dbo_m_tax';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'percentage';

}
