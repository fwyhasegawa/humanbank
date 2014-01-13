<?php
//////////////////////////////////////////
////
////  請求情報コントローラ
////
////    2014.01.10 ->
////
///////////////////////////////////////////

App::uses('AppController', 'Controller');

class SeikyuController extends AppController{
	
	public $components = array('Paginator');

	
	public function index(){
		$this->layout = "fw";
		
		$this->loadModel('DboTClaim');
		
		$result = $this->DboTClaim->find('all', array(
				'conditions' => array(
						'ifnull(DboTClaim.delate, "0") !=' => '1'
						)
				)
		);
		
		$claim_data = array();
		if(!empty($result)){
			
			$cnt = 0;
			foreach($result as $data){
				$claim_data[$cnt]['name'] = $data['DboMClients']['name'];
				$claim_data[$cnt]['price'] = $data['DboTClaim']['price'];
				$claim_data[$cnt]['calc_start'] = $data['DboTClaim']['calc_start'];
				$claim_data[$cnt]['calc_end'] = $data['DboTClaim']['calc_end'];
				$claim_data[$cnt]['seikyu_day'] = $data['DboTClaim']['seikyu_day'];

				$cnt++;
			}
		}
		
		$this->set("claim_data", $claim_data);
		
	}
	
	
	
}


?>