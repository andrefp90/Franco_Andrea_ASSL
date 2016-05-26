<?php

class Email extends CI_Controller {

	function __construct() { 
        parent::__construct(); 
       
      } 


 public function send(){

 	// Setup mail account configuration 

	$config = Array(

		'protocol' => 'smtp',
		'smtp_host' => 'ssl://smtp.googlemail.com',
		'smtp_port' => 465,
		'smtp_user' => 'pettrack0@gmail.com',
		'smtp_pass' => 'mikaela90'
		);


//Validate e-mail setting rules for trim required and valid 
$this->form_validation->set_rules('email','Email Address','trim|required|valid_email');

// If the validation returns false load main_view and mail view 
if($this->form_validation->run()== FALSE){

	$data['main_view'] = 'mail';

	$this->load->view('layouts/main', $data);

//else send email to the email entered with message and attachment 
}else{

	$email = $this->input->post('email');


	$this->load->view('mail');

	$this->load->library('email', $config);

	$this->email->set_newline("\r\n");

	$this->email->from('pettrack0@gmail.com', 'PetTrack');
	
	$this->email->to ($email);

	$this->email->subject("PetTrack Newsletter");

	$this->email->message("Hello here is this weeks newsletter about raw feeding");

	$path = $this->config->item('server_root');

	$file = $path . '/ci/attachments/newsletter.jpg';

	$this->email->attach($file);

	if($this->email->send()){



	$this->session->set_flashdata('send', 'Your Newsletter was sent !!');

				redirect('home/index');
	}else{

		redirect('home/index');
	}

	}
}
}


