<?php 
/////////////////////////////////////////
////
////  勤怠情報登録ビュー
////
////    2014.01.06 ->
////
/////////////////////////////////////////

// Suggestの為の配列準備
$latMatter = join(",", $matter_data);
$latStaff = join(",", $staff_data);

?>

<script type="text/javascript" src="/js/suggest.js"></script>
<script type="text/javascript">
	var tbl_cnt = 21;
	
	$(function(){

		// Suggestの準備
		var latMatter = "<?=$latMatter?>";
		var latStaff = "<?=$latStaff?>";
		
		var list1 = latMatter.split(",");
		var list2 = latStaff.split(",");

		var i;
		var startMat = new Array();
		var startSta = new Array();
		for(i = 0; i < 20; i++){
			startMat["_" + i] = function(i){ new Suggest.Local('matter' + i, 'suggestMat' + i, list1);};
			startSta["_" + i] = function(i){ new Suggest.Local('name' + i,  'suggestSta' + i, list2);};
			window.addEventListener ? window.addEventListener('load', startMat["_"+i](i), false) : window.attachEvent('onload', startMat["_"+ i](i));
			window.addEventListener ? window.addEventListener('load', startSta["_"+i](i), false) : window.attachEvent('onload', startSta["_"+ i](i));
		}
		// ここまでsuggest

		// 連番でIDが振られている名前部でキーが押されたときの処理		
		/*$("[id^=name]").keydown(function(e){
			if(e.keyCode == 13){
				// 名前入力欄でEnterキーが押されたときの処理
				//alert("Enter");

				// 名前から検索を行うモーダルダイアログを表示する。
				//var dialog = '.' +  
				
				
				
				
				// ajaxによるsubmitが必要
				return false;
			}else{
				return true;
			}
		});

		// 連番でIDが振られている案件部でキーが押されたときの処理
		$("[id^=matter]").keydown(function(e){

			var currentSelectId = "#" + $(this).attr("id");
			
			if(!isNaN(e.keyCode)){
				
				if(e.keyCode >= 112 && e.keyCode <= 123){
					if(document.all){
						window.event.keyCode = 0;
					}
					var key = e.keyCode - 111;
					var keyVal = $("#f" + key).val();
					//alert("key:F" + key);
					$(currentSelectId).val(keyVal);
					return false;
				}
			}
		});*/

		$('#SubmitButton').click(function(){
			//alert('勤怠登録が押された');
			if(!confirm("勤怠情報を登録しますか？")){
				return false;
			}

			$('#attendanceRegForm').submit();

			$('#container').animate({marginLeft: '-=' + $(window).width() + 'px', opacity: '0'}, 500, function(){
					alert("登録処理を行いました。");
					//location.replace("/TimeCard/reg");
			});
		});

		if(document.all){
			window.onhelp = function(){
				return false;
			};
		}

	});



</script>


<h2>勤怠情報</h2>
<div id="navigate">
	<div class="otherPage"><a href="/TimeCard/">一覧表示</a></div>
	<div class="thisPage">勤怠登録</div>
</div>



<!-- 登録フォーム -->
<input type="button" id="SubmitButton" value="勤怠登録" />

<?php if(isset($compMsg)){?>
<h2><?php echo $compMsg;?></h2>
<?php }?>

