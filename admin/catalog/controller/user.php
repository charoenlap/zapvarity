<?php 
	class UserController extends Controller {
	    public function index() {
	    	$data = array();
	    	$data['list_user'] = $this->listall(1);
	    	$this->view('user/user',$data);
	    }
	    public function listall($type=0) {
	    	$user = $this->model('user');
	    	$result = $user->listall();
	    	return $this->json($result,$type);
	    }
	    public function add(){

	    }
	    public function userEdit(){
	    	$this->view('user/userEdit');
	    }
	    public function userView(){
	    	$this->view('user/userView');
	    }
	    public function delete(){
	    	
	    }
	}
?>