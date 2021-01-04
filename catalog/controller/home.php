<?php 
	class HomeController extends Controller {
	    public function index() {
	    	$data = array();
			$data['title'] = "zappvariety - Home";

	    	// $date = date('Y-m-d');
	    	// $master = $this->model('master');
	    	// $data_select = array(
	    	// 	'date' => $date
	    	// );
	    	// $data['result_oil'] = $master->getOil($data_select);
 	    	$this->view('home',$data);
	    }
	    public function insertOil(){
	    	$data = array();
	    	$master = $this->model('master');
	    	$ch = curl_init();
          	curl_setopt($ch, CURLOPT_URL, "https://crmmobile.bangchak.co.th/webservice/oil_price.aspx");
          	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          	$output = curl_exec($ch);
          	curl_close($ch);   

          	$xml = simplexml_load_string($output, "SimpleXMLElement", LIBXML_NOCDATA);
          	$json = json_encode($xml);
          	$arr = json_decode($json,TRUE);

          	// $result_last = $master->getOilLastDay();
          	$oil_price_change = array();
          	$temp_array = array(
          	  'update_date' => date('Y-m-d H:i:s'),
          	  'remark'      => $arr['remark_th']
          	);
          	foreach($arr['item'] as $val){
          		if((float)$val['today']!=$val['tomorrow']){
          			$status = '';
          			if($val['today']>$val['tomorrow']){
          				$status = 'ลง';
          			}else{
          				$status = 'ขึ้น';
          			}
          			$oil_price_change[] = array(
          				'name' 		=> $val['type'],
	          			'today'    	=> $val['today'],
		            	'tomorrow' 	=> $val['tomorrow'],
		            	'status'	=> $status,
		            	'diff'		=> $val['tomorrow']-$val['today']
          			);
          		}
          		$temp_array['items'][] = array(
	            	'name'     => $val['type'],
	            	'today'    => $val['today'],
	            	'tomorrow' => $val['tomorrow'],
	             	'yesterday'=> $val['yesterday'],
	            	'unit_th'  => $val['unit_th']
	            );
          	}
          	$result_oil = $master->InsertOil($temp_array); 
          	if(!empty($oil_price_change)){
	          	$text_noti = "\nราคาน้ำมัน ที่จะมีผลในวันพรุ่งนี้\n";
	          	foreach($oil_price_change as $val){
	          		$text_noti .= $val['name'].':'.$val['status'].' '.$val['diff']."\n";
	          	}
	          	lineNoti($text_noti);
	          }
	    }
	}
?>