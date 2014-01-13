<div class="dboTMatters view">
<h2><?php echo __('Dbo T Matter'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dboTMatter['DboTMatter']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dbo M Companies'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dboTMatter['DboMCompanies']['name'], array('controller' => 'dbo_m_companies', 'action' => 'view', $dboTMatter['DboMCompanies']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dbo M Clients'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dboTMatter['DboMClients']['name'], array('controller' => 'dbo_m_clients', 'action' => 'view', $dboTMatter['DboMClients']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($dboTMatter['DboTMatter']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Addr'); ?></dt>
		<dd>
			<?php echo h($dboTMatter['DboTMatter']['addr']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($dboTMatter['DboTMatter']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time Start'); ?></dt>
		<dd>
			<?php echo h($dboTMatter['DboTMatter']['time_start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time End'); ?></dt>
		<dd>
			<?php echo h($dboTMatter['DboTMatter']['time_end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interval Start'); ?></dt>
		<dd>
			<?php echo h($dboTMatter['DboTMatter']['interval_start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interval End'); ?></dt>
		<dd>
			<?php echo h($dboTMatter['DboTMatter']['interval_end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nikyu Flg'); ?></dt>
		<dd>
			<?php echo h($dboTMatter['DboTMatter']['nikyu_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Seikyu'); ?></dt>
		<dd>
			<?php echo h($dboTMatter['DboTMatter']['price_seikyu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Siharai'); ?></dt>
		<dd>
			<?php echo h($dboTMatter['DboTMatter']['price_siharai']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delate'); ?></dt>
		<dd>
			<?php echo h($dboTMatter['DboTMatter']['delate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($dboTMatter['DboTMatter']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($dboTMatter['DboTMatter']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dbo T Matter'), array('action' => 'edit', $dboTMatter['DboTMatter']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dbo T Matter'), array('action' => 'delete', $dboTMatter['DboTMatter']['id']), null, __('Are you sure you want to delete # %s?', $dboTMatter['DboTMatter']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dbo T Matters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dbo T Matter'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dbo M Companies'), array('controller' => 'dbo_m_companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dbo M Companies'), array('controller' => 'dbo_m_companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dbo M Clients'), array('controller' => 'dbo_m_clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dbo M Clients'), array('controller' => 'dbo_m_clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
