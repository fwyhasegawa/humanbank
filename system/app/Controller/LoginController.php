<?php
App::uses('AppController', 'Controller');

class LoginController extends AppController
{

	public function beforeFilter()
	{
		// ハッシュ関数を『sha1』から『sha256』に変更
//		Security::setHash('sha256');
//		$this->Auth->allow(‘login’) ;

		parent::beforeFilter();
	}

	public function index()
	{
//		$this->redirect(array('action' => 'login'));
print_r($this->request);
		if($this->Auth->login($this->request->data)){
			$this->redirect($this->Auth->redirectUrl());
		}else{
			$this->Session->setFlash('ユーザー名またはパスワードが間違っています。');
		}
	}

	public function login() {
print_r($this->request);exit;
		if($this->Auth->login($this->request->data)){
			$this->redirect($this->Auth->redirectUrl());
		}else{
			$this->Session->setFlash('ユーザー名またはパスワードが間違っています。');
		}
	}

	public function logout($id = null)
	{
		$this->redirect($this->Auth->logout());
	}

	public function afterFilter() {
	}

}
?>
