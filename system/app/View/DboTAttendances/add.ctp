<div class="dboTAttendances form">
<?php echo $this->Form->create('DboTAttendance'); ?>
	<fieldset>
		<legend><?php echo __('勤怠テーブル追加'); ?></legend>
	<?php
		echo $this->Form->input('dbo_m_companies_id', array('label'=> '会社ID'));
		echo $this->Form->input('dbo_m_staffs_id', array('label'=> 'スタッフID'));
		echo $this->Form->input('dbo_t_matters_id', array('label'=> '案件ID'));
		echo $this->Form->input('dbo_t_claims_id', array('label'=> '請求ID'));
		echo $this->Form->input('service_day', array('label'=> '勤務日', 'dateFormat' => 'YMD', 'monthNames' => false, 'minYear'=>date('Y')-5, 'maxYear'=>date('Y')+5));
		echo $this->Form->input('time_start', array('label'=> '開始時間', 'timeFormat' => '24', 'interval'=>15 ));
		echo $this->Form->input('time_end', array('label'=> '終了時間', 'timeFormat' => '24', 'interval'=>15 ));
		echo $this->Form->input('interval_start', array('label'=> '休憩開始時間', 'timeFormat' => '24', 'interval'=>15 ));
		echo $this->Form->input('interval_end', array('label'=> '休憩終了時間', 'timeFormat' => '24', 'interval'=>15 ));
		echo $this->Form->input('time_total', array('label'=> '勤務時間'));
		echo $this->Form->input('time_overtime', array('label'=> '残業時間'));
		echo $this->Form->input('time_latetime', array('label'=> '深夜時間'));
		echo $this->Form->input('time_interval', array('label'=> '休憩時間'));
		echo $this->Form->input('sales', array('label'=> '売上金額'));
		echo $this->Form->input('pay', array('label'=> '支払い金額'));
		echo $this->Form->input('seikyu_kazei', array('label'=> 'その他請求　課税'));
		echo $this->Form->input('seikyu_hikazei', array('label'=> 'その他請求　非課税'));
		echo $this->Form->input('dbo_m_allowances_id1', array('label'=> '手当名目１', 'type'=>'select', 'options'=>$dboMAllowances1));
		echo $this->Form->input('teate1', array('label'=> '手当１'));
		echo $this->Form->input('dbo_m_allowances_id2', array('label'=> '手当名目２', 'type'=>'select', 'options'=>$dboMAllowances2));
		echo $this->Form->input('teate2', array('label'=> '手当２'));
		echo $this->Form->input('dbo_m_allowances_id3', array('label'=> '手当名目３', 'type'=>'select', 'options'=>$dboMAllowances3));
		echo $this->Form->input('teate3', array('label'=> '手当３'));
		echo $this->Form->input('comment', array('label'=> '備考'));
		echo $this->Form->input('delate', array('label'=> '削除フラグ'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('メニュー'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('一覧に戻る'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('スタッフマスタ一覧'), array('controller' => 'dbo_m_staffs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('スタッフマスタ追加'), array('controller' => 'dbo_m_staffs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('案件テーブル一覧'), array('controller' => 'dbo_t_matters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('案件テーブル追加'), array('controller' => 'dbo_t_matters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('支払いテーブル一覧'), array('controller' => 'dbo_t_claims', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('支払いテーブル追加'), array('controller' => 'dbo_t_claims', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('手当マスタ一覧'), array('controller' => 'dbo_m_teates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('手当マスタ追加'), array('controller' => 'dbo_m_teates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
