<div class="dboTMatters index">
	<h2><?php echo __('Dbo T Matters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('dbo_m_companies_id'); ?></th>
			<th><?php echo $this->Paginator->sort('dbo_m_clients_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('addr'); ?></th>
			<th><?php echo $this->Paginator->sort('tel'); ?></th>
			<th><?php echo $this->Paginator->sort('time_start'); ?></th>
			<th><?php echo $this->Paginator->sort('time_end'); ?></th>
			<th><?php echo $this->Paginator->sort('interval_start'); ?></th>
			<th><?php echo $this->Paginator->sort('interval_end'); ?></th>
			<th><?php echo $this->Paginator->sort('nikyu_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('price_seikyu'); ?></th>
			<th><?php echo $this->Paginator->sort('price_siharai'); ?></th>
			<th><?php echo $this->Paginator->sort('delate'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dboTMatters as $dboTMatter): ?>
	<tr>
		<td><?php echo h($dboTMatter['DboTMatter']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dboTMatter['DboMCompanies']['name'], array('controller' => 'dbo_m_companies', 'action' => 'view', $dboTMatter['DboMCompanies']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($dboTMatter['DboMClients']['name'], array('controller' => 'dbo_m_clients', 'action' => 'view', $dboTMatter['DboMClients']['id'])); ?>
		</td>
		<td><?php echo h($dboTMatter['DboTMatter']['name']); ?>&nbsp;</td>
		<td><?php echo h($dboTMatter['DboTMatter']['addr']); ?>&nbsp;</td>
		<td><?php echo h($dboTMatter['DboTMatter']['tel']); ?>&nbsp;</td>
		<td><?php echo h($dboTMatter['DboTMatter']['time_start']); ?>&nbsp;</td>
		<td><?php echo h($dboTMatter['DboTMatter']['time_end']); ?>&nbsp;</td>
		<td><?php echo h($dboTMatter['DboTMatter']['interval_start']); ?>&nbsp;</td>
		<td><?php echo h($dboTMatter['DboTMatter']['interval_end']); ?>&nbsp;</td>
		<td><?php echo h($dboTMatter['DboTMatter']['nikyu_flg']); ?>&nbsp;</td>
		<td><?php echo h($dboTMatter['DboTMatter']['price_seikyu']); ?>&nbsp;</td>
		<td><?php echo h($dboTMatter['DboTMatter']['price_siharai']); ?>&nbsp;</td>
		<td><?php echo h($dboTMatter['DboTMatter']['delate']); ?>&nbsp;</td>
		<td><?php echo h($dboTMatter['DboTMatter']['created']); ?>&nbsp;</td>
		<td><?php echo h($dboTMatter['DboTMatter']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dboTMatter['DboTMatter']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dboTMatter['DboTMatter']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dboTMatter['DboTMatter']['id']), null, __('Are you sure you want to delete # %s?', $dboTMatter['DboTMatter']['id'])); ?>
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
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Dbo T Matter'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Dbo M Companies'), array('controller' => 'dbo_m_companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dbo M Companies'), array('controller' => 'dbo_m_companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dbo M Clients'), array('controller' => 'dbo_m_clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dbo M Clients'), array('controller' => 'dbo_m_clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
