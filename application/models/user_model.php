<?php

class User_model extends CI_Model {


	public function create_user(){

		//$options = ['cost' => 12];
		//$encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);
		

		$data = array(


			'first_name'    => $this->input->post('first_name'),
			'last_name' 	=> $this->input->post('last_name'),
			$email = 'email' => $this->input->post('email'),
			'username' 		=> $this->input->post('username'),
			'password'		=> $this->input->post('password')

			);
		$insert_data = $this->db->insert('users', $data);

		return $insert_data;
	}
	

	public function login_user($username, $password) {

		$this->db->where('username', $username);
		$this->db->where('password', $password);

		$result = $this->db->get('users');

		//$db_password = $result->row(6)->password;

		//if(password_verify($password, $db_password)){

		if($result->num_rows() == 1){
			return $result->row(0)->id;
		

		}else{

			return false;
		}
	}
}

?>