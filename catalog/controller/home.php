<?php 
	class HomeController extends Controller {
	    public function index() {
	    	$data = array();
			$data['title'] = "zappvariety - Home";
			$data['lasted'] = $this->model('master')->getLated();

			$menu = $data['menu'] = $this->model('master')->getMenu();
			$data['menu'] = $menu;
			foreach($menu AS $val){
				$id=$val['id'];
				$data['content_'.$id] = $this->model('master')->getCat($id);
				$data['content_topic_'.$id] = $this->model('master')->getTitle($id)['title'];
			}
			

			$data['related'] = $this->model('master')->getCat(11);
			// $data['related'] = $this->model('master')->getRelated($id);

 	    	$this->view('home',$data);
	    }
	}
?>