<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>業務管理システム</title>
		<?php echo $this->Html->css('agency'); ?>
		<?php echo $this->fetch('meta');?>
		<?php echo $this->fetch('css');?>
		<script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript">
			$(function(){
				// ここから共通動作
				$('#container:not(body#index#container)').css({display:'block', marginLeft:$(window).width(), opacity:'0'});
				$('#container:not(body#index#container)').animate({marginLeft:'0px', opacity:'1'}, 500);

				$('body#index #container').css({display:'block', opacity: '0'});
				$('body#index #container').animate({opacity:'1'}, 500);

				$('a').click(function(){
					var pass = $(this).attr('href');
					$("#container").animate({marginLeft: '-=' + $(window).width() + 'px', opacity: '0'}, 500, function(){
						location.replace(pass);
					});
					return false;
							
				});
				// ここまで共通動作
				
				$('#menuStaff').click(function(){
					$('#hiddenStaff').toggle(300);
				});

				$('#menuClientMatter').click(function(){
					$('#hiddenClientMatter').toggle(300);
				});
			});
		</script>
	</head>
	<body>
		<div id="container">

			<!-- ヘッダ -->
			<div id="header">
				<div class="h1">業務管理システム</div>
				
				<div style=" float: right; padding-right: 30px; font-size: small; text-align: right;">
					<br />
					こんにちは、●●さん　　<br />
					[登録情報　ログアウト]　<br />
					今日は、<?php echo date('Y') . '年' . date('m') . '月' . date('d') . '日です。';?>
				</div>
			</div>
			
			<!-- メニュー -->
			<div id="menu">
				<div class="top">メニュー</div>

				<div id="menuStaff" class="li">スタッフ管理</div>
				<div id="hiddenStaff" style="display: none;">
					<div>　　<a href="/TimeCard">勤怠情報</a></div>
					<div>　　<a href="/Staff">スタッフ情報</a></div>
				</div>
				<div id="menuClientMatter" class="li">顧客・案件管理</div>
				<div id="hiddenClientMatter" style="display: none;">
					<div>　　<a href="/Client">顧客情報</a></div>
					<div>　　<a href="/Matter">案件情報</a></div>
				</div>
				<div id="menuPay" class="li"><a href="/Shiharai">支払管理</a></div>
				<div id="menuClaim" class="li"><a href="/Seikyu">請求管理</a></div>
				<div id="menuKeiri" class="li">経理管理</div>
				<div id="menuAdmin" class="li"><a href="/AdminMenu">Admin管理</a></div>
			</div>
			
			
			<!-- コンテンツ -->
			<div id="content">
				<?php echo $content_for_layout; ?>
			</div>
			
			<!-- フッタ -->
			<div id="footer">
			footfootfootfoot
			</div>
		</div>
	</body>
</html>