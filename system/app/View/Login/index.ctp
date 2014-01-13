<?php
//	if ($this->Session->check('Message.auth')) print_r( $this->Session->flash('auth'));
////	echo $this->form->create('User', array('action' => './login'));
//	echo $this->form->create('User', array('name'=> 'login_form', 'method'=>'post','action' => '/index'));
//	echo $this->form->input('username', array('label'=>'ユーザ名'));
//	echo $this->form->input('password', array('label'=>'パスワード'));
//	echo $this->form->end('ログイン');
?>
	<form method="post" id="afdsfUserLoginForm" action="/finewerk.net/system/login/index">
		<div style="display:none">
			<input type="hidden" name="_method" value="POST" />
		</div>
		<div class="input text">
			<label for="UserUsername">ユーザー名</label>
			<input type="text" name="data[User][username]" id="UserUsername" /> 
		</div>
		<div class="input password">
			<label for="UserPassword">パスワード</label>
			<input type="password" name="data[User][password]" id="UserPassword" />
		</div>
		<div class="submit">
			<input type="submit" value="ログイン" />
		</div>
	</form>

