<div class="dboMStaffs index">
	<h2><?php echo __('Dbo M Staffs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id', 'id'); ?></th>
			<th><?php echo $this->Paginator->sort('dbo_m_companies_id', '会社ID'); ?></th>
			<th><?php echo $this->Paginator->sort('family_name', '名字'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name', '名前'); ?></th>
			<th><?php echo $this->Paginator->sort('family_name_kana', '名字かな'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name_kana', '名前かな'); ?></th>
			<th><?php echo $this->Paginator->sort('tel', '電話番号'); ?></th>
			<th><?php echo $this->Paginator->sort('h_tel', '携帯電話'); ?></th>
			<th><?php echo $this->Paginator->sort('addr', '住所'); ?></th>
			<th><?php echo $this->Paginator->sort('fuyo_num', '扶養人数'); ?></th>
			<th><?php echo $this->Paginator->sort('birthday', '生年月日'); ?></th>
			<th><?php echo $this->Paginator->sort('dbo_m_days_id', '日にちid'); ?></th>
			<th><?php echo $this->Paginator->sort('dbo_m_banks_id', '銀行id'); ?></th>
			<th><?php echo $this->Paginator->sort('account_num', '口座番号'); ?></th>
			<th><?php echo $this->Paginator->sort('delate', '削除フラグ'); ?></th>
			<th><?php echo $this->Paginator->sort('created', '作成日'); ?></th>
			<th><?php echo $this->Paginator->sort('modified', '変更日'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dboMStaffs as $dboMStaff): ?>
	<tr>
		<td><?php echo h($dboMStaff['DboMStaff']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dboMStaff['DboMCompanies']['name'], array('controller' => 'dbo_m_companies', 'action' => 'view', $dboMStaff['DboMCompanies']['id'])); ?>
		</td>
		<td><?php echo h($dboMStaff['DboMStaff']['family_name']); ?>&nbsp;</td>
		<td><?php echo h($dboMStaff['DboMStaff']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($dboMStaff['DboMStaff']['family_name_kana']); ?>&nbsp;</td>
		<td><?php echo h($dboMStaff['DboMStaff']['first_name_kana']); ?>&nbsp;</td>
		<td><?php echo h($dboMStaff['DboMStaff']['tel']); ?>&nbsp;</td>
		<td><?php echo h($dboMStaff['DboMStaff']['h_tel']); ?>&nbsp;</td>
		<td><?php echo h($dboMStaff['DboMStaff']['addr']); ?>&nbsp;</td>
		<td><?php echo h($dboMStaff['DboMStaff']['fuyo_num']); ?>&nbsp;</td>
		<td><?php echo h($dboMStaff['DboMStaff']['birthday']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dboMStaff['DboMDays']['name'], array('controller' => 'dbo_m_days', 'action' => 'view', $dboMStaff['DboMDays']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link(
					$dboMStaff['DboMBanks']['name'].' '.$dboMStaff['DboMBanks']['siten_name'].' '.$dboMStaff['DboMBanks']['kouza'],
					array('controller' => 'dbo_m_bank', 'action' => 'view', $dboMStaff['DboMCompanies']['dbo_m_banks_id'])); ?>
			</td>
		<td><?php echo h($dboMStaff['DboMStaff']['account_num']); ?>&nbsp;</td>
		<td><?php echo h($dboMStaff['DboMStaff']['delate']); ?>&nbsp;</td>
		<td><?php echo h($dboMStaff['DboMStaff']['created']); ?>&nbsp;</td>
		<td><?php echo h($dboMStaff['DboMStaff']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('表示'), array('action' => 'view', $dboMStaff['DboMStaff']['id'])); ?>
			<?php echo $this->Html->link(__('変更'), array('action' => 'edit', $dboMStaff['DboMStaff']['id'])); ?>
			<?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $dboMStaff['DboMStaff']['id']), null, __('Are you sure you want to delete # %s?', $dboMStaff['DboMStaff']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('日にちマスタ一覧'), array('controller' => 'dbo_m_days', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('日にちマスタ追加'), array('controller' => 'dbo_m_days', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('銀行マスタ一覧'), array('controller' => 'dbo_m_banks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('銀行マスタ追加「'), array('controller' => 'dbo_m_banks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('支払いテーブル一覧'), array('controller' => 'dbo_t_payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('支払いテーブル追加'), array('controller' => 'dbo_t_payments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('勤怠テーブル一覧'), array('controller' => 'dbo_t_attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('勤怠テーブル追加'), array('controller' => 'dbo_t_attendances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
