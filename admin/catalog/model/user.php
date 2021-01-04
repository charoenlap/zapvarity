<?php 
	class UserModel extends db {
		public function listall($data = array()){
			$result = array();
			$sql = "SELECT * FROM ".PREFIX."users";
			$result = $this->query($sql)->rows;
			return $result;
		}
	}
?>