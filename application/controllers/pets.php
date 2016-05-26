<?php

class Pets extends CI_Controller {

	public function __construct(){

			parent::__construct();

			//verify if user is logged in if not use set_flashdata to let the user know he/she is not logged in and redirect to home/index
	
	if(!$this->session->userdata('logged_in')){

	
	$this->session->set_flashdata('no_access','Sorry you are not logged in');

		redirect('home/index');
	}
}
//If the user is logged in get all his/her pets 
	public function index() {

		$user_id = $this->session->userdata('user_id');
		$data['pets'] = $this->pet_model->get_all_pets($user_id);


		$data['main_view'] = "pets/index";

		$this->load->view('layouts/main', $data);


	

	}



//Get in/completed tasks and pets to display to the user 

public function display($pet_id){


$data['completed_tasks'] = $this->pet_model->get_pet_tasks($pet_id, true);

$data['not_completed_tasks'] = $this->pet_model->get_pet_tasks($pet_id, false);


$data['pet_data'] = $this->pet_model->get_pet($pet_id);

$data['main_view'] = "pets/display";

$this->load->view('layouts/main', $data);

}


//Function to create a new pet if the pet was succesfully created post it to the user in session 
public function create(){


	$this->form_validation->set_rules('petName','Pets Name','trim|required');
	$this->form_validation->set_rules('birth','Date of Birth','trim|required');
	$this->form_validation->set_rules('weight','Weight','trim|required');
	$this->form_validation->set_rules('height','Height','trim');
	$this->form_validation->set_rules('gender','Gender','trim|required');
	$this->form_validation->set_rules('description','Description','trim|min_length[3]');
	

	if($this->form_validation->run() == FALSE){

		$data['main_view'] = 'pets/create_pet';
		$this->load->view('layouts/main', $data);



	}else{

		$data = array(

			'pet_user_id' => $this->session->userdata('user_id'),
			'petName' => $this->input->post('petName'),
			'breed' => $this->input->post('breed'),
			'birth' => $this->input->post('birth'),
			'weight' => $this->input->post('weight'),
			'height' => $this->input->post('height'),
			'gender' => $this->input->post('gender'),
			'description' => $this->input->post('description')
			

			);

		if($this->pet_model->create_pet($data)){

			$this->session->set_flashdata('pet_created','Your pet has been added');

			redirect("pets/index");


		}
	}
}

//function to edit pet using the pet_id if the pet was succesfully created post it to the user in session 
public function edit($pet_id){


	$this->form_validation->set_rules('petName','Pets Name','trim|required');
	$this->form_validation->set_rules('birth','Date of Birth','trim|required');
	$this->form_validation->set_rules('weight','Weight','trim|required');
	$this->form_validation->set_rules('height','Height','trim');
	$this->form_validation->set_rules('gender','Gender','trim|required');
	$this->form_validation->set_rules('description','Description','trim|min_length[3]');
	

	if($this->form_validation->run() == FALSE){


		$data['pet_data'] = $this->pet_model->get_pets_info($pet_id);

		$data['main_view'] = 'pets/edit_pet';
		$this->load->view('layouts/main', $data);



	}else{

		$data = array(

			'pet_user_id' => $this->session->userdata('user_id'),
			'petName' => $this->input->post('petName'),
			'breed' => $this->input->post('breed'),
			'birth' => $this->input->post('birth'),
			'weight' => $this->input->post('weight'),
			'height' => $this->input->post('height'),
			'gender' => $this->input->post('gender'),
			'description' => $this->input->post('description')
			

			);

		if($this->pet_model->edit_pet($pet_id, $data)){

			$this->session->set_flashdata('pet_updated','Your pet has been updated');

			redirect("pets/index");


		}
	}
}
//delete function will delete tasks and pets and announce it was deleted 

public function delete($pet_id){

$this->pet_model->delete_pet_tasks($pet_id);

$this->pet_model->delete_pet($pet_id);


$this->session->set_flashdata('pet_deleted','Your pet has been deleted');

redirect("pets/index");

}


}



