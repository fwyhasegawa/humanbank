<?php 
///////////////////////////////////////////
////
////  スタッフ登録ビュー
////
////    2014.01.06 ->
////
///////////////////////////////////////////
?>
<script type="text/javascript" src="http://ajaxzip3.googlecode.com/svn/trunk/ajaxzip3/ajaxzip3.js" charset="UTF-8"></script>
<script type="text/javascript" src="/js/jquery.autoKana.js"></script>
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

		// フリガナ自動化
		$.fn.autoKana('#family_name', '#family_name_kana', {katakana: true});
		$.fn.autoKana('#first_name', '#first_name_kana', {katakana: true});

		// 登録ボタンが押されたときの処理
		$('#SubmitButton').click(function(){
			//alert('ボタンが押された');
			if(!confirm('本当に登録しますか？')){
				return false;
			}
			
			//var $form = $("#AddStaffAddForm");
			
			var errMsg = "";

			// フォーム必須項目の入力チェックを行う
			if($("#family_name").val().length == 0){
				errMsg += "姓が未入力です。\n";
			}
			if($("#first_name").val().length == 0){
				errMsg += "名が未入力です。\n";
			}
			if($("#family_name_kana").val().length == 0){
				errMsg += "姓(カナ)が未入力です。\n";
			}
			if($("#first_name_kana").val().length == 0){
				errMsg += "名(カナ)が未入力です。\n";
			}
			if($("#account_num").val().length == 0){
				errMsg += "口座番号が未入力です。\n";
			}else if($("#account_num").val().length != 7){
				errMsg += "口座番号は7桁で入力して下さい。\n";
			}

			if(errMsg.length > 0){
				alert(errMsg);
				return false;
			}

			// フォームのサブミットを実行する
			$("#AddStaffAddForm").submit();
			/*$.ajax({
				//url: "/Staff/add",
				url: $form.attr('action'),
				//type: "POST",
				type: $form.attr('method'),
				timeout: 10000,
				/*data: {
					family_name: $("#family_name").val(),
					first_name:  $("#first_name").val(),
					family_name_kana: $("#family_name_kana").val(),
					first_name_kana: $("#first_name_kana").val(),
					tel: $("#tel").val(),
					h_tel: $("#h_tel").val(),
					postAddr: $("#postAddr").val(),
					addr: $("#addr").val(),
					fuyo_num: $("#fuyo_num").val(),
					birth_year: $("#birth_year").val(),
					birth_month: $("#birth_month").val(),
					birth_day: $("#birth_day").val(),
					
				}
				data: $form.serialize()
			}).done(function(data, status, xhr){
				$("#container").animate({marginLeft: '-=' + $(window).width() + 'px', opacity: '0'}, 500, function(){
					alert("1件登録されました。");
					//location.replace("/Staff/add");
				});
			});*/

			/*
			$("#container").animate({marginLeft: '-=' + $(window).width() + 'px', opacity: '0'}, 500, function(){
				location.replace(pass);
			});*/
			
			$("#container").animate({marginLeft: '-=' + $(window).width() + 'px', opacity: '0'}, 500, function(){
				alert("1件登録されました。");
				location.replace("/Staff/add");
			});
		});
	});
</script>

<h2>スタッフ情報</h2>

<!-- ナビゲータ -->
<div id="navigate">
	<div class="otherPage"><a href="/Staff/index">スタッフ一覧</a></div>
	<div class="thisPage">スタッフ登録</div>
</div>

