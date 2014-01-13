<div class="dboTFunctionkeys form">
<?php echo $this->Form->create('DboTFunctionkey'); ?>
	<fieldset>
		<legend><?php echo __('Edit Dbo T Functionkey'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('dbo_m_keycodes_id');
		echo $this->Form->input('dbo_t_matters_id');
		echo $this->Form->input('users_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DboTFunctionkey.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DboTFunctionkey.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Dbo T Functionkeys'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Dbo M Keycodes'), array('controller' => 'dbo_m_keycodes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dbo M Keycodes'), array('controller' => 'dbo_m_keycodes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dbo T Matters'), array('controller' => 'dbo_t_matters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dbo T Matters'), array('controller' => 'dbo_t_matters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
