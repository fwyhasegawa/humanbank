<div class="dboMClients index">
	<h2><?php echo __('顧客マスタ'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id', 'id'); ?></th>
			<th><?php echo $this->Paginator->sort('dbo_m_companies_id', '会社ID'); ?></th>
			<th><?php echo $this->Paginator->sort('name', '名前'); ?></th>
			<th><?php echo $this->Paginator->sort('addr', '住所'); ?></th>
			<th><?php echo $this->Paginator->sort('tel', '電話番号'); ?></th>
			<th><?php echo $this->Paginator->sort('fax', 'FAX番号'); ?></th>
			<th><?php echo $this->Paginator->sort('dbo_m_days_id_cutoff', '締め日ID'); ?></th>
			<th><?php echo $this->Paginator->sort('dbo_m_days_id_pay', '支払い日ID'); ?></th>
			<th><?php echo $this->Paginator->sort('delate', '削除フラグ'); ?></th>
			<th><?php echo $this->Paginator->sort('created', '作成日'); ?></th>
			<th><?php echo $this->Paginator->sort('modified', '変更日'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dboMClients as $dboMClient): ?>
	<tr>
		<td><?php echo h($dboMClient['DboMClient']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dboMClient['DboMCompanies']['name'], array('controller' => 'dbo_m_companies', 'action' => 'view', $dboMClient['DboMCompanies']['id'])); ?>
		</td>
		<td><?php echo h($dboMClient['DboMClient']['name']); ?>&nbsp;</td>
		<td><?php echo h($dboMClient['DboMClient']['addr']); ?>&nbsp;</td>
		<td><?php echo h($dboMClient['DboMClient']['tel']); ?>&nbsp;</td>
		<td><?php echo h($dboMClient['DboMClient']['fax']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dboMClient['DboMDays1']['name'], array('controller' => 'dbo_m_days', 'action' => 'view', $dboMClient['DboMDays1']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($dboMClient['DboMDays2']['name'], array('controller' => 'dbo_m_days', 'action' => 'view', $dboMClient['DboMDays2']['id'])); ?>
		</td>
		<td><?php echo h($dboMClient['DboMClient']['delate']); ?>&nbsp;</td>
		<td><?php echo h($dboMClient['DboMClient']['created']); ?>&nbsp;</td>
		<td><?php echo h($dboMClient['DboMClient']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('表示'), array('action' => 'view', $dboMClient['DboMClient']['id'])); ?>
			<?php echo $this->Html->link(__('変更'), array('action' => 'edit', $dboMClient['DboMClient']['id'])); ?>
			<?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $dboMClient['DboMClient']['id']), null, __('Are you sure you want to delete # %s?', $dboMClient['DboMClient']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('請求テーブル一覧'), array('controller' => 'dbo_t_claims', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('請求テーブル追加'), array('controller' => 'dbo_t_claims', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('案件テーブル一覧'), array('controller' => 'dbo_t_matters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('案件テーブル追加'), array('controller' => 'dbo_t_matters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
