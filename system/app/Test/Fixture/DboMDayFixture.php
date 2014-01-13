<?php
/**
 * DboMDayFixture
 *
 */
class DboMDayFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'id : id'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '名前 : 名前', 'charset' => 'utf8'),
		'day' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '日にち : 日にち', 'charset' => 'utf8'),
		'delate' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '削除フラグ : 削除フラグ'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '作成日 : 処理を実行した日'),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日 : 更新日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'name' => 'Lorem ipsum dolor sit amet',
			'day' => 'Lorem ipsum dolor sit amet',
			'delate' => 1,
			'created' => '2014-01-01 12:09:04',
			'modified' => '2014-01-01 12:09:04'
		),
	);

}
