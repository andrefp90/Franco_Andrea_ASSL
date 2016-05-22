<?php

class Pet_model extends CI_Model {


public function get_pet($id){


$this->db->where('id', $id);
$query = $this->db->get('pets');


return $query->row();

}

public function get_pets(){

	$query = $this->db->get('pets');

	return $query->result();



}


public function get_all_pets($user_id){

$this->db->where('pet_user_id', $user_id);
$query = $this->db->get('pets');

return $query->result();




}

public function create_pet($data){

$insert_query = $this->db->insert('pets', $data);

return $insert_query;

}

public function edit_pet($pet_id, $data){

$this->db->where('id',$pet_id);
$this->db->update('pets', $data);

return true;

}


public function delete_pet($pet_id){

$this->db->where('id', $pet_id);
$this->db->delete('pets');



}

public function get_pets_info($pet_id){

$this->db->where('id',$pet_id);
$get_data = $this->db->get('pets');

return $get_data->row();
}

public function get_pet_tasks($pet_id, $active = true){

	$this->db->select('

tasks.task_name,
tasks.task_body,
tasks.id as task_id,
pets.petName,
pets.breed

		');

	$this->db->from('tasks');
	$this->db->join('pets', 'pets.id = tasks.pet_id');
	$this->db->where('tasks.pet_id', $pet_id);

	if($active == true){

$this->db->where('tasks.status',0);


	}else{
$this->db->where('tasks.status',1);

	}

	$query = $this->db->get();

	if($query->num_rows() < 1){

		return FALSE;
	}

	return $query->result();

}

public function delete_pet_tasks($pet_id){


$this->db->where('pet_id', $pet_id);

$query = $this->db->delete('tasks');

return  $query;


}


}


?>