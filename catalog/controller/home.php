<?php 
	class HomeController extends Controller {
	    public function index() {
	    	$data = array();
			$data['title'] = "zappvariety - Home";
			$data['lasted'] = $this->model('master')->getLated();

			$id=1;
			$data['content_1'] = $this->model('master')->getCat($id);
			$data['content_topic_1'] = $this->model('master')->getTitle($id)['title'];

			$id=2;
			$data['content_2'] = $this->model('master')->getCat($id);
			$data['content_topic_2'] = $this->model('master')->getTitle($id)['title'];

			$id=3;
			$data['content_3'] = $this->model('master')->getCat($id);
			$data['content_topic_3'] = $this->model('master')->getTitle($id)['title'];

			$data['related'] = $this->model('master')->getCat(11);
			// $data['related'] = $this->model('master')->getRelated($id);

 	    	$this->view('home',$data);
	    }
	}
?>