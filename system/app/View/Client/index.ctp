<?php 
///////////////////////////////////////////////
////
////  顧客情報表示ビュー
////
////    2014.01.06 ->
////
///////////////////////////////////////////////
?>

<h2>顧客情報</h2>

<!-- ナビゲータ -->
<div id="navigate">
	<div class="thisPage">顧客一覧</div>
	<div class="otherPage"><a href="/Client/add">顧客登録</a></div>
</div>

<!-- 検索フォーム -->
<div id="searchBox">
	<?php echo $this->Form->create("search");?>
		<table id="searchBoxTable">
			<tr>
				<th>会社名</th>
				<td><input type="text" name="name" /></td>
				<th>会社名カナ</th>
				<td><input type="text" name="name_kana" /></td>
			</tr>
			<tr>
				<td colspan="4" id="searchButtonArea"><input id="searchButton" type="button" value="サーチ" /></td>
			</tr>
		</table>
	<?php echo $this->Form->end();?>
</div>

<!-- 一覧表示 -->
<div id="listView">
	<table>
		<tr>
			<th>会社名</th>
			<th>会社名カナ</th>
			<th>住所</th>
			<th>電話番号</th>
			<th>FAX番号</th>
			<th>締日</th>
			<th>支払日</th>
		</tr>
		<?php foreach ($client_data as $data){?>
		<tr>
			<td><?=$data['name']?></td>
			<td><?=$data['name_kana']?></td>
			<td><?=$data['addr']?></td>
			<td><?=$data['tel']?></td>
			<td><?=$data['fax']?></td>
			<td><?=$data['day_shime']?></td>
			<td><?=$data['day_pay']?></td>
		</tr>
		<?php }?>
	</table>
</div>









