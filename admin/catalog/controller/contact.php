<?php 
  class ContactController extends Controller {
      public function index() {
        $this->view('contact/contact');
      }
      public function list() {
        
      }
      public function contactView(){
      	$this->view('contact/contactView');
      }
  }
?>