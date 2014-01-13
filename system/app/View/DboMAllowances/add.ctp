<div class="dboMAllowances form">
<?php echo $this->Form->create('DboMAllowance'); ?>
	<fieldset>
		<legend><?php echo __('手当マスタ追加'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label'=>'名称'));
		echo $this->Form->input('delate', array('label'=>'削除フラグ'));
		?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('一覧に戻る'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('勤怠テーブル一覧'), array('controller' => 'dbo_t_qttendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('勤怠テーブル追加'), array('controller' => 'dbo_t_qttendances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
