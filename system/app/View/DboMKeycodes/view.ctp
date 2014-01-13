<div class="dboMKeycodes view">
<h2><?php echo __('Dbo M Keycode'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dboMKeycode['DboMKeycode']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($dboMKeycode['DboMKeycode']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Keycode'); ?></dt>
		<dd>
			<?php echo h($dboMKeycode['DboMKeycode']['Keycode']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dbo M Keycode'), array('action' => 'edit', $dboMKeycode['DboMKeycode']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dbo M Keycode'), array('action' => 'delete', $dboMKeycode['DboMKeycode']['id']), null, __('Are you sure you want to delete # %s?', $dboMKeycode['DboMKeycode']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dbo M Keycodes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dbo M Keycode'), array('action' => 'add')); ?> </li>
	</ul>
</div>
