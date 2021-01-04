<?php 
	class VideoController extends Controller {
	    public function index() {
	    	$data = array();
			$data['title'] = "zappvariety -  วีดีโอ";
 	    	$this->view('video',$data);
        }
        public function video_detail(){
            $data = array();
            $data['title'] = "zappvariety - รายละเอียดวีดีโอ";
            $this->view('video_detail',$data);
        }
	}
?>