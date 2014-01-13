<?php
////////////////////////////////////
////
////  顧客情報コントローラ
////
////    2014.01.06 ->
////
////////////////////////////////////

App::uses('AppController', 'Controller');

class ClientController extends AppController{
	
	public $components = array('Paginator');
	
	
	public function index(){
		$this->layout = "fw";
		
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
			foreach ($result as $data){
				$client_data[$cnt]['id'] = $data['DboMClient']['id'];
				$client_data[$cnt]['name'] = $data['DboMClient']['name'];
				$client_data[$cnt]['name_kana'] = $data['DboMClient']['name_kana'];
				$client_data[$cnt]['addr'] = $data['DboMClient']['addr'];
				$client_data[$cnt]['tel'] = $data['DboMClient']['tel'];
				$client_data[$cnt]['fax'] = $data['DboMClient']['fax'];
				$client_data[$cnt]['day_shime'] = $data['DboMDays1']['name'];
				$client_data[$cnt]['day_pay'] = $data['DboMDays2']['name'];
				
				$cnt++;
			}
		}
		
		$this->set('client_data', $client_data);
	}
	
	public function add(){
		$this->layout = "fw";
		
		
		$this->loadModel('DboMDay');
		
		$result = $this->DboMDay->find('all', array(
			'conditions' => array(
				'ifnull(DboMDay.delate, "0") !=' => '1'
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
	}
}
?>