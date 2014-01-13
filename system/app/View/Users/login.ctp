<?php
	if ($this->Session->check('Message.auth')) print_r( $this->Session->flash('auth'));
	echo $this->form->create('User', array('action' => './login'));
//	echo $this->form->create('User', array('name'=> 'login_form', 'method'=>'post','action' => '/index'));
	echo $this->form->input('username', array('label'=>'ユーザ名'));
	echo $this->form->input('password', array('label'=>'パスワード'));
	echo $this->form->end('ログイン');
?>

