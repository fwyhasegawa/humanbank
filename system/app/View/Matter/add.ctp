<?php 
//////////////////////////////////////////
////
////  案件情報登録ビュー
////
////    2014.01.08 -> 2014.01.08
////
//////////////////////////////////////////
?>
<script type="text/javascript">
	$(function(){
		$("#SubmitButton").click(function(){
			if(!confirm("案件を登録しますか？")){
				return false;
			}

			// 必須項目の入力チェック
			var errMsg = "";
			
			if($("#name").val().length == 0){
				errMsg += "案件名が未入力です。\n";
			}

			if($("#price_seikyu").val().length == 0){
				errMsg += "請求単価が未入力です。\n";
			}
			if($("#price_siharai").val().length == 0){
				errMsg += "支払い単価が未入力です。\n";
			}

			if(errMsg.length > 0){
				alert(errMsg);
				return false;
			}

			$("#matterAddForm").submit();

			$("#container").animate({marginLeft: '-=' + $(window).width() + 'px', opacity: '0'}, 500, function(){
				alert("1件登録しました。");
				location.replace("/Matter/add");
			});
		});
	});
</script>

<h2>案件情報</h2>

<!-- ナビゲータ -->
<div id="navigate">
	<div class="otherPage"><a href="/Matter">案件一覧</a></div>
	<div class="thisPage">案件登録</div>
</div>

<!-- 登録フォーム -->
<div id="addMatter">
<?php if(isset($compMsg) && !empty($compMsg)){?>
<h2 style="color: red;"><?php echo $compMsg;?></h2>
<?php }?>

<?php echo $this->Form->create('matter'); ?>
	<table>
		<tr>
			<th>顧客名</th>
			<td>
				<select name="client" id="client">
					<?php foreach ($client_data as $data){?>
					<option value="<?php echo $data['id']?>"><?php echo $data['name']?></option>
					<?php }?>
				</select>
			</td>
		</tr>
		<tr>
			<th>案件名<span class="formRequired"> 必須</span></th>
			<td><input type="text" name="name" id="name" /></td>
		</tr>
		<tr>
			<th>住所</th>
			<td><input type="text" name="addr" id="addr" /></td>
		</tr>
		<tr>
			<th>電話番号</th>
			<td><input type="tel" name="tel" id="tel" style="ime-mode: disabled;" /></td>
		</tr>
		<tr>
			<th>開始時間</th>
			<td><input type="time" name="time_start" id="time_start" style="ime-mode: disabled;" /></td>
		</tr>
		<tr>
			<th>終了時間</th>
			<td><input type="time" name="time_end" id="time_end" style="ime-mode: disabled;" /></td>
		</tr>
		<tr>
			<th>休憩時間開始</th>
			<td><input type="time" name="interval_start" id="interval_start" style="ime-mode: disabled;" /></td>
		</tr>
		<tr>
			<th>休憩時間終了</th>
			<td><input type="time" name="interval_end" id="interval_end" style="ime-mode: disabled;" /></td>
		</tr>
		<tr>
			<th>日給</th>
			<td><input type="checkbox" name="nikyu_flg" id="nikyu_flg" />はい</td>
		</tr>
		<tr>
			<th>請求単価<span class="formRequired"> 必須</span></th>
			<td><input type="text" name="price_seikyu" id="price_seikyu" style="ime-mode: disabled;" /></td>
		</tr>
		<tr>
			<th>支払い単価<span class="formRequired"> 必須</span></th>
			<td><input type="text" name="price_siharai" id="price_siharai" style="ime-mode: disabled;" />
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;"><input type="button" id="SubmitButton" value="登録" /></td>
		</tr>
	</table>
	 <?php 
	 /*
	 echo $this->Form->input('name', array('label' => '案件名'));
	 echo $this->Form->input('addr', array('label' => '住所'));
	 echo $this->Form->input('tel', array('label' => '電話番号'));
	 echo $this->Form->input('time_start', array('label' => '開始時間', 'width' => '30'));
	 */
	 ?>
<?php echo $this->Form->end(); ?>
</div>