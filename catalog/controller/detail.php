<?php 
	class DetailController extends Controller {
	    public function index() {
	    	$data = array();
			$id = (int)get('id');
			if($id){
				$data['title'] = "zappvariety - ศูนย์รวมข่าว";
				$data['content'] = $this->model('master')->get($id);
				$data['topic'] = $this->model('master')->getTitle($id)['title'];
	 	    	$this->view('detail',$data);
	 	    }else{
	 	    	$this->view('not_found',$data);
	 	    }
	    }
	}
?>