<div id="add0">
	<?php echo $this->Form->create('attendance');?>
	<table style="border: none;">
		<?php for($i = 0; $i < 20; $i++){?>
		<tr>
			<th><label for="name<?=$i?>">名前</label></th>
			<th><label for="matter<?=$i?>">案件</label></th>
			<th><label for="service_day<?=$i?>">勤務日</label></th>
			<th><label for="time_start<?=$i?>">開始時間</label></th>
			<th><label for="time_end<?=$i?>">終了時間</label></th>
			<th><label for="interval_start1_<?=$i?>">休憩開始1</label></th>
			<th><label for="interval_end1_<?=$i?>">休憩終了1</label></th>
			<th><label for="interval_start2_<?=$i?>">休憩開始2</label></th>
			<th><label for="interval_end2_<?=$i?>">休憩終了2</label></th>
			<th><label for="interval_start3_<?=$i?>">休憩開始3</label></th>
			<th><label for="interval_end3_<?=$i?>">休憩終了3</label></th>
			<th><label for="teate1_<?=$i?>">手当1</label></th>
			<th><label for="teate2_<?=$i?>">手当2</label></th>
			<th><label for="teate3_<?=$i?>">手当3</label></th>
			<th><label for="allowance1_<?=$i?>">手当詳細1</label></th>
			<th><label for="allowance2_<?=$i?>">手当詳細2</label></th>
			<th><label for="allowance3_<?=$i?>">手当詳細3</label></th>
			<th><label for="tardy_flag<?=$i?>">遅</label></th>
			<th><label for="absence_flag<?=$i?>">欠</label></th>
			<th><label for="comment<?=$i?>">備考</label></th>
		</tr>
		<tr>
			<td>
				<input type="text" id="name<?=$i?>" class="worker_name" name="name<?=$i?>"/>
				<div id="suggestSta<?=$i?>" class="suggest" style="display:none;"></div>
			</td>
			<td>
				<input type="text" id="matter<?=$i?>" class="comment"  name="matter<?=$i?>"/>
				<div id="suggestMat<?=$i?>" class="suggest" style="display: none;"></div>
			</td>
			<td><input type="date" id="service_day<?=$i?>" name="service_day<?=$i?>" class="serviceDay" /></td>
			<td><input type="time" id="time_start<?=$i?>" class="work_time"  name="time_start<?=$i?>" step="900" /></td>
			<td><input type="time" id="time_end<?=$i?>" class="work_time"  name="time_end<?=$i?>" step="900" /></td>
			<td><input type="time" id="interval_start1_<?=$i?>" class="work_time"  name="interval_start1_<?=$i?>" step="900" /></td>
			<td><input type="time" id="interval_end1_<?=$i?>" class="work_time"  name="interval_end1_<?=$i?>" step="900" /></td>
			<td><input type="time" id="interval_start2_<?=$i?>" class="work_time"  name="interval_start2_<?=$i?>" step="900" /></td>
			<td><input type="time" id="interval_end2_<?=$i?>" class="work_time"  name="interval_end2_<?=$i?>" step="900" /></td>
			<td><input type="time" id="interval_start3_<?=$i?>" class="work_time"  name="interval_start3_<?=$i?>" step="900" /></td>
			<td><input type="time" id="interval_end3_<?=$i?>" class="work_time"  name="interval_end3_<?=$i?>" step="900" /></td>
			<td><input type="text" id="teate1_<?=$i?>" name="teate1_<?=$i?>" class="teate" /></td>
			<td><input type="text" id="teate2_<?=$i?>" name="teate2_<?=$i?>" class="teate" /></td>
			<td><input type="text" id="teate3_<?=$i?>" name="teate3_<?=$i?>" class="teate" /></td>
			<td>
				<select id="allowance1_<?=$i?>" name="allowance1_<?=$i?>">
					<?php foreach($allowance_data as $data){ ?>
					<option value="<?=$data['id']?>"><?=$data['name']?></option>
					<?php }?>
				</select>
			</td>
			<td>
				<select id="allowance2_<?=$i?>" name="allowance2_<?=$i?>">
					<?php foreach($allowance_data as $data){ ?>
					<option value="<?=$data['id']?>"><?=$data['name']?></option>
					<?php }?>					
				</select>
			</td>
			<td>
				<select id="allowance3_<?=$i?>" name="allowance3_<?=$i?>">
					<?php foreach($allowance_data as $data){ ?>
					<option value="<?=$data['id']?>"><?=$data['name']?></option>
					<?php }?>						
				</select>
			</td>
			<td><input type="checkbox" id="tardy_flag<?=$i?>" name="tardy_flag<?=$i?>" /></td>
			<td><input type="checkbox" id="absence_flag<?=$i?>" name="absence_flag<?=$i?>" /></td>
			<td><input type="text" id="comment<?=$i?>" name="comment<?=$i?>" class="comment" /></td>
		</tr>
		<?php } ?>
	</table>
	<?php echo $this->Form->end();?>
</div>

<br />

<!-- ファンクションキー一覧表示 -->
<!-- 
<div id="showFunctionKey" style="width: 100%; text-align: center;">
	<table style="width: 100%;">
		<tr>
			 <?php for ($i = 1; $i <= 6; $i++){?>
			 <th>F<?=$i?></th>
			 <?php } ?>
			 <td rowspan="4"><input id="functionChangeButton" type="button" value="変更" /></td>
		</tr>
		<tr>
			<td><input type="text" id="f1" value="aaaa" readonly="readonly" /></td>
			<td><input type="text" id="f2" value="bbbb" readonly="readonly" /></td>
			<td><input type="text" id="f3" value="cccc" readonly="readonly" /></td>
			<td><input type="text" id="f4" value="dddd" readonly="readonly" /></td>
			<td><input type="text" id="f5" value="eeee" readonly="readonly" /></td>
			<td><input type="text" id="f6" value="ffff" readonly="readonly" /></td>
		</tr>
		<tr>
			<?php for ($i = 7; $i <= 12; $i++){?>
			<th>F<?=$i?></th>
			<?php }?>
		</tr>
		<tr>
			<td><input type="text" id="f7" value="gggg" readonly="readonly" /></td>
			<td><input type="text" id="f8" value="hhhh" readonly="readonly" /></td>
			<td><input type="text" id="f9" value="iiii" readonly="readonly" /></td>
			<td><input type="text" id="f10" value="jjjj" readonly="readonly" /></td>
			<td><input type="text" id="f11" value="kkkk" readonly="readonly" /></td>
			<td><input type="text" id="f12" value="llll" readonly="readonly" /></td>
		</tr>
	</table>
</div>
 -->
