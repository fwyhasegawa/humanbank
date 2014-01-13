<div class="dboTPayments view">
<h2><?php echo __('Dbo T Payment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dboTPayment['DboTPayment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('会社名'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dboTPayment['DboMCompanies']['name'], array('controller' => 'dbo_m_companies', 'action' => 'view', $dboTPayment['DboMCompanies']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('スタッフＩＤ'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dboTPayment['DboMStaffs']['name'], array('controller' => 'dbo_m_staffs', 'action' => 'view', $dboTPayment['DboMStaffs']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('給与'); ?></dt>
		<dd>
			<?php echo h($dboTPayment['DboTPayment']['kyuuyo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('締め日'); ?></dt>
		<dd>
			<?php echo h($dboTPayment['DboTPayment']['sime_day']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('算出開始日'); ?></dt>
		<dd>
			<?php echo h($dboTPayment['DboTPayment']['calc_start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('算出終了日'); ?></dt>
		<dd>
			<?php echo h($dboTPayment['DboTPayment']['calc_end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('支払い日'); ?></dt>
		<dd>
			<?php echo h($dboTPayment['DboTPayment']['siharai_day']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('雇用保険控除額'); ?></dt>
		<dd>
			<?php echo h($dboTPayment['DboTPayment']['koyo_hoken']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('健康保険控除額'); ?></dt>
		<dd>
			<?php echo h($dboTPayment['DboTPayment']['kenko_hoken']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('介護保険控除額'); ?></dt>
		<dd>
			<?php echo h($dboTPayment['DboTPayment']['kaigo_hoken']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('厚生年金控除額'); ?></dt>
		<dd>
			<?php echo h($dboTPayment['DboTPayment']['kose_nenkin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('所得税控除額'); ?></dt>
		<dd>
			<?php echo h($dboTPayment['DboTPayment']['syotokuzei']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('交通費手当'); ?></dt>
		<dd>
			<?php echo h($dboTPayment['DboTPayment']['koutsuhi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('その他手当'); ?></dt>
		<dd>
			<?php echo h($dboTPayment['DboTPayment']['teate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('総支給額'); ?></dt>
		<dd>
			<?php echo h($dboTPayment['DboTPayment']['sousikyu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('削除フラグ'); ?></dt>
		<dd>
			<?php echo h($dboTPayment['DboTPayment']['delate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('作成日'); ?></dt>
		<dd>
			<?php echo h($dboTPayment['DboTPayment']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('変更日'); ?></dt>
		<dd>
			<?php echo h($dboTPayment['DboTPayment']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('メニュー'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('変更'), array('action' => 'edit', $dboTPayment['DboTPayment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $dboTPayment['DboTPayment']['id']), null, __('Are you sure you want to delete # %s?', $dboTPayment['DboTPayment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('一覧に戻る'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('追加'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('スタッフマスタ一覧'), array('controller' => 'dbo_m_staffs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('スタッフマスタ追加'), array('controller' => 'dbo_m_staffs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
