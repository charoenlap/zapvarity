<?php 
	class CommonController extends Controller {
	    public function header($data=array()) {
			
	    	$this->render('common/header',$data);
	    }
	    public function footer($data=array()){

	    	$this->render('common/footer',$data);
		}
		// public function navbar($data=array()){
			
		// 	$this->render('common/navbar',$data);
		// }
	}
?>