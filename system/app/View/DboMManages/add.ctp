<div class="dboMManages form">
<?php echo $this->Form->create('DboMManage'); ?>
	<fieldset>
		<legend><?php echo __('追加'); ?></legend>
	<?php
		echo $this->Form->input('name'  , array('label' => '権限名'));
		echo $this->Form->input('level' , array('label' => '権限レベル'));
		echo $this->Form->input('delate', array('label' => '削除フラグ'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('一覧に戻る'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('ログイン情報テーブル一覧'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('ログイン情報テーブル追加'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
