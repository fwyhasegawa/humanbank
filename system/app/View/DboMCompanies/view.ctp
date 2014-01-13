<div class="dboMCompanies view">
<h2><?php echo __('Dbo M Company'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dboMCompany['DboMCompany']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('名前'); ?></dt>
		<dd>
			<?php echo h($dboMCompany['DboMCompany']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('住所'); ?></dt>
		<dd>
			<?php echo h($dboMCompany['DboMCompany']['addr']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('電話番号'); ?></dt>
		<dd>
			<?php echo h($dboMCompany['DboMCompany']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FAX番号'); ?></dt>
		<dd>
			<?php echo h($dboMCompany['DboMCompany']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('銀行ID'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dboMCompany['DboMBanks']['name'], array('controller' => 'dbo_m_banks', 'action' => 'view', $dboMCompany['DboMBanks']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('口座番号'); ?></dt>
		<dd>
			<?php echo h($dboMCompany['DboMCompany']['account_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('削除フラグ'); ?></dt>
		<dd>
			<?php echo h($dboMCompany['DboMCompany']['delate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('作成日'); ?></dt>
		<dd>
			<?php echo h($dboMCompany['DboMCompany']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('変更日'); ?></dt>
		<dd>
			<?php echo h($dboMCompany['DboMCompany']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('メニュー'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('この項目を変更'), array('action' => 'edit', $dboMCompany['DboMCompany']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('この項目を削除'), array('action' => 'delete', $dboMCompany['DboMCompany']['id']), null, __('Are you sure you want to delete # %s?', $dboMCompany['DboMCompany']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('一覧に戻る'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('追加'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('銀行マスタ一覧s'), array('controller' => 'dbo_m_banks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('銀行マスタ追加'), array('controller' => 'dbo_m_banks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
