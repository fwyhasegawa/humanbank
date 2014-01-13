<div class="dboTAttendances view">
<h2><?php echo __('Dbo T Attendance'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dboTAttendance['DboTAttendance']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('会社名'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dboTAttendance['DboMCompanies']['name'], array('controller' => 'dbo_m_companies', 'action' => 'view', $dboTAttendance['DboMCompanies']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('スタッフID'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dboTAttendance['DboMStaffs']['name'], array('controller' => 'dbo_m_staffs', 'action' => 'view', $dboTAttendance['DboMStaffs']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('案件ID'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dboTAttendance['DboTMatters']['name'], array('controller' => 'dbo_t_matters', 'action' => 'view', $dboTAttendance['DboTMatters']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('請求Id'); ?></dt>
		<dd>
			<?php echo h($dboTAttendance['DboTAttendance']['dbo_t_claim_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('勤務日'); ?></dt>
		<dd>
			<?php echo h($dboTAttendance['DboTAttendance']['service_day']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('開始時間'); ?></dt>
		<dd>
			<?php echo h($dboTAttendance['DboTAttendance']['time_start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('終了時間'); ?></dt>
		<dd>
			<?php echo h($dboTAttendance['DboTAttendance']['time_end']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('休憩開始時間'); ?></dt>
		<dd>
			<?php echo h($dboTAttendance['DboTAttendance']['interval_start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('休憩終了時間'); ?></dt>
		<dd>
			<?php echo h($dboTAttendance['DboTAttendance']['interval_end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('勤務時間'); ?></dt>
		<dd>
			<?php echo h($dboTAttendance['DboTAttendance']['time_total']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('残業時間'); ?></dt>
		<dd>
			<?php echo h($dboTAttendance['DboTAttendance']['time_overtime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('深夜残業時間'); ?></dt>
		<dd>
			<?php echo h($dboTAttendance['DboTAttendance']['time_latetime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('休憩時間'); ?></dt>
		<dd>
			<?php echo h($dboTAttendance['DboTAttendance']['time_interval']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('売上金額'); ?></dt>
		<dd>
			<?php echo h($dboTAttendance['DboTAttendance']['sales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('支払い金額'); ?></dt>
		<dd>
			<?php echo h($dboTAttendance['DboTAttendance']['pay']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('その他請求　課税'); ?></dt>
		<dd>
			<?php echo h($dboTAttendance['DboTAttendance']['seikyu_kazei']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('その他請求　非課税'); ?></dt>
		<dd>
			<?php echo h($dboTAttendance['DboTAttendance']['seikyu_hikazei']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('手当1'); ?></dt>
		<dd>
			<?php echo h($dboTAttendance['DboTAttendance']['teate1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('手当2'); ?></dt>
		<dd>
			<?php echo h($dboTAttendance['DboTAttendance']['teate2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('手当3'); ?></dt>
		<dd>
			<?php echo h($dboTAttendance['DboTAttendance']['teate3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('手当詳細ID1'); ?></dt>
		<dd>
			<?php echo h($dboTAttendance['DboTAttendance']['dbo_m_teates_id1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('手当詳細ID2'); ?></dt>
		<dd>
			<?php echo h($dboTAttendance['DboTAttendance']['dbo_m_teates_id2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('手当詳細ID3'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dboTAttendance['DboMTeate']['name'], array('controller' => 'dbo_m_teates', 'action' => 'view', $dboTAttendance['DboMTeate']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('備考'); ?></dt>
		<dd>
			<?php echo h($dboTAttendance['DboTAttendance']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('削除フラグ'); ?></dt>
		<dd>
			<?php echo h($dboTAttendance['DboTAttendance']['delate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('作成日'); ?></dt>
		<dd>
			<?php echo h($dboTAttendance['DboTAttendance']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('変更日'); ?></dt>
		<dd>
			<?php echo h($dboTAttendance['DboTAttendance']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('メニュー'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('この項目を変更'), array('action' => 'edit', $dboTAttendance['DboTAttendance']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('この項目を削除'), array('action' => 'delete', $dboTAttendance['DboTAttendance']['id']), null, __('Are you sure you want to delete # %s?', $dboTAttendance['DboTAttendance']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('一覧に戻る'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('追加'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('スタッフマスタ一覧'), array('controller' => 'dbo_m_staffs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('スタッフマスタ追加'), array('controller' => 'dbo_m_staffs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('案件テーブル一覧'), array('controller' => 'dbo_t_matters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('案件テーブル追加'), array('controller' => 'dbo_t_matters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('請求テーブル一覧'), array('controller' => 'dbo_t_claims', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('請求テーブル追加'), array('controller' => 'dbo_t_claims', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('手当マスタ一覧'), array('controller' => 'dbo_m_teates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('手当マスタ追加'), array('controller' => 'dbo_m_teates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
