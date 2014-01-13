<div class="dboMNominals index">
	<h2><?php echo __('名目マスタ'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id', 'id'); ?></th>
			<th><?php echo $this->Paginator->sort('name', '名前'); ?></th>
			<th class="actions"><?php echo __('メニュー'); ?></th>
	</tr>
	<?php foreach ($dboMNominals as $dboMNominal): ?>
	<tr>
		<td><?php echo h($dboMNominal['DboMNominal']['id']); ?>&nbsp;</td>
		<td><?php echo h($dboMNominal['DboMNominal']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('表示'), array('action' => 'view', $dboMNominal['DboMNominal']['id'])); ?>
			<?php echo $this->Html->link(__('変更'), array('action' => 'edit', $dboMNominal['DboMNominal']['id'])); ?>
			<?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $dboMNominal['DboMNominal']['id']), null, __('Are you sure you want to delete # %s?', $dboMNominal['DboMNominal']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
