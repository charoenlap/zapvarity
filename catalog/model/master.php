<?php 
	class MasterModel extends db {
		public function getOil($data=array()){
			// $result = array();
			// $sql = "SELECT * FROM oil_date WHERE DATE_FORMAT(update_date,'%Y-%m-%d') = '".$this->escape($data['date'])."' ORDER BY id_oil DESC LIMIT 0,1";
			// $result_oil = $this->query($sql)->row;

			// $sql_detail = "SELECT * FROM oil_detail WHERE id_oil = ".$result_oil['id_oil'];
			// $result_detail = $this->query($sql_detail)->rows;
			// foreach($result_detail as $val){
			// 	$status = '';
			// 	$status = ($val['tomorrow'] > $val['today']?'danger':'success');
			// 	if($val['tomorrow'] == $val['today']){
			// 		$status = '';
			// 	}
			// 	$diff = $val['tomorrow'] - $val['today'];
			// 	if($diff==0){
			// 		$diff = '';
			// 	}
			// 	$result[] = array(
			// 		'name' 		=> $val['name'],
			// 		'today'		=> $val['today'],
			// 		'tomorrow' 	=> $val['tomorrow'],
			// 		'yesterday'	=> $val['yesterday'],
			// 		'unit_th'	=> $val['unit_th'],
			// 		'status'	=> $status,
			// 		'diff'		=> $diff
			// 	);
			// }
			// return $result;
		}
		// public function getOilLastDay($data=array()){
		// 	$result = array();
		// 	$sql = "SELECT * FROM oil_date ORDER BY id_oil DESC LIMIT 0,1";
		// 	$id_oil = $this->query($sql)->row['id_oil'];

		// 	$sql_detail = "SELECT * FROM oil_detail WHERE id_oil = ".$id_oil;
		// 	$result_detail = $this->query($sql_detail)->rows;
		// 	foreach($result_detail as $val){
		// 		$result[] = array(
		// 			'name' => 
		// 		);
		// 	}
		// 	return $result;
		// }
		public function InsertOil($data=array()){
			// $result = array();
			// $data_date = array(
			// 	'update_date' => $data['update_date'],
          	//   	'remark'      => $data['remark']
			// );
			// $result_date = $this->insert('date',$data_date);
			// foreach($data['items'] as $val){
			// 	$data_detail = array(
			// 		'id_oil'	=> $result_date,
			// 		'name'     	=> $val['name'],
	        //     	'today'    	=> $val['today'],
	        //     	'tomorrow' 	=> $val['tomorrow'],
	        //      	'yesterday' => $val['yesterday'],
	        //     	'unit_th'  	=> $val['unit_th']
			// 	);
			// 	$result_detail = $this->insert('detail',$data_detail);
			// }
			// return $result;
		}
	}
?>