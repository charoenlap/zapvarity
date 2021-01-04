<?php 
	class DetailController extends Controller {
	    public function index() {
	    	$data = array();
			$data['title'] = "zappvariety - ศูนย์รวมข่าว";
 	    	$this->view('detail',$data);
	    }
	}
?>