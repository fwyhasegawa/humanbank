<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	var $components = array(
		'DebugKit.Toolbar',
		'Session',
// 		'Auth' => array(
// 			// ログイン情報のあるMODEL
// 			'userModel' 	 => 'users',

// 			'authError' => 'ログインしてください',

// 			'loginError' => 'ログインに失敗しました',

// 			/* ログイン時リダイレクト先*/
// 			'loginRedirect' => array('controller' => 'adminmenu', 'action' => 'index'),

// 			/* ログアウト時リダイレクト先*/
// //			'logoutRedirect' => array('controller' => 'login', 'action' => 'logout'),
// //			'logoutRedirect' => array('controller' => 'login', 'action' => 'index'),
// 			'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),

// 			// ログインフォームがある場所
// 			'loginAction'	 => array('controller' => 'users', 'action' => 'login'),

//	)
	);

}
