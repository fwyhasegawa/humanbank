<?php
App::uses('AppController', 'Controller');


class TimeCardController extends AppController {
	
	public $components = array('Paginator');
	
	public function index(){
		$this->layout = "fw";
		
		$this->loadModel('DboTAttendance');
		
		$result = $this->DboTAttendance->find('all', array(
				'conditions' => array(
						'ifnull(DboTAttendance.delate, "0") !=' => '1'
						)
				)
		);
		
		$attendance_data = array();
		if(!empty($result)){
			$cnt = 0;
			foreach ($result as $data){
				$attendance_data[$cnt]['staff'] = $data['DboMStaffs']['family_name'] . ' ' . $data['DboMStaffs']['first_name'];
				$attendance_data[$cnt]['matter'] = $data['DboTMatters']['name'];
				$attendance_data[$cnt]['service_day'] = $data['DboTAttendance']['service_day'];
				$attendance_data[$cnt]['time_start'] = substr($data['DboTAttendance']['time_start'], 0, 5);
				$attendance_data[$cnt]['time_end'] = substr($data['DboTAttendance']['time_end'], 0, 5);
				$attendance_data[$cnt]['interval1_start'] = substr($data['DboTAttendance']['interval1_start'], 0, 5);
				$attendance_data[$cnt]['interval1_end'] = substr($data['DboTAttendance']['interval1_end'], 0, 5);
				$attendance_data[$cnt]['interval2_start'] = substr($data['DboTAttendance']['interval2_start'], 0, 5);
				$attendance_data[$cnt]['interval2_end'] = substr($data['DboTAttendance']['interval2_end'], 0, 5);
				$attendance_data[$cnt]['interval3_start'] = substr($data['DboTAttendance']['interval3_start'], 0, 5);
				$attendance_data[$cnt]['interval3_end'] = substr($data['DboTAttendance']['interval3_end'], 0, 5);
				$attendance_data[$cnt]['time_total'] = number_format($data['DboTAttendance']['time_total'], 1) .'h';
				$attendance_data[$cnt]['time_overtime'] = number_format($data['DboTAttendance']['time_overtime'], 1) . 'h';
				$attendance_data[$cnt]['time_latetime'] = number_format($data['DboTAttendance']['time_latetime'], 1) . 'h';
				$attendance_data[$cnt]['time_interval'] = number_format($data['DboTAttendance']['time_interval'], 1) . 'h';
				$attendance_data[$cnt]['sales'] = $data['DboTAttendance']['sales'];
				$attendance_data[$cnt]['pay'] = $data['DboTAttendance']['pay'];
				$attendance_data[$cnt]['teate1'] = $data['DboTAttendance']['teate1'];
				$attendance_data[$cnt]['teate2'] = $data['DboTAttendance']['teate2'];
				$attendance_data[$cnt]['teate3'] = $data['DboTAttendance']['teate3'];
				$attendance_data[$cnt]['allowance1'] = $data['DboMAllowances1']['name'];
				$attendance_data[$cnt]['allowance2'] = $data['DboMAllowances2']['name'];
				$attendance_data[$cnt]['allowance3'] = $data['DboMAllowances3']['name'];
				$attendance_data[$cnt]['tardy'] = ($data['DboTAttendance']['tardy_flg'] == '1') ? 'Yes' : 'No';
				$attendance_data[$cnt]['absence'] = ($data['DboTAttendance']['absence_flg'] == '1') ? 'Yes' : 'No'; 
				$attendance_data[$cnt]['comment'] = $data['DboTAttendance']['comment'];
				
				$cnt++;
			}
		}
		
		$this->set("attendance_data", $attendance_data);
			
			
		
	}
	
