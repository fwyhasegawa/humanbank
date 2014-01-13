<div class="dboTClaims index">
	<h2><?php echo __('請求テーブル'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id', 'id'); ?></th>
			<th><?php echo $this->Paginator->sort('dbo_m_companies_id', '会社ID'); ?></th>
			<th><?php echo $this->Paginator->sort('dbo_m_clients_id', '顧客id'); ?></th>
			<th><?php echo $this->Paginator->sort('price', '請求金額税抜き'); ?></th>
			<th><?php echo $this->Paginator->sort('calc_start', '算出開始日'); ?></th>
			<th><?php echo $this->Paginator->sort('calc_end', '算出終了日'); ?></th>
			<th><?php echo $this->Paginator->sort('seikyu_day', '請求日'); ?></th>
			<th><?php echo $this->Paginator->sort('delate', '削除フラグ'); ?></th>
			<th><?php echo $this->Paginator->sort('created', '作成日'); ?></th>
			<th><?php echo $this->Paginator->sort('modified', '変更日'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dboTClaims as $dboTClaims): ?>
	<tr>
		<td><?php echo h($dboTClaims['DboTClaims']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dboTClaims['DboMCompanies']['name'], array('controller' => 'dbo_m_companies', 'action' => 'view', $dboTClaims['DboMCompanies']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($dboTClaims['DboMClients']['name'], array('controller' => 'dbo_m_clients', 'action' => 'view', $dboTClaims['DboMClients']['id'])); ?>
		</td>
		<td><?php echo h($dboTClaims['DboTClaims']['price']); ?>&nbsp;</td>
		<td><?php echo h($dboTClaims['DboTClaims']['calc_start']); ?>&nbsp;</td>
		<td><?php echo h($dboTClaims['DboTClaims']['calc_end']); ?>&nbsp;</td>
		<td><?php echo h($dboTClaims['DboTClaims']['seikyu_day']); ?>&nbsp;</td>
		<td><?php echo h($dboTClaims['DboTClaims']['delate']); ?>&nbsp;</td>
		<td><?php echo h($dboTClaims['DboTClaims']['created']); ?>&nbsp;</td>
		<td><?php echo h($dboTClaims['DboTClaims']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('表示'), array('action' => 'view', $dboTClaims['DboTClaims']['id'])); ?>
			<?php echo $this->Html->link(__('変更'), array('action' => 'edit', $dboTClaims['DboTClaims']['id'])); ?>
			<?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $dboTClaims['DboTClaims']['id']), null, __('Are you sure you want to delete # %s?', $dboTClaims['DboTClaims']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('顧客マスタ一覧'), array('controller' => 'dbo_m_clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('顧客マスタ追加'), array('controller' => 'dbo_m_clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('勤怠テーブル一覧'), array('controller' => 'dbo_t_attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('勤怠テーブル追加'), array('controller' => 'dbo_t_attendances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
