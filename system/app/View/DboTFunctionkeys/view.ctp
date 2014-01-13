<div class="dboTFunctionkeys view">
<h2><?php echo __('Dbo T Functionkey'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dboTFunctionkey['DboTFunctionkey']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($dboTFunctionkey['DboTFunctionkey']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dbo M Keycodes'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dboTFunctionkey['DboMKeycodes']['name'], array('controller' => 'dbo_m_keycodes', 'action' => 'view', $dboTFunctionkey['DboMKeycodes']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dbo T Matters'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dboTFunctionkey['DboTMatters']['name'], array('controller' => 'dbo_t_matters', 'action' => 'view', $dboTFunctionkey['DboTMatters']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Users'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dboTFunctionkey['Users']['id'], array('controller' => 'users', 'action' => 'view', $dboTFunctionkey['Users']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dbo T Functionkey'), array('action' => 'edit', $dboTFunctionkey['DboTFunctionkey']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dbo T Functionkey'), array('action' => 'delete', $dboTFunctionkey['DboTFunctionkey']['id']), null, __('Are you sure you want to delete # %s?', $dboTFunctionkey['DboTFunctionkey']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dbo T Functionkeys'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dbo T Functionkey'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dbo M Keycodes'), array('controller' => 'dbo_m_keycodes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dbo M Keycodes'), array('controller' => 'dbo_m_keycodes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dbo T Matters'), array('controller' => 'dbo_t_matters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dbo T Matters'), array('controller' => 'dbo_t_matters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
