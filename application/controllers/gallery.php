<?php

	class Gallery extends CI_Controller {
		
		public function index() {
			
			$data['title'] = "Galeria";
			
			$this->load->view('templates/main_header',$data);
			$this->load->view('templates/main_navigation',$data);
			$this->load->view('gallery/home',$data);
			$this->load->view('templates/main_footer',$data);
			
		}
		
	}

?>
