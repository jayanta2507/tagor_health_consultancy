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
                $this->session->set_flashdata('user_type', $userData['type']);
                 
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


    public function user_logout(){
        $this->session->unset_userdata('user_id'); 
        redirect('index.php/user_login');
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

    public function confirmpassword(){
        $this->load->view('User/confirmpassword');
    }


    public function submit_confirmpassword(){
        $this->load->view('User/confirmpassword');
    }
	public function forgotpassword(){
		$this->load->view('User/forgotpassword');
	}


	public function submit_forgotpassword(){
		$this->form_validation->set_rules('emailid', 'Email ID', 'trim|required|valid_email');

        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            $this->forgotpassword();

        }else{

            /*$data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );


            if ($this->user_model->loginUser($data))
            {
                $userData = $this->user_model->get_user_details($data);
                $this->session->set_flashdata('user_id', $userData['id']);
                 
                redirect('index.php/user_dashboard');
            }
            else
            {
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">You are not a valid user!</div>');
                redirect('index.php/user_login');
            }*/
        }
    }


	public function update_profile(){

        //set validation rules
        $this->form_validation->set_rules('user_name', 'Name', 'trim|required|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|min_length[10]|max_length[30]');
        //$this->form_validation->set_rules('dob', 'date of birth', 'required|date_valid');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('pincode', 'Pincode', 'trim|required');
        $this->form_validation->set_rules('city', 'City', 'trim|required');
        $this->form_validation->set_rules('state', 'State', 'trim|required');
        $this->form_validation->set_rules('country', 'Country', 'trim|required');
        $this->form_validation->set_rules('bloodgr', 'Blood Group', 'trim|required');
        //$this->form_validation->set_rules('gender', 'Gender', 'trim|required|min_length[10]|max_length[30]');



        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            $this->profile_deatails();
        }
        else
        {

            $data = array(
                'name' => $this->input->post('user_name'),
                'phone' => $this->input->post('phone'),
                'dob' => date('Y-m-d', strtotime($this->input->post('dob'))) ,
                'address' => $this->input->post('address'),
                'pincode' => $this->input->post('pincode'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'country' => $this->input->post('country'),
                'blood_group' => $this->input->post('bloodgr'),
                'gender' => $this->input->post('gender')
            );

            $updateUserData = $this->user_model->update_user_profile($data);


            if ($updateUserData)
            {
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Successfully update user profile!</div>');
                $this->profile_deatails();
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something went wrong!</div>');
                $this->profile_deatails();
            }
        }

    }


    function callback_date_valid($date){
        $day = (int) substr($date, 0, 2);
        $month = (int) substr($date, 3, 2);
        $year = (int) substr($date, 6, 4);
        return checkdate($month, $day, $year);
    }

		  
    public function user_dashboard(){

        $user_type     = $this->session->flashdata('user_type');

        //$data  = array('active_text' => "dasboard");

        $data['active_text'] = "dashboard";
        $data['user_type']   = $this->session->flashdata('user_type');

        if ($user_type==0) {
            $this->load->view('common/header',$data);
            $this->load->view('User/dashboard');
            $this->load->view('common/footer');
        }else{
            redirect('index.php/user_login');
        }  
    }


    public function profile_deatails(){
        $user_id              = $this->session->flashdata('user_id');

        if (!empty($user_id)) {

            $data['prfile_data']  = $this->user_model->get_profile_details($user_id);
            $data['active_text']  = "profile";


            $this->load->view('common/header',$data);
            $this->load->view('User/profile_details');
            $this->load->view('common/footer');
        }else{
            redirect('index.php/user_login');
        }
    }
    

    public function doctor_list(){
        $user_id             = $this->session->flashdata('user_id');

        $data['active_text'] = "doctor";
        $data['user_type']   = $this->session->flashdata('user_type');
        
        if (!empty($user_id)) {
            $this->load->view('common/header',$data);
            $this->load->view('doctors/doctor');
            $this->load->view('common/footer');
        }else{
            redirect('index.php/user_login');
        }
    }


    


    public function oxygen_list(){
        $user_id  = $this->session->flashdata('user_id');
        //echo $user_id;
        //die;
        //$userData = $this->user_model->get_user_details($data);
        
        $this->load->view('common/header');
        $this->load->view('oxygens/oxygen');
        $this->load->view('common/footer');
    }


    public function upload_image() {  

        if(isset($_FILES["image_file"]))  
        {  

            $config['upload_path']   = './assests/user_images';  
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('image_file'))  
            {  
                echo $this->upload->display_errors();  
            }  
            else  
            {  
                $data  = array('upload_data' => $this->upload->data());

                $image = $data['upload_data']['file_name']; 

                $result= $this->user_model->save_upload($image);

                echo '<img src="'.base_url().'assets/user_images/'.$image.'" width="300" height="225" class="img-thumbnail" />';  
            }  
        }  
    } 
}

