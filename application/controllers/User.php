<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	function __construct() {
	    parent::__construct();
	    $this->load->model('user_model');
	    $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
        //$this->load->database();
	}

	public function index()
	{
		//$this->load->view('welcome_message');
	}

	public function registration(){
		$this->load->view('User/registration');
	}

	public function login(){
		$this->load->view('User/login');
	}


	public function submit_login(){

		//set validation rules
        $this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email');
		$this->form_validation->set_rules('login_password', 'Password', 'trim|required|sha1');

		//validate form input
        if ($this->form_validation->run() == FALSE)
        {
            $this->login();

        }else{

        	//insert the user registration details into database
            $data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('login_password')
            );


            // insert form data into database
            if ($this->user_model->loginUser($data))
            {
                $userData = $this->user_model->get_user_details($data);
                $this->session->set_flashdata('user_id', $userData['id']);
                 
                redirect('index.php/user_dashboard');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">You are not a valid user!</div>');
                redirect('index.php/user_login');
            }


        }
	}

	public function submit_registration(){
		
		//set validation rules
        $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]|max_length[30]');

        $this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|is_unique[users.email]');

        $this->form_validation->set_rules('password', 'Password', 'trim|required|sha1');

        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]|sha1');



        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            $this->login();
        }
        else
        {
            //insert the user registration details into database
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );
            
           /* echo "<pre>";
            print_r($data);
            die();*/

            // insert form data into database
            if ($this->user_model->insertUser($data))
            {
                // successfully sent mail
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered!</div>');
                    redirect('index.php/user_login');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                redirect('index.php/user_registration');
            }
        }




		//$this->user_model->user_registration($data);
	}

	public function home(){
		$this->load->view('User/home');
	}


	public function submit_home(){
		$this->load->view('User/home');
	}


	public function forgotpassword(){
		$this->load->view('User/forgotpassword');
	}


	public function submit_forgotpassword(){
		$this->load->view('User/forgotpassword');
	}


	public function profile_details(){
		$this->load->view('User/profile_details');
	}


	public function submit_profile_details(){
		$this->load->view('User/profile_details');
	}

    public function user_dashboard(){

        $user_id = $this->session->flashdata('user_id');


        //echo $user_id;

        //die;

        if (!empty($user_id)) {
            $this->load->view('common/header');
            $this->load->view('User/dasboard');
            $this->load->view('common/footer');
        }else{
            redirect('index.php/user_login');
        }
        
    }


    public function user_logout(){
        //$this->session->unset_userdata('user_id'); 
        redirect('index.php/user_login');
    }

    public function doctor_list(){
        $user_id = $this->session->flashdata('user_id');
        //echo $user_id;

        //die;
        $this->load->view('common/header');
        $this->load->view('doctors/doctor');
        $this->load->view('common/footer');
    }
}
