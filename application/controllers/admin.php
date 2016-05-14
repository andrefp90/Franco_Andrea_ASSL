<?php

class admin extends CI_Controller {

	public function dash() {

			$data['main_view'] = 'admin_view';
		
		
		$this->load->view('layouts/main', $data);
	

	}
}
?>