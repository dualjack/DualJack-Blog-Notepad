<?php

	class Errors extends CI_Controller {
		
		public function page_404() {
			
			$data['title'] = "Nie znaleziono strony";
			
			$this->load->view('templates/main_header',$data);
			$this->load->view('templates/main_navigation',$data);
			$this->load->view('errors/page_404',$data);
			$this->load->view('templates/main_footer',$data);
			
		}
		
	}

?>
