<?php 
	class CatController extends Controller {
	    public function index() {
	    	$data = array();
	    	$id = get('id');
			$data['title'] = "zappvariety";
			$topic = $this->model('master')->getTitle($id);
			$data['topic'] = (isset($topic['title'])?$topic['title']:'');
			$data['cat'] = $this->model('master')->getCat($id);
			$data['vdo'] = $this->model('master')->getCat(11);
 	    	$this->view('cat',$data);
	    }
	}
?>