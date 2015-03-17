<?php

	class Contact extends CI_Controller {
		
		public function index() {
			
			$data['title'] = "Informacje kontaktowe";
			
			$this->load->view('templates/main_header',$data);
			$this->load->view('templates/main_navigation',$data);
			$this->load->view('pages/contact');
			$this->load->view('templates/main_footer',$data);
			
		}
		
	}

?>
