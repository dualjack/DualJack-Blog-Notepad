<?php

	class Page extends CI_Controller {
		
		public function index() {
			
			$data['title'] = "Strona główna";
			
			$this->load->view('templates/main_header',$data);
			$this->load->view('templates/main_navigation',$data);
			$this->load->view('pages/home',$data);
			$this->load->view('templates/main_footer',$data);
			
		}
		
	}

?>
