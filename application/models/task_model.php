<?php

class Task_model extends CI_Model{



	public function get_task($task_id){

$this->db->where('id', $task_id);

$query = $this->db->get('tasks');

return $query->row();

	}

	public function get_all_tasks($user_id){


$this->db->where('pet_user_id', $user_id);
$this->db->join('tasks', 'pets.id = tasks.pet_id');
$query = $this->db->get('pets');

return $query->result();

	}


public function create_task($data){

$query = $this->db->insert('tasks', $data);

return $query;


}

public function get_task_pet_id($task_id){

$this->db->where('id', $task_id);

$query = $this->db->get('tasks');

return $query->row()->pet_id;


}

public function get_pet_name($pet_id){

$this->db->where('id', $pet_id);

$query = $this->db->get('pets');

return $query->row()->petName;

}

public function get_task_pet_data($task_id){

$this->db->where('id', $task_id);	

$query = $this->db->get('tasks');

return $query->row();

}

public function edit_task($task_id, $data){

	$this->db->where('id', $task_id);

	$this->db->update('tasks', $data);

	return TRUE;
}

public function delete_task($task_id){


$this->db->where('id', $task_id);
$this->db->delete('tasks');


}

public function mark_task_complete($task_id){


$this->db->set('status', 1);

$this->db->where('id', $task_id);
$this->db->update('tasks');

return true;

}

public function mark_task_incomplete($task_id){


$this->db->set('status', 0);

$this->db->where('id', $task_id);
$this->db->update('tasks');

return true;

}

}

?>