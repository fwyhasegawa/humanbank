<div class="users index">
	<h2><?php echo __('ログイン情報テーブル'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('dbo_m_companies_id', '会社ID'); ?></th>
			<th><?php echo $this->Paginator->sort('username', 'ユーザ名'); ?></th>
			<th><?php echo $this->Paginator->sort('password', 'パスワード'); ?></th>
			<th><?php echo $this->Paginator->sort('staff_name', '表示名'); ?></th>
			<th><?php echo $this->Paginator->sort('dbo_m_manages_id', '権利権限ID'); ?></th>
			<th><?php echo $this->Paginator->sort('delate', '削除フラグ'); ?></th>
			<th><?php echo $this->Paginator->sort('created', '作成日'); ?></th>
			<th><?php echo $this->Paginator->sort('modified', '変更日'); ?></th>
			<th class="actions"><?php echo __('操作'); ?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['DboMCompanies']['name'], array('controller' => 'dbo_m_companies', 'action' => 'view', $user['DboMCompanies']['id'])); ?>
		</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['staff_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['DboMManages']['name'], array('controller' => 'dbo_m_manages', 'action' => 'view', $user['DboMManages']['id'])); ?>
		</td>
		<td><?php echo h($user['User']['delate']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('表示'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('変更'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
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
	<h3><?php echo __('メニュー'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('追加'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('権限マスタ一覧表示'), array('controller' => 'dbo_m_manages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('権限マスタ追加'), array('controller' => 'dbo_m_manages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
		</ul>
</div>
