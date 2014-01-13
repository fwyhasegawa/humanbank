<div class="AdminMenu index">
	<h2><?php echo __('管理者メニュー'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
	</tr>
	<tr>
	</tr>
	</table>
	<div class="paging">
	<?php?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('項目一覧'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('管理権限マスタ')      , array('controller' => 'dbo_m_manages'    , 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('銀行マスタ')          , array('controller' => 'dbo_m_banks'      , 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('自社情報マスタ')      , array('controller' => 'dbo_m_companies'  , 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('手当マスタ')          , array('controller' => 'dbo_m_allowances' , 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('名目マスタ')          , array('controller' => 'dbo_m_nominals'   , 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('顧客マスタ')          , array('controller' => 'dbo_m_clients'    , 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('日にちマスタ')        , array('controller' => 'dbo_m_days'       , 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('スタッフマスタ')      , array('controller' => 'dbo_m_staffs'     , 'action' => 'index')); ?> </li>

		<li><?php echo $this->Html->link(__('ログイン情報テーブル'), array('controller' => 'users'            , 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('勤怠テーブル')        , array('controller' => 'dbo_t_attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('支払いテーブル')      , array('controller' => 'dbo_t_payments'   , 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('請求テーブル')        , array('controller' => 'dbo_t_claims'     , 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('案件テーブル')        , array('controller' => 'dbo_t_matters'    , 'action' => 'index')); ?> </li>
		
		<?php // 2014-01-06 Shimizu Add ?>
		<li><?php echo $this->Html->link(__('キーコードマスタ')		, array('controller' => 'dbo_m_keycodes'	, 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('ファンクションキーテーブル')	, array('controller' => 'dbo_t_functionkeys', 'action' => 'index')); ?></li>	
	</ul>
</div>
