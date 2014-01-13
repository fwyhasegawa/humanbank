<div class="dboMStaffs form">
<?php echo $this->Form->create('DboMStaff'); ?>
	<fieldset>
		<legend><?php echo __('スタッフマスタ変更'); ?></legend>
	<?php
		echo $this->Form->input('id', array('label'=> 'id'));
		echo $this->Form->input('dbo_m_companies_id', array('label'=> '会社ID'));
		echo $this->Form->input('family_name', array('label'=> '名字'));
		echo $this->Form->input('first_name', array('label'=> '名前'));
		echo $this->Form->input('family_name_kana', array('label'=> '名字かな'));
		echo $this->Form->input('first_name_kana', array('label'=> '名前かな'));
		echo $this->Form->input('tel', array('label'=> '電話番号'));
		echo $this->Form->input('h_tel', array('label'=> '携帯電話'));
		echo $this->Form->input('addr', array('label'=> '住所'));
		echo $this->Form->input('fuyo_num', array('label'=> '扶養人数'));
		echo $this->Form->input('birthday', array('label'=> '生年月日', 'dateFormat' => 'YMD', 'monthNames' => false, 'minYear'=>date('Y')-60, 'maxYear'=>date('Y')));
		echo $this->Form->input('dbo_m_days_id', array('label'=> '日にちid'));
		echo $this->Form->input('dbo_m_banks_id', array('label'=> '銀行id'));
		echo $this->Form->input('account_num', array('label'=> '口座番号'));
		echo $this->Form->input('delate', array('label'=> '削除フラグ'));
			?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('メニュー'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $this->Form->value('DboMStaff.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DboMStaff.id'))); ?></li>
		<li><?php echo $this->Html->link(__('一覧に戻る'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('日にちマスタ一覧'), array('controller' => 'dbo_m_days', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('日にちマスタ追加'), array('controller' => 'dbo_m_days', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('銀行マスタ一覧'), array('controller' => 'dbo_m_banks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('銀行マスタ追加'), array('controller' => 'dbo_m_banks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('支払いテーブル一覧'), array('controller' => 'dbo_t_payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('支払いテーブル追加'), array('controller' => 'dbo_t_payments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('勤怠テーブル一覧'), array('controller' => 'dbo_t_attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('勤怠テーブル追加'), array('controller' => 'dbo_t_attendances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
