<?php 
///////////////////////////////////////
////
////  スタッフ一覧ビュー
////
////    2014.01.06 -> 
////
///////////////////////////////////////
?>

<h2>スタッフ情報</h2>

<!-- ナビゲーション -->
<div>
	<div id="navigate">
		<div class="thisPage">スタッフ一覧</div>
		<div class="otherPage"><a href="/Staff/add" class="pager">スタッフ登録</a></div>
	</div>
</div>


<!-- 一覧表示 -->
<div id="listView">
	<table>
		<tr>
			<th>スタッフID</th>
			<th>氏名</th>
			<th>氏名カナ</th>
			<th>電話番号</th>
			<th>携帯電話</th>
			<th>住所</th>
			<th>扶養者数</th>
			<th>誕生日</th>
			<th>銀行</th>
			<th>口座番号</th>
			<th>支払日</th>
			<th>登録日</th>
		</tr>
		<?php foreach ($staff_data as $data){ ?>
		<tr>
			<td><?php echo $data['id'];?></td>	<!-- スタッフID -->
			<td><?php echo $data['name'];?></td>	<!-- 氏名 -->
			<td><?php echo $data['name_kana'];?></td>	<!-- 氏名カナ -->
			<td><?php echo $data['tel'];?></td>			<!-- 電話番号 -->
			<td><?php echo $data['h_tel'];?></td>		<!-- 携帯電話 -->
			<td><?php echo $data['addr'];?></td>		<!-- 住所 -->
			<td><?php echo $data['fuyo_num'];?></td>	<!-- 扶養者数 -->
			<td><?php echo $data['birthday'];?></td>	<!-- 誕生日 -->
			<td><?php echo $data['bank'];?></td>		<!-- 銀行 -->
			<td><?php echo $data['account_num'];?></td>	<!-- 口座番号 -->
			<td><?php echo $data['pay_day'];?></td>		<!-- 支払日 -->
			<td><?php echo $data['create_date']?></td>	<!-- 登録日 -->
		</tr>
		<?php } ?>
	</table>
</div>
