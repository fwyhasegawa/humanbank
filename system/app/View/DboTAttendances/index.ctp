<div class="dboTAttendances index">
	<h2><?php echo __('勤怠テーブル'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('dbo_m_companies_id', '会社ID'); ?></th>
			<th><?php echo $this->Paginator->sort('dbo_m_staffs_id', 'スタッフid'); ?></th>
			<th><?php echo $this->Paginator->sort('dbo_t_matters_id', '案件id'); ?></th>
			<th><?php echo $this->Paginator->sort('dbo_t_claims_id', '請求id'); ?></th>
			<th><?php echo $this->Paginator->sort('service_day', '勤務日'); ?></th>
			<th><?php echo $this->Paginator->sort('time_start', '開始時間'); ?></th>
			<th><?php echo $this->Paginator->sort('time_end', '終了時間'); ?></th>
			<th><?php echo $this->Paginator->sort('interval_start', '休憩開始時間'); ?></th>
			<th><?php echo $this->Paginator->sort('interval_end', '休憩終了時間'); ?></th>
			<th><?php echo $this->Paginator->sort('time_total', '勤務時間'); ?></th>
			<th><?php echo $this->Paginator->sort('time_overtime', '残業時間'); ?></th>
			<th><?php echo $this->Paginator->sort('time_latetime', '深夜時間'); ?></th>
			<th><?php echo $this->Paginator->sort('time_interval', '休憩時間'); ?></th>
			<th><?php echo $this->Paginator->sort('sales', '売上金額'); ?></th>
			<th><?php echo $this->Paginator->sort('pay', '支払い金額'); ?></th>
			<th><?php echo $this->Paginator->sort('seikyu_kazei', 'その他請求　課税'); ?></th>
			<th><?php echo $this->Paginator->sort('seikyu_hikazei', 'その他請求　非課税'); ?></th>
			<th><?php echo $this->Paginator->sort('teate1', '手当1'); ?></th>
			<th><?php echo $this->Paginator->sort('teate2', '手当2'); ?></th>
			<th><?php echo $this->Paginator->sort('teate3', '手当3'); ?></th>
			<th><?php echo $this->Paginator->sort('dbo_m_teates_id1', '手当詳細1'); ?></th>
			<th><?php echo $this->Paginator->sort('dbo_m_teates_id2', '手当詳細2'); ?></th>
			<th><?php echo $this->Paginator->sort('dbo_m_teates_id3', '手当生足3'); ?></th>
            <th><?php echo $this->Paginator->sort('comment', '備考'); ?></th>
			<th><?php echo $this->Paginator->sort('delate', '削除フラグ'); ?></th>
			<th><?php echo $this->Paginator->sort('created', '作成日'); ?></th>
			<th><?php echo $this->Paginator->sort('modified', '変更日'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dboTAttendances as $dboTAttendance): ?>
	<tr>
		<td><?php echo h($dboTAttendance['DboTAttendance']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dboTAttendance['DboMCompanies']['name'], array('controller' => 'dbo_m_companies', 'action' => 'view', $dboTAttendance['DboMCompanies']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($dboTAttendance['DboMStaffs']['name'], array('controller' => 'dbo_m_staffs', 'action' => 'view', $dboTAttendance['DboMStaffs']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($dboTAttendance['DboTMatters']['name'], array('controller' => 'dbo_t_matters', 'action' => 'view', $dboTAttendance['DboTMatters']['id'])); ?>
		</td>
		<td><?php echo h($dboTAttendance['DboTAttendance']['dbo_t_claim_id']); ?>&nbsp;</td>
		<td><?php echo h($dboTAttendance['DboTAttendance']['service_day']); ?>&nbsp;</td>
		<td><?php echo h($dboTAttendance['DboTAttendance']['time_start']); ?>&nbsp;</td>
		<td><?php echo h($dboTAttendance['DboTAttendance']['time_end']); ?>&nbsp;</td>

		<td><?php echo h($dboTAttendance['DboTAttendance']['interval_start']); ?>&nbsp;</td>
		<td><?php echo h($dboTAttendance['DboTAttendance']['interval_end']); ?>&nbsp;</td>
		<td><?php echo h($dboTAttendance['DboTAttendance']['time_total']); ?>&nbsp;</td>
		<td><?php echo h($dboTAttendance['DboTAttendance']['time_overtime']); ?>&nbsp;</td>
		<td><?php echo h($dboTAttendance['DboTAttendance']['time_latetime']); ?>&nbsp;</td>
		<td><?php echo h($dboTAttendance['DboTAttendance']['time_interval']); ?>&nbsp;</td>
		<td><?php echo h($dboTAttendance['DboTAttendance']['sales']); ?>&nbsp;</td>
		<td><?php echo h($dboTAttendance['DboTAttendance']['pay']); ?>&nbsp;</td>
		<td><?php echo h($dboTAttendance['DboTAttendance']['koutsuhi_seikyu_flag']); ?>&nbsp;</td>
		<td><?php echo h($dboTAttendance['DboTAttendance']['seikyu1']); ?>&nbsp;</td>
		<td><?php echo h($dboTAttendance['DboTAttendance']['seikyu2']); ?>&nbsp;</td>
		<td><?php echo h($dboTAttendance['DboTAttendance']['seikyu3']); ?>&nbsp;</td>
		<td><?php echo h($dboTAttendance['DboTAttendance']['teate1']); ?>&nbsp;</td>
		<td><?php echo h($dboTAttendance['DboTAttendance']['teate2']); ?>&nbsp;</td>
		<td><?php echo h($dboTAttendance['DboTAttendance']['teate3']); ?>&nbsp;</td>
		<td><?php echo h($dboTAttendance['DboTAttendance']['dbo_m_teates_id1']); ?>&nbsp;</td>
		<td><?php echo h($dboTAttendance['DboTAttendance']['dbo_m_teates_id2']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dboTAttendance['DboMTeate']['name'], array('controller' => 'dbo_m_teates', 'action' => 'view', $dboTAttendance['DboMTeate']['id'])); ?>
		</td>
		<td><?php echo h($dboTAttendance['DboTAttendance']['delate']); ?>&nbsp;</td>
		<td><?php echo h($dboTAttendance['DboTAttendance']['created']); ?>&nbsp;</td>
		<td><?php echo h($dboTAttendance['DboTAttendance']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('表示'), array('action' => 'view', $dboTAttendance['DboTAttendance']['id'])); ?>
			<?php echo $this->Html->link(__('変更'), array('action' => 'edit', $dboTAttendance['DboTAttendance']['id'])); ?>
			<?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $dboTAttendance['DboTAttendance']['id']), null, __('Are you sure you want to delete # %s?', $dboTAttendance['DboTAttendance']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('メニュー'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('追加'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('スタッフマスタ一覧'), array('controller' => 'dbo_m_staffs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('スタッフマスタ追加'), array('controller' => 'dbo_m_staffs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('案件テーブル一覧'), array('controller' => 'dbo_t_matters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('案件テーブル追加'), array('controller' => 'dbo_t_matters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('請求テーブル一覧'), array('controller' => 'dbo_t_claims', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('請求テーブル追加'), array('controller' => 'dbo_t_claims', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('手当マスタ一覧'), array('controller' => 'dbo_m_teates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('手当マスタ追加'), array('controller' => 'dbo_m_teates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
