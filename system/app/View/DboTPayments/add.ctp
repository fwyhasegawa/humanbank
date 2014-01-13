<div class="dboTPayments form">
<?php echo $this->Form->create('DboTPayment'); ?>
	<fieldset>
		<legend><?php echo __('支払いテーブル追加'); ?></legend>
	<?php
		echo $this->Form->input('dbo_m_companies_id', array('label'=> '会社ID'));
		echo $this->Form->input('dbo_m_staffs_id', array('label'=> 'スタッフID'));
		echo $this->Form->input('kyuyo', array('label'=> '給与'));
		echo $this->Form->input('sime_day', array('label'=> '締め日'));
		echo $this->Form->input('calc_start', array('label'=> '算出開始日'));
		echo $this->Form->input('calc_end', array('label'=> '算出終了日'));
		echo $this->Form->input('siharai_day', array('label'=> '支払い日'));
		echo $this->Form->input('koyo_hoken', array('label'=> '雇用保険控除額'));
		echo $this->Form->input('kenko_hoken', array('label'=> '健康保険控除額'));
		echo $this->Form->input('kaigo_hoken', array('label'=> '介護保険控除額'));
		echo $this->Form->input('kose_nenkin', array('label'=> '厚生年金控除額'));
		echo $this->Form->input('syotokuzei', array('label'=> '所得税控除額'));
		echo $this->Form->input('koutsuhi', array('label'=> '交通費手当'));
		echo $this->Form->input('teate', array('label'=> 'その他手当'));
		echo $this->Form->input('sousikyu', array('label'=> '総支給金額'));
		echo $this->Form->input('delate', array('label'=> '削除フラグ'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('メニュー'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('一覧に戻る'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('スタッフマスタ一覧'), array('controller' => 'dbo_m_staffs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('スタッフマスタ追加'), array('controller' => 'dbo_m_staffs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('TOPに戻る'), array('controller' => 'AdminMenu', 'action' => 'index')); ?> </li>
	</ul>
</div>
