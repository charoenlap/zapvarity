<?php 
	class ContentModel extends db {
		public function get($data = array()){
			$result = array();
			$where = '';
			if(isset($data['id'])){
				$where .= ' AND c.id = '.(int)$data['id'];
			}
			if(isset($data['lang_id'])){
				$id_lang = $this->id_lang();
				$where .= ' AND cd.lang_id='.(int)$id_lang;
			}

			$sql = "SELECT *,c.id AS id FROM ".PREFIX."content c INNER JOIN ".PREFIX."content_detail cd ON c.id = cd.content_id WHERE c.id <> '' ".$where;
			$result['result'] = $this->query($sql)->rows;

			return $result;
		}
		public function delImg($id){
			$result = array();
			$sql = "SELECT * FROM ".PREFIX."files WHERE id=".(int)$id;
			$result_img = $this->query($sql);
			$file = $result_img->row['path'];
			@unlink($file);
			$this->delete('files','id='.(int)$id);
		}
		public function getFiles($data = array()){
			$result = array();
			$where = '';
			if(isset($data['id'])){
				$where .= ' AND f.content_id = '.(int)$data['id'];
				$sql = "SELECT * FROM ".PREFIX."files f WHERE f.content_id <> '' ".$where;
				$result['result'] = $this->query($sql)->rows;
			}
			return $result;
		}
		public function add($data=array()){
			$result = array();
			if(is_array($data)){
				$date = date('Y-m-d H:i:s');
				$insert_content = array(
					'user_id' => 0,
					'date_create' => $date
				);
				$content_id = $this->insert('content',$insert_content);
				foreach($data['title'] as $key => $val){
					$insert_detail = array(
						'content_id' => $content_id,
						'lang_id' => $key,
						'title' => $val,
						'detail' => $data['detail'][$key]
					);
					$content_id_detail = $this->insert('content_detail',$insert_detail);
				}
				$result = array(
					'result' => 'success',
					'content_id' => $content_id
				);
			}else{
				$result = array(
					'result' => 'fail'
				);
			}
			return $result;
		}
		public function addImg($data = array()){
			$result = array();
			$content_id = $data['content_id'];
			$insert_detail = array(
				'path' => $data['path'],
				'name' => $data['name'],
				'content_id'=> $data['content_id']
			);
			$content_img_id = $this->insert('files',$insert_detail);
			return $content_img_id;
		}
		public function edit($data=array()){
			$result = array();
			if(is_array($data)){
				if(isset($data['id'])){
					$content_id = (int)$data['id'];
					$date = date('Y-m-d H:i:s');
					$update_content = array(
						// 'user_id' => 0,
						'date_create' => $date
					);
					$result_content = $this->update('content',$update_content,"id=".$content_id);
					foreach($data['title'] as $key => $val){
						$update_detail = array(
							'title' => $val,
							'detail' => $data['detail'][$key]
						);
						$where = "lang_id = ".$key." AND content_id = ".$content_id;
						$result_content_detail = $this->update('content_detail',$update_detail,$where);
					}
					$result = array(
						'result' => 'success',
						'content_id' => $content_id
					);
				}
			}else{
				$result = array(
					'result' => 'fail'
				);
			}
			return $result;
		}
		public function del($id){
			$result = array();
			if($id){
				$this->delete('content',"id=".(int)$id);
				$this->delete('content_detail',"content_id=".(int)$id);
				$this->delete('content_tags',"content_id=".(int)$id);
				$result = array(
					'result' => 'success'
				);
			}else{
				$result = array(
					'result' => 'fail'
				);
			}
			return $result;
		}
		public function id_lang($id_lang = 0){
			$return = $id_lang;
			if($id_lang==0){
				$return = DEFAULT_LANGUAGE;
			}
			return $return;
		}
	}
?>