<div class="dboTPayments index">
	<h2><?php echo __('Dbo T Payments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id', 'id'); ?></th>
			<th><?php echo $this->Paginator->sort('dbo_m_companies_id', '会社ID'); ?></th>
			<th><?php echo $this->Paginator->sort('dbo_m_staffs_id', 'スタッフid'); ?></th>
			<th><?php echo $this->Paginator->sort('kyuyo', '給与'); ?></th>
			<th><?php echo $this->Paginator->sort('sime_day', '締め日'); ?></th>
			<th><?php echo $this->Paginator->sort('calc_start', '算出開始日'); ?></th>
			<th><?php echo $this->Paginator->sort('calc_end', '算出終了日'); ?></th>
			<th><?php echo $this->Paginator->sort('siharai_day', '支払い日'); ?></th>
			<th><?php echo $this->Paginator->sort('koyo_hoken', '雇用保険控除'); ?></th>
			<th><?php echo $this->Paginator->sort('kenko_hoken', '健康保険控除'); ?></th>
			<th><?php echo $this->Paginator->sort('kaigo_hoken', '介護保険控除'); ?></th>
			<th><?php echo $this->Paginator->sort('kose_nenkin', '厚生年金控除'); ?></th>
			<th><?php echo $this->Paginator->sort('syotokuzei', '所得税控除'); ?></th>
			<th><?php echo $this->Paginator->sort('koutsuhi', '交通費手当'); ?></th>
			<th><?php echo $this->Paginator->sort('teate', 'その他手当'); ?></th>
			<th><?php echo $this->Paginator->sort('sousikyu', '総支給額'); ?></th>
			<th><?php echo $this->Paginator->sort('delate', '削除フラグ'); ?></th>
			<th><?php echo $this->Paginator->sort('created', '作成日'); ?></th>
			<th><?php echo $this->Paginator->sort('modified', '変更日'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dboTPayments as $dboTPayment): ?>
	<tr>
		<td><?php echo h($dboTPayment['DboTPayment']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dboTPayment['DboMCompanies']['name'], array('controller' => 'dbo_m_companies', 'action' => 'view', $dboTPayment['DboMCompanies']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($dboTPayment['DboMStaffs']['name'], array('controller' => 'dbo_m_staffs', 'action' => 'view', $dboTPayment['DboMStaffs']['id'])); ?>
		</td>
		<td><?php echo h($dboTPayment['DboTPayment']['kyuyo']); ?>&nbsp;</td>
		<td><?php echo h($dboTPayment['DboTPayment']['sime_day']); ?>&nbsp;</td>
		<td><?php echo h($dboTPayment['DboTPayment']['calc_start']); ?>&nbsp;</td>
		<td><?php echo h($dboTPayment['DboTPayment']['calc_end']); ?>&nbsp;</td>
		<td><?php echo h($dboTPayment['DboTPayment']['siharai_day']); ?>&nbsp;</td>
		<td><?php echo h($dboTPayment['DboTPayment']['koyo_hoken']); ?>&nbsp;</td>
		<td><?php echo h($dboTPayment['DboTPayment']['kenko_hoken']); ?>&nbsp;</td>
		<td><?php echo h($dboTPayment['DboTPayment']['kaigo_hoken']); ?>&nbsp;</td>
		<td><?php echo h($dboTPayment['DboTPayment']['kose_nenkin']); ?>&nbsp;</td>
		<td><?php echo h($dboTPayment['DboTPayment']['syotokuzei']); ?>&nbsp;</td>
		<td><?php echo h($dboTPayment['DboTPayment']['koutsuhi']); ?>&nbsp;</td>
		<td><?php echo h($dboTPayment['DboTPayment']['teate']); ?>&nbsp;</td>
		<td><?php echo h($dboTPayment['DboTPayment']['sousikyu']); ?>&nbsp;</td>
		<td><?php echo h($dboTPayment['DboTPayment']['delate']); ?>&nbsp;</td>
		<td><?php echo h($dboTPayment['DboTPayment']['created']); ?>&nbsp;</td>
		<td><?php echo h($dboTPayment['DboTPayment']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dboTPayment['DboTPayment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dboTPayment['DboTPayment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dboTPayment['DboTPayment']['id']), null, __('Are you sure you want to delete # %s?', $dboTPayment['DboTPayment']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('スタッフマスタ一覧'), array('controller' => 'dbo_m_staffs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('スタッフマスタ追加'), array('controller' => 'dbo_m_staffs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
