<?php 
	class CatController extends Controller {
	    public function index() {
	    	$data = array();
			$data['title'] = "zappvariety - ข่าวหน้า 1";
 	    	$this->view('cat',$data);
	    }
	}
?>