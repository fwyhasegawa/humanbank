<div class="dboMTaxes form">
<?php echo $this->Form->create('DboMTax'); ?>
	<fieldset>
		<legend><?php echo __('Add Dbo M Tax'); ?></legend>
	<?php
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Dbo M Taxes'), array('action' => 'index')); ?></li>
	</ul>
</div>
