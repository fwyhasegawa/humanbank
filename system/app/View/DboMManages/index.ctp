<div class="dboMManages index">
	<h2><?php echo __('管理権限'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id', 'id'); ?></th>
			<th><?php echo $this->Paginator->sort('name', '権限名'); ?></th>
			<th><?php echo $this->Paginator->sort('level', '権限レベル'); ?></th>
			<th><?php echo $this->Paginator->sort('delate', '削除フラグ'); ?></th>
			<th><?php echo $this->Paginator->sort('created', '作成日'); ?></th>
			<th><?php echo $this->Paginator->sort('modified', '変更日'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dboMManages as $dboMManage): ?>
	<tr>
		<td><?php echo h($dboMManage['DboMManage']['id']); ?>&nbsp;</td>
		<td><?php echo h($dboMManage['DboMManage']['name']); ?>&nbsp;</td>
		<td><?php echo h($dboMManage['DboMManage']['level']); ?>&nbsp;</td>
		<td><?php echo h($dboMManage['DboMManage']['delate']); ?>&nbsp;</td>
		<td><?php echo h($dboMManage['DboMManage']['created']); ?>&nbsp;</td>
		<td><?php echo h($dboMManage['DboMManage']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('表示'), array('action' => 'view', $dboMManage['DboMManage']['id'])); ?>
			<?php echo $this->Html->link(__('変更'), array('action' => 'edit', $dboMManage['DboMManage']['id'])); ?>
			<?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $dboMManage['DboMManage']['id']), null, __('Are you sure you want to delete # %s?', $dboMManage['DboMManage']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('追加'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('ログイン情報テーブル一覧表示'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('ログイン情報テーブル追加'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
		</ul>
</div>
