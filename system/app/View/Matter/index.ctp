<?php 
///////////////////////////////////
////
////  案件一覧ビュー
////
////
////    2014.01.07 ->
////
///////////////////////////////////
?>
<script type="text/javascript">
$(function(){
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
});

</script>
<h2>案件情報</h2>

<!-- ナビゲータ -->
<div id="navigate">
	<div class="thisPage">案件一覧</div>
	<div class="otherPage"><a href="/Matter/add">案件登録</a></div>
</div>

<!-- 検索フォーム -->
<div id="searchBox">
	<?php echo $this->Form->create("search");?>
		<table id="searchBoxTable">
			<tr>
				<th>案件名</th>
				<td><input type="text" name="name" /></td>
				<th>顧客名</th>
				<td><input type="text" name="client" /></td>
			</tr>
			<tr>
				<td colspan="4" id="searchButtonArea"><input id="searchButton" type="button" value="サーチ"/></td>
			</tr>
		</table>
	<?php echo $this->Form->end();?>
</div>


<!-- 一覧表示 -->
<div id="listView">
	<table>
		<tr>
			<th>案件ID</th>
			<th>顧客名</th>
			<th>案件名</th>
			<th>開始時間</th>
			<th>終了時間</th>
			<th>休憩時間開始</th>
			<th>休憩時間終了</th>
			<th>日給</th>
			<th>請求単価</th>
			<th>支払単価</th>
		</tr>
		<?php foreach ($matter_data as $data){ ?>
		<tr>
			<td><?=$data['id']?></td>
			<td><?=$data['company_name']?></td>
			<td><?=$data['name']?></td>
			<td><?=(empty($data['time_start']) ? '-----' : $data['time_start'])?></td>
			<td><?=(empty($data['time_end']) ? '-----' : $data['time_end'])?></td>
			<td><?=(empty($data['interval_start']) ? '-----' : $data['interval_start'])?></td>
			<td><?=(empty($data['interval_end']) ? '-----' : $data['interval_end'] )?></td>
			<td><?=($data['nikyu'] === '1' ? 'はい' : 'いいえ')?></td>
			<td><?=$data['price_seikyu']?></td>
			<td><?=$data['price_shiharai']?></td>
		</tr>
		<?php } ?>
	</table>
</div>