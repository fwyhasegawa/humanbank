<?php
/**
 * DboTSiharaiFixture
 *
 */
class DboTSiharaiFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'id : id'),
		'dbo_m_staffs_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'unique', 'comment' => 'スタッフID : スタッフID'),
		'kyuuyo' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '給与金額 : 給与金額'),
		'sime_day' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '締日 : 締日'),
		'calc_start' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '算出開始日 : 算出開始日'),
		'calc_end' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '算出終了日 : 算出終了日'),
		'siharai_day' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '支払日 : 支払日'),
		'koyo_hoken' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '雇用保険控除金額 : 雇用保険控除金額'),
		'kenko_hoken' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '健康保険控除金額 : 健康保険控除金額'),
		'kaigo_hoken' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '介護保険控除金額 : 介護保険控除金額'),
		'kose_nenkin' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '厚生年金控除金額 : 厚生年金控除金額'),
		'syotokuzei' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '所得税 : 所得税控除金額'),
		'koutsuhi' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '交通費手当 : 交通費手当'),
		'teate' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => 'その他手当 : その他手当'),
		'sousikyu' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '総支給 : 総支給金額'),
		'delate' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '削除フラグ : 削除フラグ'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '作成日 : 処理を実行した日'),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日 : 更新日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 1),
			'dbo_m_staffs_id' => array('column' => 'dbo_m_staffs_id', 'unique' => 1)
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
			'dbo_m_staffs_id' => 1,
			'kyuuyo' => 1,
			'sime_day' => '2014-01-01',
			'calc_start' => '2014-01-01',
			'calc_end' => '2014-01-01',
			'siharai_day' => '2014-01-01',
			'koyo_hoken' => 1,
			'kenko_hoken' => 1,
			'kaigo_hoken' => 1,
			'kose_nenkin' => 1,
			'syotokuzei' => 1,
			'koutsuhi' => 1,
			'teate' => 1,
			'sousikyu' => 1,
			'delate' => 1,
			'created' => '2014-01-01 12:23:28',
			'modified' => '2014-01-01 12:23:28'
		),
	);

}
