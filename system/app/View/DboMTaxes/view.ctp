<div class="dboMTaxes view">
<h2><?php echo __('Dbo M Tax'); ?></h2>
	<dl>
		<dt><?php echo __('Percentage'); ?></dt>
		<dd>
			<?php echo h($dboMTax['DboMTax']['percentage']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dbo M Tax'), array('action' => 'edit', $dboMTax['DboMTax']['percentage'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dbo M Tax'), array('action' => 'delete', $dboMTax['DboMTax']['percentage']), null, __('Are you sure you want to delete # %s?', $dboMTax['DboMTax']['percentage'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dbo M Taxes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dbo M Tax'), array('action' => 'add')); ?> </li>
	</ul>
</div>
