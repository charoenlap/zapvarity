<?php 
	class CatController extends Controller {
	    public function index() {
	    	$data = array();
	    	$id = get('id');
			$data['title'] = "zappvariety";
			$data['topic'] = $this->model('master')->getTitle($id)['title'];
			$data['cat'] = $this->model('master')->getCat($id);
			$data['vdo'] = $this->model('master')->getCat(11);
 	    	$this->view('cat',$data);
	    }
	}
?>