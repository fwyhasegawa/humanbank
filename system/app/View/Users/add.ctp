<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('ログイン情報追加'); ?></legend>
	<?php
		echo $this->Form->input('dbo_m_companies_id', array('label'=> '会社ID'));
		echo $this->Form->input('username', array('label'=>'ユーザ名'));
		echo $this->Form->input('password', array('label'=>'パスワード'));
		echo $this->Form->input('staff_name', array('label'=>'表示用スタッフ名'));
		echo $this->Form->input('dbo_m_manages_id', array('label'=>'権利権限ID'));
		echo $this->Form->input('delate', array('label'=>'削除フラグ'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('一覧に戻る'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('管理権限マスタ一覧'), array('controller' => 'dbo_m_manages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('管理権限マスタ追加'), array('controller' => 'dbo_m_manages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
