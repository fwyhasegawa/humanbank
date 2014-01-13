<div class="dboMNominals form">
<?php echo $this->Form->create('DboMNominal'); ?>
	<fieldset>
		<legend><?php echo __('名目マスタ追加'); ?></legend>
	<?php
		echo $this->Form->input('name', '名前');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('メニュー'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('一覧に戻る'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
