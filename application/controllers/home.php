<?php

class Home extends CI_Controller {

//Inside the controller Home with function of index using a conditional statment to verify if the user ids logged in and get the users pets and tasks 
	public function index() {

		if($this->session->userdata('logged_in')){

			$user_id = $this->session->userdata('user_id');

			$data['tasks'] = $this->task_model->get_all_tasks($user_id);
			$data['pets'] = $this->pet_model->get_all_pets($user_id);
	}

		$data['main_view'] = "home_view";

		$this->load->view('layouts/main', $data);
		$this->load->view('users/login_view'); 
}
}
?>
