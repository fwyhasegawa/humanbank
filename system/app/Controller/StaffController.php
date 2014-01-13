<?php
////////////////////////////////////
////
////  スタッフ管理コントローラ
////
////    2014.01.06 ->
////
////////////////////////////////////

App::uses('AppController', 'Controller');

class StaffController extends AppController{
	
	public $components = array('Paginator');
	
	
	
	public function index(){
		$this->layout = "fw";
		
		$this->loadModel('DboMStaff');
		
		$result = $this->DboMStaff->find('all', array(
				'conditions' => array(
						"ifnull(DboMStaff.delate, '0') != " => '1')
				)
		);
		
		$staff_data = array();
		if(!empty($result)){
			
			$cnt = 0;
			foreach ($result as $data){
				$staff_data[$cnt]['id'] = $data['DboMStaff']['id'];
				$staff_data[$cnt]['name'] = $data['DboMStaff']['family_name'] . ' ' . $data['DboMStaff']['first_name'];
				$staff_data[$cnt]['name_kana'] = $data['DboMStaff']['family_name_kana'] . ' ' . $data['DboMStaff']['first_name_kana'];
				$staff_data[$cnt]['tel'] = $data['DboMStaff']['tel'];
				$staff_data[$cnt]['h_tel'] = $data['DboMStaff']['h_tel'];
				$staff_data[$cnt]['addr'] = $data['DboMStaff']['addr'];
				$staff_data[$cnt]['fuyo_num'] = $data['DboMStaff']['fuyo_num'] . '人';
				$staff_data[$cnt]['birthday'] = $data['DboMStaff']['birthday'];
				$staff_data[$cnt]['bank'] = $data['DboMBanks']['name'] . ' ' . $data['DboMBanks']['siten_name'];
				$staff_data[$cnt]['account_num'] = $data['DboMStaff']['account_num'];
				$staff_data[$cnt]['pay_day'] = $data['DboMDays']['name'];
				$staff_data[$cnt]['create_date'] = $data['DboMStaff']['created'];				
				$cnt++;
			}
		}
		$this->set('staff_data', $staff_data);
	}
	
	public function add(){
		$this->layout = "fw";
		
		if($this->request->is('post')){
			// フォームからPOSTされた場合
			
			$this->loadModel('DboMStaff');
			
			$data = array(
					'dbo_m_companies_id' => '1',
					'family_name' => $this->request->data('family_name'),
					'first_name' => $this->request->data('first_name'),
					'family_name_kana' => $this->request->data('family_name_kana'),
					'first_name_kana' => $this->request->data('first_name_kana'),
					'tel' => $this->request->data('tel'),
					'h_tel' => $this->request->data('h_tel'),
					'post_addr' => $this->request->data('postAddr'),
					'addr' => $this->request->data('addr'),
					'fuyo_num' => $this->request->data('fuyo_num'),
					'birthday' => date('Y-m-d', mktime(0, 0, 0, $this->request->data('birth_month'), $this->request->data('birth_day'), $this->request->data('birth_year'))),
					'dbo_m_days_id' => $this->request->data('day_id'),
					'dbo_m_banks_id' => $this->request->data('bank_id'),
					'account_num' => $this->request->data('account_num'),
					'delate' => '0',
					'created' => date('Y-m-d H:i:s'),
					'modified' => date('Y-m-d H:i:s'),
					'transfar_fee_flag' => ((isset($this->request->data['transfar_fee'])) ? $this->request->data('transfar_fee') : '0'),
					'employment_insurance_flag' => (isset($this->request->data['employment_insurance'])) ? $this->request->data('employment_insurance') : '0',
					'health_insurance_flag' => (isset($this->request->data['health_insurance'])) ? $this->request->data('health_insurance') : '0',
					'care_insurance_flag' => (isset($this->request->data['care_insurance_flag']))? $this->request->data('care_insurance_flag') : '0',
					'welfare_pension_flag' => (isset($this->request->data['welfare_pension'])) ? $this->request->data('welfare_pension') : '0'
			);
			
			
			if($this->DboMStaff->save($data)){
				//$this->Session->setFlash(__("登録が完了しました。"));
				$this->set('compMsg', 'スタッフの登録が完了しました。');
			}else{
				$this->set('compMsg', '登録に失敗しました。');
			}
			
		}
		
		// 日にちマスタから、日にちデータを取得する
		$this->loadModel('DboMDay');
		
		$result = $this->DboMDay->find('all', array(
			'conditions' => array(
				"ifnull(DboMDay.delate, '0') != " => '1'
				)
			)
		);
		
		$day_data = array();
		if(!empty($result)){
			$cnt = 0;
			foreach ($result as $data){
				$day_data[$cnt]['id'] = $data['DboMDay']['id'];
				$day_data[$cnt]['name'] = $data['DboMDay']['name'];
				$cnt++;
			}
		}
		
		$this->set('day_data', $day_data);
		
		
		// 銀行マスタから、銀行データを取得する。
		$this->loadModel('DboMBank');
		
		$result = $this->DboMBank->find('all', array(
				'conditions' => array(
					"ifnull(DboMBank.delate, '0') != " => '1'
				)
			)
		);
		
		$cnt = 0;
		$bank_data = array();
		if(!empty($result)){
			foreach ($result as $data){
				$bank_data[$cnt]['id'] = $data['DboMBank']['id'];
				$bank_data[$cnt]['name'] = $data['DboMBank']['name'] . ' ' . $data['DboMBank']['siten_name'];
				$cnt++;
			}
		}else{
			$bank_data = array('', '');
		}
		
		$this->set('bank_data', $bank_data);
	}
	
	
}