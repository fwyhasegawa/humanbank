<div class="dboMBanks form">
<?php echo $this->Form->create('DboMBank'); ?>
	<fieldset>
		<legend><?php echo __('銀行マスタ追加'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label'=> '銀行名'));
		echo $this->Form->input('siten_name', array('label'=> '支店名'));
		echo $this->Form->input('kouza', array( 'label'=>'口座'));
		echo $this->Form->input('delate', array('label'=>'削除フラグ'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('メニュー'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('一覧に戻る'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('自社情報マスタ一覧'), array('controller' => 'dbo_m_companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('自社情報マスタ追加'), array('controller' => 'dbo_m_companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('スタッフマスタ一覧'), array('controller' => 'dbo_m_staffs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('スタッフマスタ追加'), array('controller' => 'dbo_m_staffs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
