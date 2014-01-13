<div class="dboMBanks view">
<h2><?php echo __('Dbo M Bank'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dboMBank['DboMBank']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('銀行名'); ?></dt>
		<dd>
			<?php echo h($dboMBank['DboMBank']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('支店名'); ?></dt>
		<dd>
			<?php echo h($dboMBank['DboMBank']['siten_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('口座'); ?></dt>
		<dd>
			<?php echo h($dboMBank['DboMBank']['kouza']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('削除フラグ'); ?></dt>
		<dd>
			<?php echo h($dboMBank['DboMBank']['delate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('作成日'); ?></dt>
		<dd>
			<?php echo h($dboMBank['DboMBank']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('変更日'); ?></dt>
		<dd>
			<?php echo h($dboMBank['DboMBank']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('メニュー'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('この項目を変更'), array('action' => 'edit', $dboMBank['DboMBank']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('この項目を削除'), array('action' => 'delete', $dboMBank['DboMBank']['id']), null, __('Are you sure you want to delete # %s?', $dboMBank['DboMBank']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('一覧に戻る'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('追加'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('自社情報マスタ一覧'), array('controller' => 'dbo_m_companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('自社情報マスタ追加'), array('controller' => 'dbo_m_companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('スタッフマスタ一覧'), array('controller' => 'dbo_m_staffs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('スタッフマスタ追加'), array('controller' => 'dbo_m_staffs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Dbo M Companies'); ?></h3>
	<?php if (!empty($dboMBank['DboMCompany'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('名前'); ?></th>
		<th><?php echo __('住所'); ?></th>
		<th><?php echo __('電話番号'); ?></th>
		<th><?php echo __('FAX番号'); ?></th>
		<th><?php echo __('軍港ID'); ?></th>
		<th><?php echo __('口座番号'); ?></th>
		<th><?php echo __('削除フラグ'); ?></th>
		<th><?php echo __('作成日'); ?></th>
		<th><?php echo __('変更日'); ?></th>
		<th class="actions"><?php echo __('メニュー'); ?></th>
	</tr>
	<?php foreach ($dboMBank['DboMCompany'] as $dboMCompany): ?>
		<tr>
			<td><?php echo $dboMCompany['id']; ?></td>
			<td><?php echo $dboMCompany['name']; ?></td>
			<td><?php echo $dboMCompany['addr']; ?></td>
			<td><?php echo $dboMCompany['tel']; ?></td>
			<td><?php echo $dboMCompany['fax']; ?></td>
			<td><?php echo $dboMCompany['dbo_m_banks_id']; ?></td>
			<td><?php echo $dboMCompany['account_num']; ?></td>
			<td><?php echo $dboMCompany['delate']; ?></td>
			<td><?php echo $dboMCompany['created']; ?></td>
			<td><?php echo $dboMCompany['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('表示'), array('controller' => 'dbo_m_companies', 'action' => 'view', $dboMCompany['id'])); ?>
				<?php echo $this->Html->link(__('変更'), array('controller' => 'dbo_m_companies', 'action' => 'edit', $dboMCompany['id'])); ?>
				<?php echo $this->Form->postLink(__('削除'), array('controller' => 'dbo_m_companies', 'action' => 'delete', $dboMCompany['id']), null, __('Are you sure you want to delete # %s?', $dboMCompany['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('自社情報マスタ追加'), array('controller' => 'dbo_m_companies', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Dbo M Staffs'); ?></h3>
	<?php if (!empty($dboMBank['DboMStaff'])): ?>
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
		<th><?php echo __('生年月日'); ?></th>
		<th><?php echo __('給与支払日Id'); ?></th>
		<th><?php echo __('銀行情報Id'); ?></th>
		<th><?php echo __('口座番号'); ?></th>
		<th><?php echo __('削除フラグ'); ?></th>
		<th><?php echo __('作成日'); ?></th>
		<th><?php echo __('変更日「'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dboMBank['DboMStaff'] as $dboMStaff): ?>
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
