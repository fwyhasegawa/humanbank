<div class="dboMManages view">
<h2><?php echo __('Dbo M Manage'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dboMManage['DboMManage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('権限名'); ?></dt>
		<dd>
			<?php echo h($dboMManage['DboMManage']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('権限レベル'); ?></dt>
		<dd>
			<?php echo h($dboMManage['DboMManage']['level']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('削除フラグ'); ?></dt>
		<dd>
			<?php echo h($dboMManage['DboMManage']['delate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('作成日'); ?></dt>
		<dd>
			<?php echo h($dboMManage['DboMManage']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('変更日'); ?></dt>
		<dd>
			<?php echo h($dboMManage['DboMManage']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('メニュー'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('この項目を編集'), array('action' => 'edit', $dboMManage['DboMManage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('この項目を削除'), array('action' => 'delete', $dboMManage['DboMManage']['id']), null, __('Are you sure you want to delete # %s?', $dboMManage['DboMManage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('一覧に戻る'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('追加'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('ログイン情報一覧'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('ログイン情報追加'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($dboMManage['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('ユーザ名'); ?></th>
		<th><?php echo __('パスワード'); ?></th>
		<th><?php echo __('表示用スタッフ'); ?></th>
		<th><?php echo __('管理権限Id'); ?></th>
		<th><?php echo __('削除フラグ'); ?></th>
		<th><?php echo __('作成日'); ?></th>
		<th><?php echo __('変更日'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dboMManage['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['staff_name']; ?></td>
			<td><?php echo $user['dbo_m_manages_id']; ?></td>
			<td><?php echo $user['delate']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('一覧'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('変更'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('削除'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('ログイン情報テーブル追加'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
