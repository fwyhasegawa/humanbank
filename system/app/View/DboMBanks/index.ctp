<div class="dboMBanks index">
	<h2><?php echo __('銀行マスタ'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id', 'id'); ?></th>
			<th><?php echo $this->Paginator->sort('name', '銀行名'); ?></th>
			<th><?php echo $this->Paginator->sort('siten_name', '支店名'); ?></th>
			<th><?php echo $this->Paginator->sort('kouza', '口座'); ?></th>
			<th><?php echo $this->Paginator->sort('delate', '削除フラグ'); ?></th>
			<th><?php echo $this->Paginator->sort('created', '作成日'); ?></th>
			<th><?php echo $this->Paginator->sort('modified', '変更日'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dboMBanks as $dboMBank): ?>
	<tr>
		<td><?php echo h($dboMBank['DboMBank']['id']); ?>&nbsp;</td>
		<td><?php echo h($dboMBank['DboMBank']['name']); ?>&nbsp;</td>
		<td><?php echo h($dboMBank['DboMBank']['siten_name']); ?>&nbsp;</td>
		<td><?php echo h($dboMBank['DboMBank']['kouza']); ?>&nbsp;</td>
		<td><?php echo h($dboMBank['DboMBank']['delate']); ?>&nbsp;</td>
		<td><?php echo h($dboMBank['DboMBank']['created']); ?>&nbsp;</td>
		<td><?php echo h($dboMBank['DboMBank']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('表示'), array('action' => 'view', $dboMBank['DboMBank']['id'])); ?>
			<?php echo $this->Html->link(__('変更'), array('action' => 'edit', $dboMBank['DboMBank']['id'])); ?>
			<?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $dboMBank['DboMBank']['id']), null, __('Are you sure you want to delete # %s?', $dboMBank['DboMBank']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('自社マスタ一覧'), array('controller' => 'dbo_m_companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('自社マスタ追加'), array('controller' => 'dbo_m_companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('スタッフマスタ一覧'), array('controller' => 'dbo_m_staffs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('スタッフマスタ追加'), array('controller' => 'dbo_m_staffs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
