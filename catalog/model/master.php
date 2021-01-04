<?php 
	class MasterModel extends db {
		public function getMenu($data=array()){
			$result = array();
			$result = $this->query("SELECT * FROM ".PREFIX."tags t LEFT JOIN ".PREFIX."tags_detail td ON t.id = td.tags_id WHERE active = 0 AND lang_id = ".DEFAULT_LANGUAGE)->rows;
			return $result;
		}
		public function getTitle($id){
			$result = array();
			$result = $this->query("SELECT * FROM ".PREFIX."tags t LEFT JOIN ".PREFIX."tags_detail td ON t.id = td.tags_id WHERE active = 0 AND lang_id = ".DEFAULT_LANGUAGE." AND t.id = ".(int)$id)->row;
			return $result;
		}
		public function getCat($id,$type=''){
			$result = array();
			$sql = "SELECT *,c.id AS id FROM ".PREFIX."content c 
			LEFT JOIN ".PREFIX."content_detail cd ON c.id = cd.content_id 
			LEFT JOIN ".PREFIX."content_tags ct ON ct.content_id = c.id 
			WHERE active = 0 
			AND cd.lang_id = ".DEFAULT_LANGUAGE." 
			AND ct.tags_id = ".(int)$id;
			$result_news = $this->query($sql)->rows;
			foreach($result_news as $val){
				$id = $val['id'];
				$sql_img = "SELECT * FROM ".PREFIX."files WHERE content_id = ".$id." LIMIT 0,1";
				$result_img = $this->query($sql_img)->row;

				$sql_tags = "SELECT * FROM ".PREFIX."content_tags ct 
				LEFT JOIN ".PREFIX."tags t ON ct.tags_id = t.id 
				LEFT JOIN ".PREFIX."tags_detail td ON td.id = t.id  
				WHERE 
				content_id = ".$id."
				AND lang_id = ".DEFAULT_LANGUAGE;
				$result_tags = $this->query($sql_tags)->rows;

				$result[] = array(
					'result' 	=> $val,
					'cover'		=> $result_img['path'],
					'id'		=> $id,
					'tags'		=> $result_tags
				);
			}
			return $result;
		}
	}
?>