<!-- 登録フォーム -->
<div id="addStaffDiv">
<?php if(isset($compMsg) && !empty($compMsg)){?>
<h2 style="color: red;"><?php echo $compMsg;?></h2>
<?php }?>
<?php echo $this->Form->create('AddStaff');?>
	<table id="addStaffTable">
		<tr>
			<th>氏名<span class="formRequired">(必須)</span></th>
			<td class="staff_name">
				姓:<input type="text" id="family_name" name="family_name" class="staff_name" />
				名:<input type="text" id="first_name" name="first_name" class="staff_name" />
			</td>
		</tr>
		<tr>
			<th>氏名カナ<span class="formRequired">(必須)</span></th>
			<td class="staff_name">
				姓:<input type="text" id="family_name_kana" name="family_name_kana" class="staff_name" />
				名:<input type="text" id="first_name_kana" name="first_name_kana" class="staff_name" />
			</td>
		</tr>
		<tr>
			<th>電話番号</th>
			<td><input type="text" id="tel" name="tel" /></td>
		</tr>
		<tr>
			<th>携帯電話</th>
			<td><input type="text" id="h_tel" name="h_tel" /></td>
		</tr>
		<tr>
			<th>郵便番号</th>
			<td><input type="text" id="postAddr" name="postAddr" onkeyup="AjaxZip3.zip2addr(this, '', 'addr', 'addr');" /></td>
		</tr>
		<tr>
			<th>住所</th>
			<td><input type="text" id="addr" name="addr" width="100" /></td>
		</tr>
		<tr>
			<th>扶養人数</th>
			<td><input type="text" id="fuyo_num" name="fuyo_num" />人</td>
		</tr>
		<tr>
			<th>生年月日</th>
			<td>
				<select id="birth_year" name="birth_year">
					<?php for ($i = 1900; $i <= date('Y'); $i++){ ?>
					<option value="<?php echo $i;?>"><?php echo $i;?></option>
					<?php }?>
				</select>年
				<select id="birth_month" name="birth_month">
					<?php for ($i = 1; $i <= 12; $i++){ ?>
					<option value="<?php echo $i;?>"><?php echo $i;?></option>
					<?php }?>
				</select>月
				<select id="birth_day" name="birth_day">
					<?php for ($i = 1; $i <= 31; $i++){?>
					<option value="<?php echo $i;?>"><?php echo $i;?></option>
					<?php }?>
				</select>日
			</td>
		</tr>
		<tr>
			<th>給与支払日<span class="formRequired">(必須)</span></th>
			<td>
				<select id="day_id" name="day_id">
					<?php foreach ($day_data as $data){ ?>
					<option value="<?php echo $data['id'];?>"><?php echo $data['name'];?></option>
					<?php }?>
				</select>
			</td>
		</tr>
		<tr>
			<th>銀行<span class="formRequired">(必須)</span></th>
			<td>
				<select id="bank_id" name="bank_id">
					<?php foreach ($bank_data as $data){ ?>
					<option value="<?php echo $data['id'];?>"><?php echo $data['name'];?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<?php //echo $this->Form->input('account_num', array('label' => '口座番号'));?>
			<th>口座番号<span class="formRequired">(必須)</span></th>
			<td><input type="text" id="account_num" name="account_num" maxlength="7" /></td>
		</tr>
		<tr>
			<th>振込手数料負担</th>
			<td><input type="checkbox" id="transfar_fee" name="transfar_fee" value="1" />する</td>
		</tr>
		<tr>
			<th>雇用保険</th>
			<!-- 
			<td>
				<label><input type="radio" name="transfar_fee" value="1" />加入する</label>
				<label><input type="radio" name="transfar_fee" value="0" />加入しない</label>
			</td>
			 -->
			 <td><label><input type="checkbox" id="employment_insurance" name="employment_insurance" value="1" />加入する</label></td>
		</tr>
		<tr>
			<th>健康保険</th>
			<!-- 
			<td>
				<label><input type="radio" name="health_insurance" value="1" />加入する</label>
				<label><input type="radio" name="health_insurance" value="0" />加入しない</label>
			</td>
			 -->
			 <td><label><input type="checkbox" id="health_insurance" name="health_insurance" value="1" />加入する</label></td>
		</tr>
		<tr>
			<th>介護保険</th>
			<!-- 
			<td>
				<label><input type="radio" name="care_insurance" value="1" />加入する</label>
				<label><input type="radio" name="care_insurance" value="0" />加入しない</label>
			</td>
			 -->
			 <td><label><input type="checkbox" id="care_insurance" name="care_insurance" value="1" />加入する</label></td>
		</tr>
		<tr>
			<th>厚生年金</th>
			<!-- 
			<td>
				<label><input type="radio" name="welfare_pension" value="1" />加入する</label>
				<label><input type="radio" name="welfare_pension" value="0" />加入しない</label>
			</td>
			 -->
			 <td><label><input type="checkbox" id="welfare_pension" name="welfare_pension" value="1" />加入する</label></td>
		</tr>
		<tr>
			<th> </th>
			<td><input id="SubmitButton" type="button" value="登 録" /></td>
		</tr>
	</table>
<!-- </form> -->
<?php echo $this->Form->end();?>

</div>






