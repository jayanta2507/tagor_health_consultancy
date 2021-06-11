<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	function __construct() {
	    parent::__construct();
	    $this->load->model('admin_model');
	    $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
	}
	public function adminlogin(){
		$this->load->view('Admin/adminlogin');
	}
    
	public function submit_adminlogin(){

		//set validation rules
        $this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|sha1');

		//validate form input
        if ($this->form_validation->run() == FALSE)
        {
            $this->adminlogin();

        }else{

        	//insert the user registration details into database
            $data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );


            // insert form data into database
            if ($this->user_model->loginUser($data))
            {
                $userData = $this->user_model->get_user_details($data);
                $this->session->set_flashdata('user_id', $userData['id']);
                $this->session->set_flashdata('user_type', $userData['type']);
                 
                redirect('index.php/user_dashboard');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">You are not a valid user!</div>');
                redirect('index.php/adminlogin');
            }


        }
	}



}

