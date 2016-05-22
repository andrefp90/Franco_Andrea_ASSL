<?php 


class Tasks extends CI_Controller{


	public function display($task_id){



		
		$data['pet_id'] = $this->task_model->get_task_pet_id($task_id);

		$data['petName'] = $this->task_model->get_pet_name($data['pet_id']);

		$data['task'] = $this->task_model->get_task($task_id);


		$data['main_view'] = "tasks/display";
		
		$this->load->view('layouts/main', $data);
	}


	public function create($pet_id){


	$this->form_validation->set_rules('task_name','Task Name','trim|required');
	$this->form_validation->set_rules('task_body','Task Body','trim|required');

	

	if($this->form_validation->run() == FALSE){

		$data['main_view'] = 'tasks/create_task';
		$this->load->view('layouts/main', $data);



	}else{

		$data = array(

			'pet_id' => $pet_id,
			'task_name' => $this->input->post('task_name'),
			'task_body' => $this->input->post('task_body'),
			'due_date' => $this->input->post('due_date'),
			

			);

		if($this->task_model->create_task($data)){

			$this->session->set_flashdata('task_created','Your task has been added');

			redirect("pets/index");


		}
	}
}

public function edit($task_id){


	$this->form_validation->set_rules('task_name','Task Name','trim|required');
	$this->form_validation->set_rules('task_body','Task Body','trim|required');

	

	if($this->form_validation->run() == FALSE){

		$data['pet_id'] = $this->task_model->get_task_pet_id($task_id);

		$data['petName'] = $this->task_model->get_pet_name($data['pet_id']);

		$data['the_task'] = $this->task_model->get_task_pet_data($task_id);

		$data['main_view'] = 'tasks/edit_task';
		$this->load->view('layouts/main', $data);



	}else{

		$pet_id = $this->task_model->get_task_pet_id($task_id);
		
		$data = array(

			
			'pet_id' => $pet_id,
			'task_name' => $this->input->post('task_name'),
			'task_body' => $this->input->post('task_body'),
			'due_date' => $this->input->post('due_date')
			

			);

		if($this->task_model->edit_task($task_id, $data)){

			$this->session->set_flashdata('task_updated','Your task has been updated');

			redirect("pets/index");


		}
	}
}

public function delete($pet_id,  $task_id){



$this->task_model->delete_task($task_id);


$this->session->set_flashdata('task_deleted','Your task has been deleted');

redirect("pets/display/" . $pet_id . " ");

}

public function mark_complete($task_id){

if($this->task_model->mark_task_complete($task_id)){

$pet_id = $this->task_model->get_task_pet_id($task_id);	

$this->session->set_flashdata('mark_done','This task has been completed');
redirect('pets/display/'.$pet_id.'');

}

}

public function mark_incomplete($task_id){

if($this->task_model->mark_task_incomplete($task_id)){

$pet_id = $this->task_model->get_task_pet_id($task_id);	

$this->session->set_flashdata('mark_undone','This task is not completed');
redirect('pets/display/'.$pet_id.'');

}

}


}


?>