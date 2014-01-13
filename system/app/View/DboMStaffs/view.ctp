<div class="dboMStaffs view">
<h2><?php echo __('スタッフマスタ詳細'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dboMStaff['DboMStaff']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('会社名'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dboMStaff['DboMCompanies']['name'], array('controller' => 'dbo_m_companies', 'action' => 'view', $dboMStaff['DboMCompanies']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('名字'); ?></dt>
		<dd>
			<?php echo h($dboMStaff['DboMStaff']['family_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('名前'); ?></dt>
		<dd>
			<?php echo h($dboMStaff['DboMStaff']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('名字かな'); ?></dt>
		<dd>
			<?php echo h($dboMStaff['DboMStaff']['family_name_kana']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('名前かな'); ?></dt>
		<dd>
			<?php echo h($dboMStaff['DboMStaff']['first_name_kana']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('電話番号'); ?></dt>
		<dd>
			<?php echo h($dboMStaff['DboMStaff']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('携帯電話'); ?></dt>
		<dd>
			<?php echo h($dboMStaff['DboMStaff']['h_tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('住所'); ?></dt>
		<dd>
			<?php echo h($dboMStaff['DboMStaff']['addr']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('扶養人数'); ?></dt>
		<dd>
			<?php echo h($dboMStaff['DboMStaff']['fuyo_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('生年月日'); ?></dt>
		<dd>
			<?php echo h($dboMStaff['DboMStaff']['birthday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('日にちID'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dboMStaff['DboMDays']['name'], array('controller' => 'dbo_m_days', 'action' => 'view', $dboMStaff['DboMDays']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('銀行ID'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dboMStaff['DboMBanks']['name'], array('controller' => 'dbo_m_banks', 'action' => 'view', $dboMStaff['DboMBanks']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('口座番号'); ?></dt>
		<dd>
			<?php echo h($dboMStaff['DboMStaff']['account_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('削除フラグ'); ?></dt>
		<dd>
			<?php echo h($dboMStaff['DboMStaff']['delate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('作成日'); ?></dt>
		<dd>
			<?php echo h($dboMStaff['DboMStaff']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('変更日'); ?></dt>
		<dd>
			<?php echo h($dboMStaff['DboMStaff']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('メニュー'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('この項目を変更'), array('action' => 'edit', $dboMStaff['DboMStaff']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('この項目を削除'), array('action' => 'delete', $dboMStaff['DboMStaff']['id']), null, __('Are you sure you want to delete # %s?', $dboMStaff['DboMStaff']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('スタッフマスタ一覧'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('スタッフマスタ追加'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Dbo T Payments'); ?></h3>
	<?php if (!empty($dboMStaff['DboTPayment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('スタッフId'); ?></th>
		<th><?php echo __('給与'); ?></th>
		<th><?php echo __('締め日'); ?></th>
		<th><?php echo __('算出開始日'); ?></th>
		<th><?php echo __('算出終了日'); ?></th>
		<th><?php echo __('支払い日'); ?></th>
		<th><?php echo __('雇用保険控除金額'); ?></th>
		<th><?php echo __('健康保険控除金額'); ?></th>
		<th><?php echo __('介護保険控除金額'); ?></th>
		<th><?php echo __('厚生年金控除金額'); ?></th>
		<th><?php echo __('所得税控除額'); ?></th>
		<th><?php echo __('交通費手当'); ?></th>
		<th><?php echo __('その他手当'); ?></th>
		<th><?php echo __('総支給'); ?></th>
		<th><?php echo __('削除フラグ'); ?></th>
		<th><?php echo __('作成日'); ?></th>
		<th><?php echo __('更新日'); ?></th>
		<th class="actions"><?php echo __('メニュー'); ?></th>
	</tr>
	<?php foreach ($dboMStaff['DboTPayment'] as $dboTPayment): ?>
		<tr>
			<td><?php echo $dboTPayment['id']; ?></td>
			<td><?php echo $dboTPayment['dbo_m_staffs_id']; ?></td>
			<td><?php echo $dboTPayment['kyuyo']; ?></td>
			<td><?php echo $dboTPayment['sime_day']; ?></td>
			<td><?php echo $dboTPayment['calc_start']; ?></td>
			<td><?php echo $dboTPayment['calc_end']; ?></td>
			<td><?php echo $dboTPayment['siharai_day']; ?></td>
			<td><?php echo $dboTPayment['koyo_hoken']; ?></td>
			<td><?php echo $dboTPayment['kenko_hoken']; ?></td>
			<td><?php echo $dboTPayment['kaigo_hoken']; ?></td>
			<td><?php echo $dboTPayment['kose_nenkin']; ?></td>
			<td><?php echo $dboTPayment['syotokuzei']; ?></td>
			<td><?php echo $dboTPayment['koutsuhi']; ?></td>
			<td><?php echo $dboTPayment['teate']; ?></td>
			<td><?php echo $dboTPayment['sousikyu']; ?></td>
			<td><?php echo $dboTPayment['delate']; ?></td>
			<td><?php echo $dboTPayment['created']; ?></td>
			<td><?php echo $dboTPayment['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('表示'), array('controller' => 'dbo_t_payments', 'action' => 'view', $dboTPayment['id'])); ?>
				<?php echo $this->Html->link(__('変更'), array('controller' => 'dbo_t_payments', 'action' => 'edit', $dboTPayment['id'])); ?>
				<?php echo $this->Form->postLink(__('削除'), array('controller' => 'dbo_t_payments', 'action' => 'delete', $dboTPayment['id']), null, __('Are you sure you want to delete # %s?', $dboTPayment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('支払いテーブル追加'), array('controller' => 'dbo_t_payments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Dbo T Attendances'); ?></h3>
	<?php if (!empty($dboMStaff['DboTAttendance'])): ?>
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
		<th><?php echo __('手当１'); ?></th>
		<th><?php echo __('手当２'); ?></th>
		<th><?php echo __('手当３'); ?></th>
		<th><?php echo __('手当詳細Id1'); ?></th>
		<th><?php echo __('手当詳細Id2'); ?></th>
		<th><?php echo __('手当詳細Id3'); ?></th>
		<th><?php echo __('備考'); ?></th>
		<th><?php echo __('削除フラグ'); ?></th>
		<th><?php echo __('作成日'); ?></th>
		<th><?php echo __('変更日'); ?></th>
		<th class="actions"><?php echo __('メニュー'); ?></th>
	</tr>
	<?php foreach ($dboMStaff['DboTAttendance'] as $dboTAttendance): ?>
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
			<td><?php echo $dboTAttendance['seikyu_kazei']; ?></td>
			<td><?php echo $dboTAttendance['seikyu_hikazei']; ?></td>
			<td><?php echo $dboTAttendance['teate1']; ?></td>
			<td><?php echo $dboTAttendance['teate2']; ?></td>
			<td><?php echo $dboTAttendance['teate3']; ?></td>
			<td><?php echo $dboTAttendance['dbo_m_teates_id1']; ?></td>
			<td><?php echo $dboTAttendance['dbo_m_teates_id2']; ?></td>
			<td><?php echo $dboTAttendance['dbo_m_teates_id3']; ?></td>
			<td><?php echo $dboTAttendance['comment']; ?></td>
			<td><?php echo $dboTAttendance['delate']; ?></td>
			<td><?php echo $dboTAttendance['created']; ?></td>
			<td><?php echo $dboTAttendance['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('表示w'), array('controller' => 'dbo_t_attendances', 'action' => 'view', $dboTAttendance['id'])); ?>
				<?php echo $this->Html->link(__('変更'), array('controller' => 'dbo_t_attendances', 'action' => 'edit', $dboTAttendance['id'])); ?>
				<?php echo $this->Form->postLink(__('削除'), array('controller' => 'dbo_t_attendances', 'action' => 'delete', $dboTAttendance['id']), null, __('Are you sure you want to delete # %s?', $dboTAttendance['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('勤怠テーブル追加'), array('controller' => 'dbo_t_attendances', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
