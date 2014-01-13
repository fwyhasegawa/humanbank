<div class="dboMTaxes index">
	<h2><?php echo __('Dbo M Taxes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('percentage'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dboMTaxes as $dboMTax): ?>
	<tr>
		<td><?php echo h($dboMTax['DboMTax']['percentage']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dboMTax['DboMTax']['percentage'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dboMTax['DboMTax']['percentage'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dboMTax['DboMTax']['percentage']), null, __('Are you sure you want to delete # %s?', $dboMTax['DboMTax']['percentage'])); ?>
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
		<li><?php echo $this->Html->link(__('New Dbo M Tax'), array('action' => 'add')); ?></li>
	</ul>
</div>
