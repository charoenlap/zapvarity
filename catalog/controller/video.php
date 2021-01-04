<?php 
	class VideoController extends Controller {
	    public function index() {
            $data = array();
            $id = get('id');
            $data['title'] = "zappvariety -  วีดีโอ";
            $data['vdo'] = $this->model('master')->getCat(11);
            $data['menu'] = $this->model('master')->getMenu();
 	    	$this->view('video',$data);
        }
        public function video_detail(){
            $data = array();
            $data['title'] = "zappvariety - รายละเอียดวีดีโอ";
            
            $this->view('video_detail',$data);
        }
	}
?>