<?php 
/////////////////////////////////////
////
////  支払情報一覧ビュー
////
////    2014.01.10 -> 
////
/////////////////////////////////////
?>

<h2>支払情報</h2>

<!-- ナビゲータ -->
<div id="navigate">
	<div class="thisPage">一覧表示</div>
	<div class="otherPage">支払登録</div>
</div>

<!-- 検索フォーム -->
<div id="searchBox">
	<?php echo $this->Form->create("search");?>
	<table id="searchBoxTable">
		<tr>
			<th>スタッフ氏名</th>
			<td><input type="text" name="name" /></td>
			<th>締日</th>
			<td><input type="date" name="sime_day" /></td>
		</tr>
		<tr>
			<td colspan="4" id="searchButtonArea"><input id="searchButton" type="button" value="検索" /></td>
		</tr>
	</table>
	<?php echo $this->Form->end();?>
</div>

<!-- 一覧表示 -->
<div id="listView">
	<table style="overflow: scroll; !important">
		<tr>
			<th>スタッフ</th>
			<th>給与金額</th>
			<th>締日</th>
			<th>算出開始日</th>
			<th>算出終了日</th>
			<th>支払日</th>
			<th>雇用保険控除金額</th>
			<th>健康保険控除金額</th>
			<th>介護保険控除金額</th>
			<th>厚生年金控除金額</th>
			<th>所得税</th>
			<th>交通費手当</th>
			<th>その他手当</th>
			<th>総支給</th>
		</tr>
		<?php foreach ($payment_data as $data){?>
		<tr>
			<td><?php echo $data['name'];?></td>
			<td><?php echo $data['kyuyo'];?></td>
			<td><?php echo $data['sime_day'];?></td>
			<td><?php echo $data['calc_start'];?></td>
			<td><?php echo $data['calc_end'];?></td>
			<td><?php echo $data['siharai_day'];?></td>
			<td><?php echo $data['koyo_hoken'];?></td>
			<td><?php echo $data['kenko_hoken'];?></td>
			<td><?php echo $data['kaigo_hoken'];?></td>
			<td><?php echo $data['kose_nenkin'];?></td>
			<td><?php echo $data['syotokuzei'];?></td>
			<td><?php echo $data['koutsuhi'];?></td>
			<td><?php echo $data['teate'];?></td>
			<td><?php echo $data['sousikyu'];?></td>
		</tr>
		<?php }?>
	</table>
</div>

