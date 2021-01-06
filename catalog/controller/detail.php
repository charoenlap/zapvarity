<?php 
	class DetailController extends Controller {
	    public function index() {
	    	$data = array();
			$id = (int)get('id');
			if($id){
				$master = $this->model('master');
				$data['content'] = $master->get($id);
				$data['title'] = $data['content']['tags'][0]['cat_title'];
				$data['related'] = $master->getRelated($id);
				$data['topic'] = $master->getTopic($id);
				$data['header_title'] = $data['topic']['title'];
				$data['description'] = mb_strimwidth(strip_tags(html_entity_decode($data['topic']['detail'])), 0, 100, "...");
				$data['image'] = MURL.$data['content']['cover'];
				$data['url'] = MURL.route('detail&id='.$id);
				$data['img'] = $master->contentImg($id);
	 	    	$this->view('detail',$data);
	 	    }else{
	 	    	$this->view('not_found',$data);
	 	    }
	    }
	}
?>