	public function reg(){
		$this->layout = "fw";
		
		// モデルをロード
		$this->loadModel('DboMStaff');
		$this->loadModel('DboTMatter');		
		if($this->request->is('post')){
			// フォームからPOSTされてきたら
			
			echo "<pre>";
			print_r($this->request->data);
			echo "</pre>";
			
			// モデルを追加ロード
			$this->loadModel('DboTAttendance');

			// フォームからのデータを分割？して、登録を行う
			for ($i = 0; $i < 20; $i++){
				if(strlen($this->request->data['name' . $i]) == 0 || 
					strlen($this->request->data['matter' . $i]) == 0 || 
					strlen($this->request->data['service_day' . $i]) == 0){
					continue;
				}
				
				// 取得したデータを使用して、スタッフIDをDBから取り出す
				$name = str_replace(')', '', $this->request->data["name" . $i]);
				$name_tmp = explode('(', $name);
				$name = explode(' ', $name_tmp[1]);
				
				$result = $this->DboMStaff->find('all', array(
					'fields' => array('DboMStaff.id'),
					'conditions' => array(
						'family_name' => $name[0],
						'first_name' => $name[1],
						'ifnull(DboMStaff.delate, "0") !=' => "1"
						)
					)
				);
				
				$name_id = 0;
				if(!empty($result)){
					foreach ($result as $data){
						$name_id = $data['DboMStaff']['id'];
					}
				}
				
				
				// 取得したデータを使用して、案件テーブルから案件ID, 開始時間, 終了時間, 休憩時間1開始, 休憩時間1終了, 請求単価, 支払単価を取得する。
				$matter = $this->request->data('matter' . $i);
				
				$result = $this->DboTMatter->find('all', array(
					'fields' => array('DboTMatter.id', 'DboTMatter.name','DboTMatter.time_start', 'DboTMatter.time_end', 'DboTMatter.interval_start', 'DboTMatter.interval_end', 'DboTMatter.price_seikyu', 'DboTMatter.price_siharai'),
					'conditions' => array(
						'DboTMatter.name' => $matter,
						'ifnull(DboTMatter.delate, "0") !=' => '1'
						)
					)
				);
				
				$matter_id = 0;
				$matter_time_start = "";
				$matter_time_end = "";
				$matter_interval_start = "";
				$matter_interval_end = "";
				$matter_price_seikyu = "";
				$matter_price_siharai = "";
				$matter_time_start_hour = "";
				$matter_time_end_hour = "";
				$matter_interval_start_hour = "";
				$matter_interval_end_hour = "";
				if(!empty($result)){
					echo "<pre>";
					print_r($result);
					echo "</pre>";
					foreach ($result as $data){
						$matter_id = $data['DboTMatter']['id'];
						$matter_time_start = substr($data['DboTMatter']['time_start'], 0, 5);
						$matter_time_end = substr($data['DboTMatter']['time_end'], 0, 5);
						$matter_interval_start = substr($data['DboTMatter']['interval_start'], 0, 5);
						$matter_interval_end = substr($data['DboTMatter']['interval_end'], 0, 5);
						$matter_price_seikyu = $data['DboTMatter']['price_seikyu'];
						$matter_price_siharai = $data['DboTMatter']['price_siharai'];
						
						$tmp = explode(':', $matter_time_start);
						$matter_time_start_hour = $tmp[0] + ($tmp[1] / 60);
						$tmp = explode(':', $matter_time_end);
						if($matter_time_start_hour > $tmp[0]){
							$matter_time_end_hour = $tmp[0] + ($tmp[1] / 60) + 24;
						}else{
							$matter_time_end_hour = $tmp[0] + ($tmp[1] / 60);
						}
						
						if(!empty($matter_interval_start) && !empty($matter_interval_end)){
							$tmp = explode(':', $matter_interval_start);
							$matter_interval_start_hour = $tmp[0] + ($tmp[1] / 60);
							$tmp = explode(':', $matter_interval_end);
							if($matter_interval_start_hour > $tmp[0]){
								$matter_interval_end_hour = $tmp[0] + ($tmp[1] / 60) + 24;
							}else{
								$matter_interval_end_hour = $tmp[0] + ($tmp[1] / 60);
							}
						}
					}
				}
				
				$work_time = 0;
				
				// 勤務時間を計算する
				if(!empty($this->request->data['time_start' . $i]) && !empty($this->request->data['time_end' . $i]))
				{
					// 休憩時間を初期化
					$normal_interval_hour = 0;
					$yakin_interval_hour = 0;
					$midnight_interval_hour = 0;
					
					// 時間の取出し
					$time_start = explode(':', $this->request->data('time_start' . $i));
					$time_end = explode(':', $this->request->data('time_end' . $i));
					if(!empty($this->request->data['interval_start1_' . $i]) && !empty($this->request->data['interval_end1_' . $i])){
						$interval_start1 = explode(':', $this->request->data('interval_start1_' . $i));
						$interval_end1 = explode(':', $this->request->data('interval_end1_' . $i));
					}					
					if(!empty($this->request->data['interval_start2_' . $i]) && !empty($this->request->data['interval_end2_' . $i])){
						$interval_start2 = explode(':', $this->request->data('interval_start2_' . $i));
						$interval_end2 = explode(':', $this->request->data('interval_end2_' . $i));
					}
					
					if(!empty($this->request->data['interval_start3_' . $i]) && !empty($this->request->data['interval_end3_' . $i])){
						$interval_start3 = explode(':', $this->request->data('interval_start3_' . $i));
						$interval_end3 = explode(':', $this->request->data('interval_end3_' . $i));
					}

					// それぞれの時間をhに変換する
					// もし、開始時間＞終了時間の関係の場合、終了時間を24時間加算する。
					if($time_start[0] > $time_end[0]){
						$time_start_hour = $time_start[0] + ($time_start[1] / 60);
						$time_end_hour = $time_end[0] + ($time_end[1] / 60) + 24;
					}else{
						$time_start_hour = $time_start[0] + ($time_start[1] / 60);
						$time_end_hour = $time_end[0] + ($time_end[1] / 60);
					}
					
					if(isset($interval_start1) && !empty($interval_start1)){
						$interval_start_hour1 = $interval_start1[0] + ($interval_start1[1] / 60);
						$interval_end_hour1 = $interval_end1[0] + ($interval_end1[1] / 60);
					}
					if(isset($interval_start2) && !empty($interval_start2)){
						$interval_start_hour2 = $interval_start2[0] + ($interval_start2[1] / 60);
						$interval_end_hour2 = $interval_end2[0] + ($interval_end2[1] / 60);
					}
					if(isset($interval_start3) && !empty($interval_start3)){
						$interval_start_hour3 = $interval_start3[0] + ($interval_start3[1] / 60);
						$interval_end_hour3 = $interval_end3[0] + ($interval_end3[1] / 60);
					}
					
					// 休憩時間を計算する
					$time_interval = 0;
					if(isset($interval_end_hour1)){
						if($interval_start_hour1 <= 5){
							$interval_start_hour1 += 24;
							$interval_end_hour1 += 24;
						}
						$interval_time1 = $interval_end_hour1 - $interval_start_hour1;
						$time_interval = $interval_time1;
						
						// 通常・夜勤・深夜残業の休憩に割り振る
						if($interval_end_hour1 <= 22 && $interval_start_hour1 >= 5){
							$normal_interval_hour += $interval_time1;
						}else{
							if($interval_start_hour1 < 22 && $interval_end_hour1 > 22){
								// 休憩時間が22時をまたぐ場合
								$normal_interval_hour += (22 - $interval_start_hour1);
								if($matter_time_end_hour > 22 && $matter_time_end_hour <= 29){
									// 勤務時間の終了が22時から翌5時の間（夜勤）の場合
									$yakin_interval_hour += ($interval_end_hour1 - 22);
								}else{
									$midnight_interval_hour += ($interval_end_hour1 - 22);
								}
							}else{
								// 休憩時間が22時以降の場合
								if($matter_time_end_hour > 22 && $matter_time_end_hour <= 29){
									$yakin_interval_hour += $interval_time1;
								}else{
									$midnight_interval_hour += $interval_time1;
								}
							}
						}
					}
					if(isset($interval_end_hour2)){
						if($interval_start_hour2 <= 5){
							$interval_start_hour2 += 24;
							$interval_end_hour2 += 24;
						}
						$interval_time2 = $interval_end_hour2 - $interval_start_hour2;
						$time_interval += $interval_time2;
						
						// 通常・夜勤・深夜残業の休憩に割り振る
						if($interval_end_hour2 <= 22 && $interval_start_hour2 >= 5){
							$normal_interval_hour += $interval_time2;
						}else{
							if($interval_start_hour2 < 22 && $interval_end_hour2 > 22){
								// 休憩時間が22時をまたぐ場合
								$normal_interval_hour += (22 - $interval_start_hour2);
								if($matter_time_end_hour > 22 && $matter_time_end_hour <= 29){
									// 勤務時間の終了が22時から翌5時の間（夜勤）の場合
									$yakin_interval_hour += ($interval_end_hour2 - 22);
								}else{
									$midnight_interval_hour += ($interval_end_hour2 - 22);
								}
							}else{
								// 休憩時間が22時以降の場合
								if($matter_time_end_hour > 22 && $matter_time_end_hour <= 29){
									$yakin_interval_hour += $interval_time2;
								}else{
									$midnight_interval_hour += $interval_time2;
								}
							}
						}
					}
					if(isset($interval_end_hour3)){
						if($interval_start_hour3 <= 5){
							$interval_start_hour3 += 24;
							$interval_end_hour3 += 24;
						}
						$interval_time3 = $interval_end_hour3 - $interval_start_hour3;
						$time_interval += $interval_time3;
						
						// 通常・夜勤・深夜残業の休憩に割り振る
						if($interval_end_hour3 <= 22 && $interval_start_hour3 >= 5){
							$normal_interval_hour += $interval_time3;
						}else{
							if($interval_start_hour3 < 22 && $interval_end_hour3 > 22){
								// 休憩時間が22時をまたぐ場合
								$normal_interval_hour += (22 - $interval_start_hour3);
								if($matter_time_end_hour > 22 && $matter_time_end_hour <= 29){
									// 勤務時間の終了が22時から翌5時の間（夜勤）の場合
									$yakin_interval_hour += ($interval_end_hour3 - 22);
								}else{
									$midnight_interval_hour += ($interval_end_hour3 - 22);
								}
							}else{
								// 休憩時間が22時以降の場合
								if($matter_time_end_hour > 22 && $matter_time_end_hour <= 29){
									$yakin_interval_hour += $interval_time3;
								}else{
									$midnight_interval_hour += $interval_time3;
								}
							}
						}
					}
					
					echo "通常休憩:" . $normal_interval_hour . "<br />";
					echo "夜勤休憩:" . $yakin_interval_hour . "<br />";
					echo "深夜残業休憩:" . $midnight_interval_hour . "<br />";
					
					// 合計勤務時間を計算する
					$work_time = ($time_end_hour - $time_start_hour) - $interval_time1;
					if(isset($interval_time2)){
						$work_time -= $interval_time2;
					}
					if(isset($interval_time3)){
						$work_time -= $interval_time3;
					}
					
					// 残業時間を計算する
					// 勤務時間が8hを超えていたら、超過分を残業時間とする
					$zangyo_time = 0;
					if($work_time > 8){
						$zangyo_time = $work_time - 8;
					}
					
					echo "終了:" . $time_end_hour . "<br />";
					
					
					// 深夜残業時間を計算する
					// 勤務時間が22時～翌日5時の間に入っている場合、この時間のうちの勤務時間を深夜残業時間とする。
					// ただし、案件自体の勤務時間がここに入る場合、この部分の勤務時間を夜勤時間とする。
					$midnight_zangyo_time = 0;
					$yakin_time = 0;
					if($time_end_hour > 22 && $time_end_hour <= 29){
						// 勤務終了時間が22時から翌5時の間の場合
						
						// まず、深夜時間帯の勤務時間を計算する
						$midnight = $time_end_hour - 22;
						
						// 案件自体の勤務時間内の場合
						if($time_end_hour <= $matter_time_end_hour){
							$yakin_time = $time_end_hour - 22;
							$midnight -= $yakin_time;
						//}else{
						}else if($matter_time_end_hour > 22 && $matter_time_end_hour < 29){
							$yakin_time = $matter_time_end_hour - 22;
							$midnight -= $yakin_time;
						}
						if(($matter_time_end + 6) < 12){
							$midnight_zangyo_time = $time_end_hour - $matter_time_end_hour;
							
						}else{
							$midnight_zangyo_time = $time_end_hour - 22;
							
						}
						$midnight -= $midnight_zangyo_time;
						//}
						
						// 
						/*if($midnight != 0){
							$midnight_zangyo_time += $midnight;
						}*/
					}
					
					echo "勤務時間:" . $work_time . "<br />";
					echo "夜勤:" . $yakin_time . "<br />";
					echo "深夜残業:" . $midnight_zangyo_time . "<br />";
				}
				
				// 金額の計算
				// Output: $price_seikyu: 請求金額, $price_siharai: 支払金額
				
				$not_zangyo_time = 0;
				// 最初に、金額の倍率が1.0の時間帯の時間を求める
				// (一日の作業時間 - (夜勤 + 深夜残業))
				//$not_zangyo_time = $work_time - ($yakin_time + $midnight_zangyo_time);
				$not_zangyo_time = ($time_end_hour - $time_start_hour) - ($yakin_time + $midnight_zangyo_time);
				
				$price_seikyu = (($not_zangyo_time - $normal_interval_hour) + (($yakin_time - $yakin_interval_hour) * 1.25) + (($midnight_zangyo_time - $midnight_interval_hour) * 1.5)) * $matter_price_seikyu;
				$price_siharai = (($not_zangyo_time - $normal_interval_hour) + (($yakin_time - $yakin_interval_hour) * 1.25) + (($midnight_zangyo_time - $midnight_interval_hour) * 1.5)) * $matter_price_siharai;
				
				
				
				$this->DboTAttendance->create();
				
				$data = array(
						'dbo_m_companies_id' => '1',	// デバッグ用に会社ID1をセット
						'dbo_m_staffs_id' => $name_id,
						'dbo_t_matters_id' => $matter_id,
						'service_day' => $this->request->data('service_day' . $i),
						'time_start' => $this->request->data('time_start' . $i),
						'time_end' => $this->request->data('time_end' . $i),
						'interval1_start' => $this->request->data('interval_start1_' . $i),	/* 休憩開始1 */
						'interval1_end' => $this->request->data('interval_end1_' . $i),	/* 休憩終了1 */
						'interval2_start' => $this->request->data('interval_start2_' . $i),	/* 休憩開始1 */
						'interval2_end' => $this->request->data('interval_end2_' . $i),	/* 休憩終了1 */
						'interval3_start' => $this->request->data('interval_start3_' . $i),	/* 休憩開始1 */
						'interval3_end' => $this->request->data('interval_end3_' . $i),	/* 休憩終了1 */
						'time_total' => (isset($work_time) ? number_format($work_time, 1) : '0.0'),	/* 合計勤務時間 */
						'time_overtime' => $zangyo_time,	/* 残業時間数 */
						'time_latetime' => ($midnight_zangyo_time - $midnight_interval_hour),	/* 深夜残業時間数 */
						'time_interval' => (isset($time_interval) ? number_format($time_interval, 1) : '0.0'),	/* 休憩時間 */
						'sales' => $price_seikyu,	/* 売上金額 */
						'pay' => $price_siharai,	/* 支払金額 */
						'seikyu_kazei' => '',	/* 請求金額　課税 */
						'seikyu_hikazei' => '',	/* 請求金額　非課税 */
						'teate1' => $this->request->data('teate1_' . $i),	/* 手当1 */
						'teate2' => $this->request->data('teate2_' . $i),	/* 手当2 */
						'teate3' => $this->request->data('teate3_' . $i),	/* 手当3 */
						'dbo_m_allowances_id1' => $this->request->data('allowance1_' . $i),	/* 手当詳細1 */
						'dbo_m_allowances_id2' => $this->request->data('allowance2_' . $i),	/* 手当詳細2 */
						'dbo_m_allowances_id3' => $this->request->data('allowance3_' . $i),	/* 手当詳細3 */
						'tardy_flg' => (isset($this->request->data['tardy_flag' . $i]) ? '1' : '0'),	/* 遅刻フラグ */
						'absence_flg' => (isset($this->request->data['absence_flag' . $i]) ? $this->request->data('absence_flag' . $i) : '0'),	/* 欠勤フラグ */
						'comment' => $this->request->data('comment' . $i), /* 備考 */
						'delate' => '0',	/* 削除フラグ */
						'created' => date('Y-m-d H:i:s'),	/* 作成日 */
						'modified' => date('Y-m-d H:i:s')	/* 更新日 */
						
				);
				
				echo "<pre>";
				print_r($data);
				echo "</pre>";
				
				if($this->DboTAttendance->save($data)){
					$this->set('compMsg', '勤怠登録が完了しました。');
				}else{
					$this->set('compMsg', '失敗:' . print_r($this->DboTAttendance->validationErrors));
				}
				
				// 次の処理のために初期化
				$interval_end1 = "";
				$interval_end2 = "";
				$interval_end3 = "";
				$interval_end_hour1 = "";
				$interval_end_hour2 = "";
				$interval_end_hour3 = "";
				$interval_start1 = "";
				$interval_start2 = "";
				$interval_start3 = "";
				$interval_start_hour1 = "";
				$interval_start_hour2 = "";
				$interval_start_hour3 = "";
				$time_interval = "";
				$work_time = "";
				
				
			}
			
		}	// ここまでがPOSTされたときの処理
		
		// スタッフ情報を取得
		$result = $this->DboMStaff->find('all', array(
			'fields' => array('DboMStaff.family_name', 'DboMStaff.first_name', 'DboMStaff.family_name_kana', 'DboMStaff.first_name_kana'),
			'conditions' => array(
				'ifnull(DboMStaff.delate, "0") !=' => '1'
				)
			)
		);
		
		$staff_data = array();
		if(!empty($result)){
			foreach ($result as $data){
				$staff_data[] = $data['DboMStaff']['family_name_kana'] . " " . $data['DboMStaff']['first_name_kana'] . " (" . $data['DboMStaff']['family_name'] . " " . $data['DboMStaff']['first_name'] . ")";
			}
		}
		
		$this->set("staff_data", $staff_data);
		
		
		// 案件情報を取得
		$result = $this->DboTMatter->find('all', array(
			'fields' => array('DboTMatter.name'),
			'conditions' => array(
				'ifnull(DboTMatter.delate, "0") !=' => '1'
				)
			)
		);
		
		$matter_data = array();
		if(!empty($result)){
			foreach ($result as $data){
				$matter_data[] = $data['DboTMatter']['name'];
			}
		}

		$this->set("matter_data", $matter_data);
		

		// 手当情報を取得
		$this->loadModel('DboMAllowance');
		
		$result = $this->DboMAllowance->find('all', array(
				'conditions' => array(
						'ifnull(DboMAllowance.delate, "0") !=' => '1'
				)
			)
		);
		
		$allowance_data = array();
		if(!empty($result)){
			$cnt = 0;
			foreach ($result as $data){
				$allowance_data[$cnt]['id'] = $data['DboMAllowance']['id'];
				$allowance_data[$cnt]['name'] = $data['DboMAllowance']['name'];
				
				$cnt++;
			}
		}
		
		$this->set('allowance_data', $allowance_data);
	}
	
}