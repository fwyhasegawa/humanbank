<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('会社名'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['DboMCompanies']['name'], array('controller' => 'dbo_m_companies', 'action' => 'view', $user['DboMCompanies']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ユーザ名'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('パスワード'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('表示用スタッフ名'); ?></dt>
		<dd>
			<?php echo h($user['User']['staff_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dbo M Manages'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['DboMManages']['name'], array('controller' => 'dbo_m_manages', 'action' => 'view', $user['DboMManages']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('削除フラグ'); ?></dt>
		<dd>
			<?php echo h($user['User']['delate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('作成日'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('変更日'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('この情報を編集'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('この項目を削除'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('一覧に戻る'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('追加'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('管理権限マスタ一覧'), array('controller' => 'dbo_m_manages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('管理権限マスタ追加'), array('controller' => 'dbo_m_manages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
