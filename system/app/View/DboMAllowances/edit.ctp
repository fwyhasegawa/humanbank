<div class="dboMAllowances form">
<?php echo $this->Form->create('DboMAllowance'); ?>
	<fieldset>
		<legend><?php echo __('手当マスタ変更'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name', array('label'=>'削除フラグ'));
		echo $this->Form->input('delate', array('label'=>'削除フラグ'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('メニュー'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('この項目を削除'), array('action' => 'delete', $this->Form->value('DboMAllowance.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DboMAllowance.id'))); ?></li>
		<li><?php echo $this->Html->link(__('一覧に戻る'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('勤怠テーブル一覧'), array('controller' => 'dbo_t_attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('勤怠テーブル追加'), array('controller' => 'dbo_t_attendances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
