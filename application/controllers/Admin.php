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
        $this->form_validation->set_rules('admin_email', 'Email ID', 'trim|required|valid_email');
		$this->form_validation->set_rules('admin_password', 'Password', 'trim|required|sha1');

		//validate form input
        if ($this->form_validation->run() == FALSE)
        {
            $this->adminlogin();
        }else{

        	//insert the user registration details into database
            $data = array(
                'email' => $this->input->post('admin_email'),
                'password' => $this->input->post('admin_password')
            );

            /*echo "<pre>";
            print_r($data);
            echo "</pre>";
            die();*/


            // check data from database
            if ($this->admin_model->loginAdmin($data))
            {
                $adminData = $this->admin_model->getAdminData($data);


               /* echo "<pre>";
                print_r($adminData);
                echo "</pre>";
                die();*/

                $this->session->set_flashdata('user_id', $adminData['id']);
                $this->session->set_flashdata('user_type', $adminData['type']);
                 
                redirect('index.php/admin_dashboard');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">You are not a valid admin!</div>');
                redirect('index.php/admin_login');
            }


        }
	}


    public function admin_dashboard(){

        $user_id     = $this->session->flashdata('user_id');

        $data['active_text'] = "dashboard";
        $data['user_type']   = $this->session->flashdata('user_type');

        if (!empty($user_id)) {
            $this->load->view('common/header',$data);
            $this->load->view('Admin/admin_dashboard');
            $this->load->view('common/footer');
        }else{
            redirect('index.php/admin_login');
        }  

    }



}

