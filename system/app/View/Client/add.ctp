<?php 
//////////////////////////////////////////
////
////  顧客情報追加ビュー
////
////    2014.01.08 ->
////
//////////////////////////////////////////
?>
<script type="text/javascript" src="http://ajaxzip3.googlecode.com/svn/trunk/ajaxzip3/ajaxzip3.js" charset="UTF-8"></script>
<script type="text/javascript" src="/js/jquery.autoKana.js"></script>
<script type="text/javascript">
	$(function(){
		// スライドアニメーション
		$('#container:not(body#index#container)').css({display:'block', marginLeft:$(window).width(), opacity:'0'});
		$('#container:not(body#index#container)').animate({marginLeft:'0px', opacity:'1'}, 500);

		$('body#index #container').css({display:'block', opacity: '0'});
		$('body#index #container').animate({opacity:'1'}, 500);

		$('a').click(function(){
			var pass = $(this).attr('href');
			$("#container").animate({marginLeft: '-=' + $(window).width() + 'px', opacity: '0'}, 500, function(){
				//location.href = pass;
				location.replace(pass);
			});
			return false;
		});

		// フリガナ自動化
		$.fn.autoKana('#name', '#name_kana', {katakana: true});
	});
</script>

<h2>顧客情報</h2>

<!-- ナビゲータ -->
<div id="navigate">
	<div class="otherPage"><a href="/Client/index">顧客一覧</a></div>
	<div class="thisPage">顧客登録</div>
</div>

<!-- 登録フォーム -->
<div id="addClient">
<?php if(isset($compMsg) && !empty($compMsg)){?>
<h2 style="color: red;"><?php echo $compMsg; ?></h2>
<?php }?>

<?php echo $this->Form->create('client'); ?>
	<table>
		<tr>
			<th>会社名</th>
			<td><input type="text" name="name" id="name" /></td>
		</tr>
		<tr>
			<th>会社名カナ</th>
			<td><input type="text" name="name_kana" id="name_kana" /></td>
		</tr>
		<tr>
			<th>郵便番号</th>
			<td><input type="text" name="post_addr" id="post_addr" onkeyup="AjaxZip3.zip2addr(this, '', 'addr', 'addr');" /></td>
		</tr>
		<tr>
			<th>住所</th>
			<td><input type="text" name="addr" id="addr" /></td>
		</tr>
		<tr>
			<th>電話番号</th>
			<td><input type="tel" name="tel" id="tel" /></td>
		</tr>
		<tr>
			<th>FAX番号</th>
			<td><input type="tel" name="fax" id="fax" /></td>
		</tr>
		<tr>
			<th>締め日</th>
			<td>
				<select name="day_shime">
					<?php foreach($day_data as $data){?>
					<option value="<?=$data['id']?>"><?=$data['name']?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>支払日</th>
			<td>
				<select name="day_pay">
					<?php foreach($day_data as $data){?>
					<option value="<?=$data['id']?>"><?=$data['name']?></option> 
					<?php }?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;"><input type="button" id="SubmitButton" value="登録" /></td>
		</tr>
	</table>
<?php echo $this->Form->end(); ?>
</div>