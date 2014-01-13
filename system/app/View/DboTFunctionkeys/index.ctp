<div class="dboTFunctionkeys index">
	<h2><?php echo __('Dbo T Functionkeys'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('dbo_m_keycodes_id'); ?></th>
			<th><?php echo $this->Paginator->sort('dbo_t_matters_id'); ?></th>
			<th><?php echo $this->Paginator->sort('users_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dboTFunctionkeys as $dboTFunctionkey): ?>
	<tr>
		<td><?php echo h($dboTFunctionkey['DboTFunctionkey']['id']); ?>&nbsp;</td>
		<td><?php echo h($dboTFunctionkey['DboTFunctionkey']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dboTFunctionkey['DboMKeycodes']['name'], array('controller' => 'dbo_m_keycodes', 'action' => 'view', $dboTFunctionkey['DboMKeycodes']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($dboTFunctionkey['DboTMatters']['name'], array('controller' => 'dbo_t_matters', 'action' => 'view', $dboTFunctionkey['DboTMatters']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($dboTFunctionkey['Users']['id'], array('controller' => 'users', 'action' => 'view', $dboTFunctionkey['Users']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dboTFunctionkey['DboTFunctionkey']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dboTFunctionkey['DboTFunctionkey']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dboTFunctionkey['DboTFunctionkey']['id']), null, __('Are you sure you want to delete # %s?', $dboTFunctionkey['DboTFunctionkey']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Dbo T Functionkey'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Dbo M Keycodes'), array('controller' => 'dbo_m_keycodes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dbo M Keycodes'), array('controller' => 'dbo_m_keycodes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dbo T Matters'), array('controller' => 'dbo_t_matters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dbo T Matters'), array('controller' => 'dbo_t_matters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
