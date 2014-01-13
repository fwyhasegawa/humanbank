<div class="dboMCompanies form">
<?php echo $this->Form->create('DboMCompany'); ?>
	<fieldset>
		<legend><?php echo __('自社情報マスタ追加'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label'=>'名前'));
		echo $this->Form->input('addr', array('label'=>'住所'));
		echo $this->Form->input('tel', array('label'=>'電話番号'));
		echo $this->Form->input('fax', array('label'=>'FAX番号'));
		echo $this->Form->input('dbo_m_banks_id', array('label'=>'銀行id'));
		echo $this->Form->input('account_num', array('label'=>'口座番号'));
		echo $this->Form->input('delate', array('label'=>'削除フラグ'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('メニュー'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('一覧に戻る'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('銀行マスタ一覧'), array('controller' => 'dbo_m_banks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('銀行マスタ追加'), array('controller' => 'dbo_m_banks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
