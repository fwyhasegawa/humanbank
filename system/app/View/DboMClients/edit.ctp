<div class="dboMClients form">
<?php echo $this->Form->create('DboMClient'); ?>
	<fieldset>
		<legend><?php echo __('顧客マスタ変更'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('dbo_m_companies_id', array('label'=> '会社ID'));
		echo $this->Form->input('name', array('label'=> '名前'));
		echo $this->Form->input('addr', array('label'=> '住所'));
		echo $this->Form->input('tel', array('label'=> '電話番号'));
		echo $this->Form->input('fax', array('label'=> 'FAX番号'));
		echo $this->Form->input('dbo_m_days_id_cutoff', array('label'=> '締め日ID'));
		echo $this->Form->input('dbo_m_days_id_pay', array('label'=> '支払い日ID'));
		echo $this->Form->input('delate', array('label'=> '削除フラグ'));
			?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('メニュー'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('この項目を削除'), array('action' => 'delete', $this->Form->value('DboMClient.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DboMClient.id'))); ?></li>
		<li><?php echo $this->Html->link(__('一覧に戻る'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('日にちマスタ一覧'), array('controller' => 'dbo_m_days', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('日にちマスタ追加'), array('controller' => 'dbo_m_days', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('請求テーブル一覧'), array('controller' => 'dbo_t_claims', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('請求テーブル追加'), array('controller' => 'dbo_t_claims', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('案件テーブル一覧'), array('controller' => 'dbo_t_matters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('案件テーブル追加'), array('controller' => 'dbo_t_matters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
