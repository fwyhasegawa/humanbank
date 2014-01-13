<div class="dboTMatters form">
<?php echo $this->Form->create('DboTMatter'); ?>
	<fieldset>
		<legend><?php echo __('Edit Dbo T Matter'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('dbo_m_companies_id');
		echo $this->Form->input('dbo_m_clients_id');
		echo $this->Form->input('name');
		echo $this->Form->input('addr');
		echo $this->Form->input('tel');
		echo $this->Form->input('time_start');
		echo $this->Form->input('time_end');
		echo $this->Form->input('interval_start');
		echo $this->Form->input('interval_end');
		echo $this->Form->input('nikyu_flg');
		echo $this->Form->input('price_seikyu');
		echo $this->Form->input('price_siharai');
		echo $this->Form->input('delate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DboTMatter.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DboTMatter.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Dbo T Matters'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Dbo M Companies'), array('controller' => 'dbo_m_companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dbo M Companies'), array('controller' => 'dbo_m_companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dbo M Clients'), array('controller' => 'dbo_m_clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dbo M Clients'), array('controller' => 'dbo_m_clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
