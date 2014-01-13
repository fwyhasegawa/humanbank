<?php
/**
 * DboTSeikyuFixture
 *
 */
class DboTSeikyuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'dbo_t_seikyu';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'id : id'),
		'dbo_m_clients_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'unique', 'comment' => '顧客マスタID : id'),
		'price' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '請求金額税抜 : 請求金額（税抜）'),
		'calc_start' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '算出開始日 : 算出開始日'),
		'calc_end' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '算出終了日 : 算出終了日'),
		'seikyu_day' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '請求日 : 請求日'),
		'delate' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '削除フラグ : 削除フラグ'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '作成日 : 処理を実行した日'),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日 : 更新日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 1),
			'dbo_m_clients_id' => array('column' => 'dbo_m_clients_id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'dbo_m_clients_id' => 1,
			'price' => 1,
			'calc_start' => '2014-01-01',
			'calc_end' => '2014-01-01',
			'seikyu_day' => '2014-01-01',
			'delate' => 1,
			'created' => '2014-01-01 12:22:19',
			'modified' => '2014-01-01 12:22:19'
		),
	);

}
