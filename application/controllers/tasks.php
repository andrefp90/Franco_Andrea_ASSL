<?php 


class Tasks extends CI_Controller{

//the display fucntion in tasks will get the pets id name and task associated with it to be able to display 
	public function display($task_id){



		
		$data['pet_id'] = $this->task_model->get_task_pet_id($task_id);

		$data['petName'] = $this->task_model->get_pet_name($data['pet_id']);

		$data['task'] = $this->task_model->get_task($task_id);


		$data['main_view'] = "tasks/display";
		
		$this->load->view('layouts/main', $data);
	}

//function that creates task using the pets id and posting the new data 
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

//function that edits existing  task using the pets id and posting the new data 
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

//delete function can delete the task 

public function delete($pet_id,  $task_id){



$this->task_model->delete_task($task_id);


$this->session->set_flashdata('task_deleted','Your task has been deleted');

redirect("pets/display/" . $pet_id . " ");

}

//function in/ complete will mark the task as completed or not completed 
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