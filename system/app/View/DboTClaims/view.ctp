<div class="dboTClaims view">
<h2><?php echo __('請求テーブル'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dboTClaims['DboTClaims']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('会社名'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dboTClaims['DboMCompanies']['name'], array('controller' => 'dbo_m_companies', 'action' => 'view', $dboTClaims['DboMCompanies']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('顧客ID'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dboTClaims['DboMClients']['name'], array('controller' => 'dbo_m_clients', 'action' => 'view', $dboTClaims['DboMClients']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('請求金額税抜'); ?></dt>
		<dd>
			<?php echo h($dboTClaims['DboTClaims']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('算出開始日'); ?></dt>
		<dd>
			<?php echo h($dboTClaims['DboTClaims']['calc_start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('算出終了日'); ?></dt>
		<dd>
			<?php echo h($dboTClaims['DboTClaims']['calc_end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('請求日'); ?></dt>
		<dd>
			<?php echo h($dboTClaims['DboTClaims']['seikyu_day']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('削除フラグ'); ?></dt>
		<dd>
			<?php echo h($dboTClaims['DboTClaims']['delate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('作成日'); ?></dt>
		<dd>
			<?php echo h($dboTClaims['DboTClaims']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('変更日'); ?></dt>
		<dd>
			<?php echo h($dboTClaims['DboTClaims']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('メニュー'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('変更'), array('action' => 'edit', $dboTClaims['DboTClaims']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('この項目を削除'), array('action' => 'delete', $dboTClaims['DboTClaims']['id']), null, __('Are you sure you want to delete # %s?', $dboTClaims['DboTClaims']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('一覧に戻る'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('追加'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('顧客テーブル一覧'), array('controller' => 'dbo_m_clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('顧客テーブル追加'), array('controller' => 'dbo_m_clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('勤怠テーブル一覧'), array('controller' => 'dbo_t_attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('勤怠テーブル追加'), array('controller' => 'dbo_t_attendances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Dbo T Attendances'); ?></h3>
	<?php if (!empty($dboTClaims['DboTAttendance'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('スタッフId'); ?></th>
		<th><?php echo __('案件Id'); ?></th>
		<th><?php echo __('請求Id'); ?></th>
		<th><?php echo __('勤務日'); ?></th>
		<th><?php echo __('開始時間'); ?></th>
		<th><?php echo __('終了時間'); ?></th>
		<th><?php echo __('休憩時間'); ?></th>
		<th><?php echo __('売上金額'); ?></th>
		<th><?php echo __('支払い金額'); ?></th>
		<th><?php echo __('その他請求　課税'); ?></th>
		<th><?php echo __('その他請求　非課税'); ?></th>
		<th><?php echo __('手当1'); ?></th>
		<th><?php echo __('手当2'); ?></th>
		<th><?php echo __('手当3'); ?></th>
		<th><?php echo __('手当詳細Id1'); ?></th>
		<th><?php echo __('手当詳細Id2'); ?></th>
		<th><?php echo __('手当詳細Id3'); ?></th>
		<th><?php echo __('削除フラグ'); ?></th>
		<th><?php echo __('作成日'); ?></th>
		<th><?php echo __('変更日'); ?></th>
		<th class="actions"><?php echo __('メニュー'); ?></th>
	</tr>
	<?php foreach ($dboTClaims['DboTAttendance'] as $dboTAttendance): ?>
		<tr>
			<td><?php echo $dboTAttendance['id']; ?></td>
			<td><?php echo $dboTAttendance['dbo_m_staffs_id']; ?></td>
			<td><?php echo $dboTAttendance['dbo_t_matters_id']; ?></td>
			<td><?php echo $dboTAttendance['dbo_t_claim_id']; ?></td>
			<td><?php echo $dboTAttendance['service_day']; ?></td>
			<td><?php echo $dboTAttendance['time_start']; ?></td>
			<td><?php echo $dboTAttendance['time_end']; ?></td>
			<td><?php echo $dboTAttendance['time_interval']; ?></td>
			<td><?php echo $dboTAttendance['sales']; ?></td>
			<td><?php echo $dboTAttendance['pay']; ?></td>
			<td><?php echo $dboTAttendance['koutsuhi_seikyu_flag']; ?></td>
			<td><?php echo $dboTAttendance['seikyu1']; ?></td>
			<td><?php echo $dboTAttendance['seikyu2']; ?></td>
			<td><?php echo $dboTAttendance['seikyu3']; ?></td>
			<td><?php echo $dboTAttendance['teate1']; ?></td>
			<td><?php echo $dboTAttendance['teate2']; ?></td>
			<td><?php echo $dboTAttendance['teate3']; ?></td>
			<td><?php echo $dboTAttendance['dbo_m_teates_id1']; ?></td>
			<td><?php echo $dboTAttendance['dbo_m_teates_id2']; ?></td>
			<td><?php echo $dboTAttendance['dbo_m_teates_id3']; ?></td>
			<td><?php echo $dboTAttendance['delate']; ?></td>
			<td><?php echo $dboTAttendance['created']; ?></td>
			<td><?php echo $dboTAttendance['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('表示'), array('controller' => 'dbo_t_attendances', 'action' => 'view', $dboTAttendance['id'])); ?>
				<?php echo $this->Html->link(__('変更'), array('controller' => 'dbo_t_attendances', 'action' => 'edit', $dboTAttendance['id'])); ?>
				<?php echo $this->Form->postLink(__('削除'), array('controller' => 'dbo_t_attendances', 'action' => 'delete', $dboTAttendance['id']), null, __('Are you sure you want to delete # %s?', $dboTAttendance['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('勤怠テーブル追加'), array('controller' => 'dbo_t_Attendances', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
