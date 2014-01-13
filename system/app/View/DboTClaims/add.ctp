<div class="dboTClaims form">
<?php echo $this->Form->create('DboTClaims'); ?>
	<fieldset>
		<legend><?php echo __('請求テーブル追加'); ?></legend>
	<?php
		echo $this->Form->input('dbo_m_companies_id', array('label'=> '会社ID'));
		echo $this->Form->input('dbo_m_clients_id', array('label'=> '顧客ID'));
		echo $this->Form->input('price', array('label'=> '請求金額税抜き'));
		echo $this->Form->input('calc_start', array('label'=> '算出開始日'));
		echo $this->Form->input('calc_end', array('label'=> '算出終了日'));
		echo $this->Form->input('seikyu_day', array('label'=> '請求日'));
		echo $this->Form->input('delate', array('label'=> '削除フラグ'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('メニュー'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('一覧に戻る'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('顧客マスタ一覧'), array('controller' => 'dbo_m_clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('顧客マスタ追加'), array('controller' => 'dbo_m_clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('勤怠テーブル一覧'), array('controller' => 'dbo_t_attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('勤怠テーブル追加'), array('controller' => 'dbo_t_attendances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
