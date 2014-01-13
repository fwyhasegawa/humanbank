<?php
/////////////////////////////////////////
////
////  支払管理コントローラ
////
////    2014.01.10 ->
////
/////////////////////////////////////////

App::uses('AppController', 'Controller');

class ShiharaiController extends AppController{
	
	public $components = array('Paginator');
	
	
	public function index(){
		$this->layout = "fw";
		
		$this->loadModel('DboTPayment');
		
		$result = $this->DboTPayment->find('all', array(
			'conditions' => array(
				'ifnull(DboTPayment.delate, "0") !=' => '1'
				)
			)
		);
		
		$payment_data = array();
		if(!empty($result)){
			
			$cnt = 0;
			foreach($result as $data){
				$payment_data[$cnt]['name'] = $data['DboMStaffs']['family_name'] . ' ' . $data['DboMStaffs']['first_name'];
				$payment_data[$cnt]['kyuyo'] = $data['DboTPayment']['kyuyo'];
				$payment_data[$cnt]['sime_day'] = $data['DboTPayment']['sime_day'];
				$payment_data[$cnt]['calc_start'] = $data['DboTPayment']['calc_start'];
				$payment_data[$cnt]['calc_end'] = $data['DboTPayment']['calc_end'];
				$payment_data[$cnt]['siharai_day'] = $data['DboTPayment']['siharai_day'];
				$payment_data[$cnt]['koyo_hoken'] = $data['DboTPayment']['koyo_hoken'];
				$payment_data[$cnt]['kenko_hoken'] = $data['DboTPayment']['kenko_hoken'];
				$payment_data[$cnt]['kaigo_hoken'] = $data['DboTPayment']['kaigo_hoken'];
				$payment_data[$cnt]['kose_nenkin'] = $data['DboTPayment']['kose_nenkin'];
				$payment_data[$cnt]['syotokuzei'] = $data['DboTPayment']['syotokuzei'];
				$payment_data[$cnt]['koutsuhi'] = $data['DboTPayment']['koutsuhi'];
				$payment_data[$cnt]['teate'] = $data['DboTPayment']['teate'];
				$payment_data[$cnt]['sousikyu'] = $data['DboTPayment']['sousikyu'];
				
				$cnt++;
			}
		}
		$this->set("payment_data", $payment_data);
	}
}

?>