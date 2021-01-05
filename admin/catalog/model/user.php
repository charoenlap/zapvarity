<?php 
	class UserModel extends db {
		public function listall($data = array()){
			$result = array();
			$sql = "SELECT * FROM ".PREFIX."users";
			$result = $this->query($sql)->rows;
			return $result;
		}
		public function check($data=array()){
			$result = array();
			$username = $this->escape($data['username']);
			$password = md5($this->escape($data['password']));
			$sql = "SELECT * FROM ".PREFIX."users WHERE username = '".$username."' AND password='".$password."' LIMIT 0,1";
			$result_user = $this->query($sql);
			if($result_user->num_rows){
				$result = array(
					'result' => $result_user->row
				);
			}else{
				$result = false;
			}
			return $result;
		}
	}
?>