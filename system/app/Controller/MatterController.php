<?php
////////////////////////////////
////
////  案件情報コントローラ
////
////    2014.01.07 ->
////
////////////////////////////////

App::uses('AppController', 'Controller');

class MatterController extends AppController{
	
	public $components = array('Paginator');
	
	public function index(){
		$this->layout = 'fw';
		
		$this->loadModel('DboTMatter');
		
		$result = $this->DboTMatter->find('all', array(
				'conditions' => array(
					'ifnull(DboTMatter.delate, "0") !=' => '1'
				)
			)
		);
		
		$matter_data = array();
		if(!empty($result)){
			
			$cnt = 0;
			foreach ($result as $data){
				$matter_data[$cnt]['id'] = $data['DboTMatter']['id'];
				$matter_data[$cnt]['company_name'] = $data['DboMClients']['name'];
				$matter_data[$cnt]['name'] = $data['DboTMatter']['name'];
				$matter_data[$cnt]['time_start'] = $data['DboTMatter']['time_start'];
				$matter_data[$cnt]['time_end'] = $data['DboTMatter']['time_end'];
				$matter_data[$cnt]['interval_start'] = $data['DboTMatter']['interval_start'];
				$matter_data[$cnt]['interval_end'] = $data['DboTMatter']['interval_end'];
				$matter_data[$cnt]['nikyu'] = $data['DboTMatter']['nikyu_flg'];
				$matter_data[$cnt]['price_seikyu'] = $data['DboTMatter']['price_seikyu'];
				$matter_data[$cnt]['price_shiharai'] = $data['DboTMatter']['price_siharai'];
				
				$cnt++;
			}
		}
		
		$this->set("matter_data", $matter_data);
	}
	
	public function add(){
		$this->layout = 'fw';
		
		if($this->request->is('post')){
			// フォームからPOSTされたら
			
			$this->loadModel('DboTMatter');
			
			$data = array(
					'dbo_m_companies_id' => '1', // デバッグ用（ログイン機能を有効にしたときに、SESSIONなどから会社IDを取得する
					'dbo_m_clients_id' => $this->request->data('client'),
					'name' => $this->request->data('name'),
					'addr' => $this->request->data('addr'),
					'tel' => $this->request->data('tel'),
					'time_start' => $this->request->data('time_start'),
					'time_end' => $this->request->data('time_end'),
					'interval_start' => $this->request->data('interval_start'),
					'interval_end' => $this->request->data('interval_end'),
					'nikyu_flg' => (isset($this->request->data['nikyu_flg']) ? $this->request->data('nikyu_flg') : '0'),
					'price_seikyu' => $this->request->data('price_seikyu'),
					'price_siharai' => $this->request->data('price_siharai'),
					'delate' => '0',
					'created' => date('Y-m-d H:i:s'),
					'modified' => date('Y-m-d H:i:s')
			);
			
			if($this->DboTMatter->save($data)){
				$this->set('compMsg', '案件の登録が完了しました。');
			}else{
				$this->set('compMsg', '登録に失敗しました。');
			}
		}
		
		
		$this->loadModel('DboMClient');
		
		$result = $this->DboMClient->find('all', array(
				'conditions' => array(
					'ifnull(DboMClient.delate, "0") !=' => '1'
				)
			)
		);
		
		$client_data = array();
		if(!empty($result)){
			$cnt = 0;
			foreach($result as $data){
				$client_data[$cnt]['id'] = $data['DboMClient']['id'];
				$client_data[$cnt]['name'] = $data['DboMClient']['name'];
				
				$cnt++;
			}
		}
		
		$this->set('client_data', $client_data);
		
	}
}