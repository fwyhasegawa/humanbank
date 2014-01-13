<div class="dboMClients view">
<h2><?php echo __('Dbo M Client'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dboMClient['DboMClient']['id']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('会社名'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dboMClient['DboMCompanies']['name'], array('controller' => 'dbo_m_companies', 'action' => 'view', $dboMClient['DboMCompanies']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('名前'); ?></dt>
		<dd>
			<?php echo h($dboMClient['DboMClient']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('住所'); ?></dt>
		<dd>
			<?php echo h($dboMClient['DboMClient']['addr']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('電話番号'); ?></dt>
		<dd>
			<?php echo h($dboMClient['DboMClient']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FAX番号'); ?></dt>
		<dd>
			<?php echo h($dboMClient['DboMClient']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('締め日'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dboMClient['DboMDays1']['name'], array('controller' => 'dbo_m_days', 'action' => 'view', $dboMClient['DboMDays1']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('支払い日'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dboMClient['DboMDays2']['name'], array('controller' => 'dbo_m_days', 'action' => 'view', $dboMClient['DboMDays2']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('削除フラグ'); ?></dt>
		<dd>
			<?php echo h($dboMClient['DboMClient']['delate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('作成日'); ?></dt>
		<dd>
			<?php echo h($dboMClient['DboMClient']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('変更日'); ?></dt>
		<dd>
			<?php echo h($dboMClient['DboMClient']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('メニュー'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('変更'), array('action' => 'edit', $dboMClient['DboMClient']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $dboMClient['DboMClient']['id']), null, __('Are you sure you want to delete # %s?', $dboMClient['DboMClient']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('一覧に戻る'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('追加'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('日にちマスタ一覧'), array('controller' => 'dbo_m_days', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('日にちマスタ追加'), array('controller' => 'dbo_m_days', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('請求テーブル一覧'), array('controller' => 'dbo_t_claims', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('請求テーブル追加'), array('controller' => 'dbo_t_claims', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('案件テーブル一覧'), array('controller' => 'dbo_t_matters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('案件マスタ追加'), array('controller' => 'dbo_t_matters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Dbo T claims'); ?></h3>
	<?php if (!empty($dboMClient['DboTClaims'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('顧客Id'); ?></th>
		<th><?php echo __('請求金額税抜き'); ?></th>
		<th><?php echo __('算出開始日'); ?></th>
		<th><?php echo __('算出締め日'); ?></th>
		<th><?php echo __('請求日'); ?></th>
		<th><?php echo __('削除フラグ'); ?></th>
		<th><?php echo __('作成日'); ?></th>
		<th><?php echo __('変更日'); ?></th>
		<th class="actions"><?php echo __('メニュー'); ?></th>
	</tr>
	<?php foreach ($dboMClient['DboTClaims'] as $dboTClaims): ?>
		<tr>
			<td><?php echo $dboTClaims['id']; ?></td>
			<td><?php echo $dboTClaims['dbo_m_clients_id']; ?></td>
			<td><?php echo $dboTClaims['price']; ?></td>
			<td><?php echo $dboTClaims['calc_start']; ?></td>
			<td><?php echo $dboTClaims['calc_end']; ?></td>
			<td><?php echo $dboTClaims['Claim_day']; ?></td>
			<td><?php echo $dboTClaims['delate']; ?></td>
			<td><?php echo $dboTClaims['created']; ?></td>
			<td><?php echo $dboTClaims['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('表示'), array('controller' => 'dbo_t_claims', 'action' => 'view', $dboTClaims['id'])); ?>
				<?php echo $this->Html->link(__('変更'), array('controller' => 'dbo_t_claims', 'action' => 'edit', $dboTClaims['id'])); ?>
				<?php echo $this->Form->postLink(__('削除'), array('controller' => 'dbo_t_claims', 'action' => 'delete', $dboTClaims['id']), null, __('Are you sure you want to delete # %s?', $dboTClaims['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('請求テーブル追加'), array('controller' => 'dbo_t_claims', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Dbo T Matters'); ?></h3>
	<?php if (!empty($dboMClient['DboTMatter'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('顧客Id'); ?></th>
		<th><?php echo __('なまえ　'); ?></th>
		<th><?php echo __('住所'); ?></th>
		<th><?php echo __('電話番号'); ?></th>
		<th><?php echo __('日給フラグ'); ?></th>
		<th><?php echo __('請求単価'); ?></th>
		<th><?php echo __('支払い単価'); ?></th>
		<th><?php echo __('削除フラグ'); ?></th>
		<th><?php echo __('作成日'); ?></th>
		<th><?php echo __('変更日'); ?></th>
		<th class="actions"><?php echo __('メニュー'); ?></th>
	</tr>
	<?php foreach ($dboMClient['DboTMatter'] as $dboTMatter): ?>
		<tr>
			<td><?php echo $dboTMatter['id']; ?></td>
			<td><?php echo $dboTMatter['dbo_m_clients_id']; ?></td>
			<td><?php echo $dboTMatter['name']; ?></td>
			<td><?php echo $dboTMatter['addr']; ?></td>
			<td><?php echo $dboTMatter['tel']; ?></td>
			<td><?php echo $dboTMatter['nikyu_flg']; ?></td>
			<td><?php echo $dboTMatter['price_seikyu']; ?></td>
			<td><?php echo $dboTMatter['price_siharai']; ?></td>
			<td><?php echo $dboTMatter['koutsuhi']; ?></td>
			<td><?php echo $dboTMatter['delate']; ?></td>
			<td><?php echo $dboTMatter['created']; ?></td>
			<td><?php echo $dboTMatter['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('表示w'), array('controller' => 'dbo_t_matters', 'action' => 'view', $dboTMatter['id'])); ?>
				<?php echo $this->Html->link(__('変更'), array('controller' => 'dbo_t_matters', 'action' => 'edit', $dboTMatter['id'])); ?>
				<?php echo $this->Form->postLink(__('削除'), array('controller' => 'dbo_t_matters', 'action' => 'delete', $dboTMatter['id']), null, __('Are you sure you want to delete # %s?', $dboTMatter['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('案件テーブル追加'), array('controller' => 'dbo_t_matters', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
