<?php 
  class ContentController extends Controller {
  	public function index() {
      $data = array();
      $data['list'] = $this->listContent()['result'];
    	$this->view('content/content',$data);
  	}
  	public function list() {
        
  	}
    public function delImg(){
      $data = array();
      $id=get('id');
      $content_id=get('content_id');
      $result_del_img = $this->model('content')->delImg($id);
      $this->redirect('content/contentEdit&id='.$result['content_id']);
    }
    public function contentAdd(){
      $data = array();
      if(method_post()){
        $insert = array();
        $data = $_POST;
        $content = $this->model('content');
        $result = $content->add($data);
        if($result['result']=='success'){
          $content_id = $result['content_id'];
          if(isset($data['tags'])){
            if(is_array($data['tags'])){
              $result_add_tags = $this->model('tags')->addTags($data['tags'],$content_id);
            }
          }
          $files = files('file');
          if($files){
            $sub_path = date('Y_m_d');
            $path = 'uploads/images/'.$sub_path;
            if (!file_exists(DOCUMENT_ROOT.$path)) {
              mkdir(DOCUMENT_ROOT.$path, 0775);
            }
            $count_img = 0;
            foreach($files['tmp_name'] as $key => $val){
              if(!empty($files['name'][$key])){
                $img_name = $count_img.'_'.$files['name'][$key];
                uploadMuntiple($files['tmp_name'][$key],DOCUMENT_ROOT.$path.'/',$img_name);
                $count_img++;
                $insert_data = array(
                  'content_id' => $content_id,
                  'path' => $path.'/'.$img_name,
                  'name'  => $img_name
                );
                $content->addImg($insert_data);
              }
            }
          }
          // $this->redirect('content/contentEdit&id='.$result['content_id']);
          $this->redirect('content');
        }
      }else{
        $data['title'] = 'เพิ่มเนื้อหา';
        $data['action'] = 'index.php?route=content/contentAdd';
        $data['language'] = $this->model('language')->get()['result'];
        $data['tags'] = $this->model('tags')->get(array('lang_id'=>DEFAULT_LANGUAGE))['result'];
        $this->view('content/form',$data);
      }
    }
  	public function contentEdit(){
      $data = array();
      $id = get('id');
      if(method_post()){
        $id = post('id');
        $insert = array();
        $data = $_POST;
        $content = $this->model('content');
        $result = $content->edit($data);
        if($result['result']=='success'){
          if(isset($data['tags'])){
            if(is_array($data['tags'])){
              $result_add_tags = $this->model('tags')->addTags($data['tags'],$id);
            }
          }
          $files = files('file');
          if($files){
            $sub_path = date('Y_m_d');
            $path = 'uploads/images/'.$sub_path;
            if (!file_exists(DOCUMENT_ROOT.$path)) {
              mkdir(DOCUMENT_ROOT.$path, 0775);
            }
            $count_img = 0;
            foreach($files['tmp_name'] as $key => $val){
              $img_name = $count_img.'_'.$files['name'][$key];
              uploadMuntiple($files['tmp_name'][$key],DOCUMENT_ROOT.$path.'/',$img_name);
              $count_img++;
              $insert_data = array(
                'content_id' => $id,
                'path' => $path.'/'.$img_name,
                'name' => $img_name
              );
              $content->addImg($insert_data);
            }
          }
          $this->redirect('content/contentEdit&id='.$id.'&result=success');
        }else{
          $this->redirect('content/contentEdit&id='.$id.'&result=fail');
        }
      }else{
        $data['title'] = 'แก้ไขเนื้อหา test';
        $data['action'] = 'index.php?route=content/contentEdit&id='.$id;
        $data['id'] = $id;
        $select = array(
          'id' => $id
        );
        $checked_tags = $this->model('tags')->getChecked($id)['result'];
        $data['checked_tags'] = array();
        foreach($checked_tags as $val){
          $data['checked_tags'][] = $val['tags_id'];
        }
        $content = $this->model('content')->get($select)['result'];
        $data['files'] = $this->model('content')->getFiles($select)['result'];
        $data['content_detail'] = $content;

        $language = $this->model('language')->get()['result'];
        $data['content'] = array();
        foreach($content as $val){
          $data['content'][$val['lang_id']] = $val;
        }
        $data['language'] = $language;
        $data['tags'] = $this->model('tags')->get(array('lang_id'=>DEFAULT_LANGUAGE))['result'];
        $this->view('content/form',$data);
      }
  	}
    public function contentDelete(){
      $data = array();
      if(method_get()){
        $id = (int)get('id');
        if($id){
          $result_delete = $this->model('content')->del($id);
          if($result_delete){
             $this->redirect('content');
          }
        }
        $insert = array();
        $data = $_POST;
        
        $result = $content->add($data);
        if($result['result']=='success'){
          $this->redirect('content/contentEdit&id='.$result['content_id']);
        }
      }else{
        
      }
    }
    public function listContent($id_category=0,$type=0){
      $content = $this->model('content');
      $data = array(
        'lang_id' => DEFAULT_LANGUAGE
      );
      $listContent = $content->get($data);
      if($type==1){
        echo $this->json($listContent);
      }else{
        return $listContent;
      }
    }
  }
?>