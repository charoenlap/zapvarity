<?php 
	class ContactController extends Controller {
	    public function index() {
	    	$data = array();
			$data['title'] = "zappvariety - ติดต่อเรา";
 	    	$this->view('contact',$data);
	    }
	}
?>