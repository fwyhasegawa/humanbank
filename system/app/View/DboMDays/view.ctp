<div class="dboMDays view">
<h2><?php echo __('Dbo M Day'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dboMDay['DboMDay']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('名前'); ?></dt>
		<dd>
			<?php echo h($dboMDay['DboMDay']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('削除フラグ'); ?></dt>
		<dd>
			<?php echo h($dboMDay['DboMDay']['delate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('作成日'); ?></dt>
		<dd>
			<?php echo h($dboMDay['DboMDay']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('変更日'); ?></dt>
		<dd>
			<?php echo h($dboMDay['DboMDay']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('メニュー'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('この項目を変更'), array('action' => 'edit', $dboMDay['DboMDay']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('この項目を削除'), array('action' => 'delete', $dboMDay['DboMDay']['id']), null, __('Are you sure you want to delete # %s?', $dboMDay['DboMDay']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('一覧に戻る'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('追加'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('顧客マスタ一覧'), array('controller' => 'dbo_m_clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('顧客マスタ追加'), array('controller' => 'dbo_m_clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('スタッフマスタ一覧'), array('controller' => 'dbo_m_staffs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('スタッフマスタ追加'), array('controller' => 'dbo_m_staffs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Dbo M Clients'); ?></h3>
	<?php if (!empty($dboMDay['DboMClient'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('名前'); ?></th>
		<th><?php echo __('住所'); ?></th>
		<th><?php echo __('電話番号'); ?></th>
		<th><?php echo __('FAX番号'); ?></th>
		<th><?php echo __('締め日ID'); ?></th>
		<th><?php echo __('支払い日ID'); ?></th>
		<th><?php echo __('削除フラグ'); ?></th>
		<th><?php echo __('作成日'); ?></th>
		<th><?php echo __('変更日'); ?></th>
		<th class="actions"><?php echo __('メニュー'); ?></th>
	</tr>
	<?php foreach ($dboMDay['DboMClient'] as $dboMClient): ?>
		<tr>
			<td><?php echo $dboMClient['id']; ?></td>
			<td><?php echo $dboMClient['name']; ?></td>
			<td><?php echo $dboMClient['addr']; ?></td>
			<td><?php echo $dboMClient['tel']; ?></td>
			<td><?php echo $dboMClient['fax']; ?></td>
			<td><?php echo $dboMClient['dbo_m_days_id_cutoff']; ?></td>
			<td><?php echo $dboMClient['dbo_m_days_id_pay']; ?></td>
			<td><?php echo $dboMClient['delate']; ?></td>
			<td><?php echo $dboMClient['created']; ?></td>
			<td><?php echo $dboMClient['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('表示'), array('controller' => 'dbo_m_clients', 'action' => 'view', $dboMClient['id'])); ?>
				<?php echo $this->Html->link(__('変更'), array('controller' => 'dbo_m_clients', 'action' => 'edit', $dboMClient['id'])); ?>
				<?php echo $this->Form->postLink(__('削除'), array('controller' => 'dbo_m_clients', 'action' => 'delete', $dboMClient['id']), null, __('Are you sure you want to delete # %s?', $dboMClient['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('顧客マスタ追加'), array('controller' => 'dbo_m_clients', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Dbo M Staffs'); ?></h3>
	<?php if (!empty($dboMDay['DboMStaff'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('氏名'); ?></th>
		<th><?php echo __('名字'); ?></th>
		<th><?php echo __('名前'); ?></th>
		<th><?php echo __('電話番号'); ?></th>
		<th><?php echo __('携帯電話'); ?></th>
		<th><?php echo __('住所'); ?></th>
		<th><?php echo __('扶養人数'); ?></th>
		<th><?php echo __('千円月日'); ?></th>
		<th><?php echo __('日にちId'); ?></th>
		<th><?php echo __('銀行Id'); ?></th>
		<th><?php echo __('口座番号'); ?></th>
		<th><?php echo __('削除フラグ'); ?></th>
		<th><?php echo __('作成日'); ?></th>
		<th><?php echo __('変更日'); ?></th>
		<th class="actions"><?php echo __('メニュー'); ?></th>
	</tr>
	<?php foreach ($dboMDay['DboMStaff'] as $dboMStaff): ?>
		<tr>
			<td><?php echo $dboMStaff['id']; ?></td>
			<td><?php echo $dboMStaff['name']; ?></td>
			<td><?php echo $dboMStaff['family_name']; ?></td>
			<td><?php echo $dboMStaff['first_name']; ?></td>
			<td><?php echo $dboMStaff['tel']; ?></td>
			<td><?php echo $dboMStaff['h_tel']; ?></td>
			<td><?php echo $dboMStaff['addr']; ?></td>
			<td><?php echo $dboMStaff['fuyo_num']; ?></td>
			<td><?php echo $dboMStaff['birthday']; ?></td>
			<td><?php echo $dboMStaff['dbo_m_days_id']; ?></td>
			<td><?php echo $dboMStaff['dbo_m_banks_id']; ?></td>
			<td><?php echo $dboMStaff['account_num']; ?></td>
			<td><?php echo $dboMStaff['delate']; ?></td>
			<td><?php echo $dboMStaff['created']; ?></td>
			<td><?php echo $dboMStaff['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('表示'), array('controller' => 'dbo_m_staffs', 'action' => 'view', $dboMStaff['id'])); ?>
				<?php echo $this->Html->link(__('変更'), array('controller' => 'dbo_m_staffs', 'action' => 'edit', $dboMStaff['id'])); ?>
				<?php echo $this->Form->postLink(__('削除'), array('controller' => 'dbo_m_staffs', 'action' => 'delete', $dboMStaff['id']), null, __('Are you sure you want to delete # %s?', $dboMStaff['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('スタッフマスタ追加'), array('controller' => 'dbo_m_staffs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
