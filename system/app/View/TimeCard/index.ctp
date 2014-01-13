<?php 
///////////////////////////////////////
////
////  勤怠情報一覧ビュー
////
////    2014.01.06 ->
////
///////////////////////////////////////
?>

<h2>勤怠情報</h2>

<!-- ナビゲータ -->
<div id="navigate">
	<div class="thisPage">一覧表示</div>
	<div class="otherPage"><a href="/TimeCard/reg">勤怠登録</a></div>
</div>

<!-- 検索フォーム -->
<div id="searchBox">
	<?php echo $this->Form->create("search");?>
		<table id="searchBoxTable">
			<tr>
				<th>氏名</th>
				<td><input type="text" name="name" /></td>
				<th>会社名</th>
				<td><input type="text" name="company" /></td>
			</tr>
			<tr>
				<th>対象年月</th>
				<td>
					<input type="date" name="date" id="date" />
				</td>
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
			<th>スタッフ</th>
			<th>案件名</th>
			<th>勤務日</th>
			<th>開始時間</th>
			<th>終了時間</th>
			<th>休憩開始1</th>
			<th>休憩終了1</th>
			<th>休憩開始2</th>
			<th>休憩終了2</th>
			<th>休憩開始3</th>
			<th>休憩終了3</th>
			<th>合計勤務時間</th>
			<th>残業時間数</th>
			<th>深夜残業時間数</th>
			<th>休憩時間</th>
			<th>売上金額</th>
			<th>支払金額</th>
			<th>手当1</th>
			<th>手当2</th>
			<th>手当3</th>
			<th>手当詳細1</th>
			<th>手当詳細2</th>
			<th>手当詳細3</th>
			<th>遅刻</th>
			<th>欠勤</th>
			<th>備考</th>
		</tr>
		<?php foreach ($attendance_data as $data){?>
		<tr>
			<td><?php echo $data['staff'];?></td>	<!-- スタッフ -->
			<td><?php echo $data['matter'];?></td>	<!-- 案件 -->
			<td><?php echo $data['service_day'];?></td>	<!-- 勤務日 -->
			<td><?php echo $data['time_start'];?></td>	<!-- 開始時間 -->
			<td><?php echo $data['time_end'];?></td>	<!-- 終了時間 -->
			<td><?php echo $data['interval1_start'];?></td>	<!-- 休憩開始1 -->
			<td><?php echo $data['interval1_end'];?></td>	<!-- 休憩終了1 -->
			<td><?php echo $data['interval2_start'];?></td>	<!-- 休憩開始2 -->
			<td><?php echo $data['interval2_end'];?></td>	<!-- 休憩終了2 -->
			<td><?php echo $data['interval3_start'];?></td>	<!-- 休憩開始3 -->
			<td><?php echo $data['interval3_end'];?></td>	<!-- 休憩終了3 -->
			<td><?php echo $data['time_total'];?></td><!-- 合計勤務時間 -->
			<td><?php echo $data['time_overtime'];?></td><!-- 残業時間数 -->
			<td><?php echo $data['time_latetime'];?></td><!-- 深夜残業時間数 -->
			<td><?php echo $data['time_interval'];?></td><!-- 休憩時間 -->
			<td><?php echo $data['sales'];?></td><!-- 売上金額 -->
			<td><?php echo $data['pay'];?></td><!-- 支払金額 -->
			<td><?php echo $data['teate1'];?></td>	<!-- 手当1 -->
			<td><?php echo $data['teate2'];?></td>	<!-- 手当2 -->
			<td><?php echo $data['teate3'];?></td>	<!-- 手当3 -->
			<td><?php echo $data['allowance1'];?></td>	<!-- 手当詳細1 -->
			<td><?php echo $data['allowance2'];?></td>	<!-- 手当詳細2 -->
			<td><?php echo $data['allowance3'];?></td>	<!-- 手当詳細3 -->
			<td><?php echo $data['tardy'];?></td>	<!-- 遅刻 -->
			<td><?php echo $data['absence'];?></td>	<!-- 欠勤 -->
			<td><?php echo $data['comment'];?></td>	<!-- 備考 -->
		</tr>
		<?php }?>
	</table>
</div>