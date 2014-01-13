<div class="dboMAllowances index">
	<h2><?php echo __('手当マスタ'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id', 'id'); ?></th>
			<th><?php echo $this->Paginator->sort('name', '名称'); ?></th>
			<th><?php echo $this->Paginator->sort('delate', '削除フラグ'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dboMAllowances as $dboMAllowance): ?>
	<tr>
		<td><?php echo h($dboMAllowance['DboMAllowance']['id']); ?>&nbsp;</td>
		<td><?php echo h($dboMAllowance['DboMAllowance']['name']); ?>&nbsp;</td>
		<td><?php echo h($dboMAllowance['DboMAllowance']['delate']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('一覧'), array('action' => 'view', $dboMAllowance['DboMAllowance']['id'])); ?>
			<?php echo $this->Html->link(__('変更'), array('action' => 'edit', $dboMAllowance['DboMAllowance']['id'])); ?>
			<?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $dboMAllowance['DboMAllowance']['id']), null, __('Are you sure you want to delete # %s?', $dboMAllowance['DboMAllowance']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('勤怠テーブル一覧'), array('controller' => 'dbo_t_attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('勤怠テーブル追加'), array('controller' => 'dbo_t_attendances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
