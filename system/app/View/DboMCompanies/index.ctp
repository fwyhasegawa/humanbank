<div class="dboMCompanies index">
	<h2><?php echo __('自社情報マスタ'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id', 'id'); ?></th>
			<th><?php echo $this->Paginator->sort('name', '名前'); ?></th>
			<th><?php echo $this->Paginator->sort('addr', '住所'); ?></th>
			<th><?php echo $this->Paginator->sort('tel', '電話番号'); ?></th>
			<th><?php echo $this->Paginator->sort('fax', 'FAX番号'); ?></th>
			<th><?php echo $this->Paginator->sort('dbo_m_banks_id', '銀行id'); ?></th>
			<th><?php echo $this->Paginator->sort('account_num', '口座番号'); ?></th>
			<th><?php echo $this->Paginator->sort('delate', '削除フラグ'); ?></th>
			<th><?php echo $this->Paginator->sort('created', '作成日'); ?></th>
			<th><?php echo $this->Paginator->sort('modified', '変更日'); ?></th>
			<th class="actions"><?php echo __('メニュー'); ?></th>
	</tr>
	<?php foreach ($dboMCompanies as $dboMCompany): ?>

	<tr>
		<td><?php echo h($dboMCompany['DboMCompany']['id']); ?>&nbsp;</td>
		<td><?php echo h($dboMCompany['DboMCompany']['name']); ?>&nbsp;</td>
		<td><?php echo h($dboMCompany['DboMCompany']['addr']); ?>&nbsp;</td>
		<td><?php echo h($dboMCompany['DboMCompany']['tel']); ?>&nbsp;</td>
		<td><?php echo h($dboMCompany['DboMCompany']['fax']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link(
					$dboMCompany['DboMBanks']['name'].' '.$dboMCompany['DboMBanks']['siten_name'].' '.$dboMCompany['DboMBanks']['kouza'],
					array('controller' => 'dbo_m_bank', 'action' => 'view', $dboMCompany['DboMCompany']['dbo_m_banks_id'])); ?>
		</td>
		<td><?php echo h($dboMCompany['DboMCompany']['account_num']); ?>&nbsp;</td>
		<td><?php echo h($dboMCompany['DboMCompany']['delate']); ?>&nbsp;</td>
		<td><?php echo h($dboMCompany['DboMCompany']['created']); ?>&nbsp;</td>
		<td><?php echo h($dboMCompany['DboMCompany']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('表示'), array('action' => 'view', $dboMCompany['DboMCompany']['id'])); ?>
			<?php echo $this->Html->link(__('変更'), array('action' => 'edit', $dboMCompany['DboMCompany']['id'])); ?>
			<?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $dboMCompany['DboMCompany']['id']), null, __('Are you sure you want to delete # %s?', $dboMCompany['DboMCompany']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('銀行マスタ一覧'), array('controller' => 'dbo_m_banks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('銀行マスタ追加'), array('controller' => 'dbo_m_banks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
