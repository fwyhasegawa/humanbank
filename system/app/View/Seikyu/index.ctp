<?php 
////////////////////////////////////////
////
////  請求情報一覧ビュー
////
////    2014.01.10 ->
////
////////////////////////////////////////
?>

<h2>請求情報</h2>

<!-- ナビゲータ -->
<div id="navigate">
	<div class="thisPage">一覧表示</div>
	<div class="otherPage">請求登録</div>
</div>

<!-- 検索フォーム -->
<div id="searchBox">
	<?php echo $this->Form->create("search");?>
	<table id="searchBoxTable">
		<tr>
			<th>顧客名</th>
			<td>
				<select name="name" id="name">
					<option value="0">-----</option>
				</select>
			</td>
			<th>請求日</th>
			<td><input type="date" id="seikyu_day" name="seikyu_day" /></td>
		</tr>
		<tr>
			<td colspan="4" id="searchButtonArea"><input id="searchButton" type="button" value="検索" /></td>
		</tr>
	</table>
	<?php echo $this->Form->end();?>
</div>

<!-- 一覧表示 -->
<div id="listView">
	<table>
		<tr>
			<th>顧客名</th>
			<th>請求金額税抜</th>
			<th>算出開始日</th>
			<th>算出終了日</th>
			<th>請求日</th>
		</tr>
		<?php foreach ($claim_data as $data){?>
		<tr>
			<td><?php echo $data['name'];?></td>
			<td><?php echo $data['price'];?></td>
			<td><?php echo $data['calc_start'];?></td>
			<td><?php echo $data['calc_end'];?></td>
			<td><?php echo $data['seikyu_day'];?></td>
		</tr>
		<?php }?>
	</table>
</div>

