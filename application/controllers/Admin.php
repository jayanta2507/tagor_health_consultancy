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

        $user_type     = $this->session->flashdata('user_type');

        $data['active_text'] = "dashboard";
        $data['user_type']   = $this->session->flashdata('user_type');

        if ($user_type==1) {
            $this->load->view('common/header',$data);
            $this->load->view('Admin/admin_dashboard');
            $this->load->view('common/footer');
        }else{
            redirect('index.php/admin_login');
        }  

    }


  
     public function admin_doctor_list(){

        $user_type     = $this->session->flashdata('user_type');

        $data['active_text'] = "doctor";
        $data['user_type']   = $this->session->flashdata('user_type');

        if ($user_type==1) {
            $this->load->view('common/header',$data);
            $this->load->view('Admin/doctor/admin_doctor_list');
            $this->load->view('common/footer');
        }else{
            redirect('index.php/admin_login');
        }  

    }


    public function admin_doctor_add(){

        $user_type           = $this->session->flashdata('user_type');
        $data['active_text'] = "doctor";
        $data['user_type']   = $this->session->flashdata('user_type');

        

        if ($user_type==1) {
            $this->load->view('common/header',$data);
            $this->load->view('Admin/doctor/admin_doctor_add');
            $this->load->view('common/footer');
        }else{
            redirect('index.php/admin_login');
        }  

    }


    public function admin_doctor_submit(){


        //set validation rules
        $this->form_validation->set_rules('doctor_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('specialist', 'Specialist', 'trim|required');
        $this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required|min_length[10]|max_length[30]');
        $this->form_validation->set_rules('registration_id', 'Registration Id', 'trim|required');
        $this->form_validation->set_rules('image', 'Image', 'trim|required');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');

        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            $this->admin_doctor_add();
        }else{

            if(isset($_FILES["image"]))  
            {  

                $config['upload_path']   = './assests/doctor_image';  
                $config['allowed_types'] = 'jpg|jpeg|png|gif'; 

                $this->load->library('upload', $config);

                if(!$this->upload->do_upload('image'))  
                {  
                    echo $this->upload->display_errors();  
                }  
                else  
                {  
                    $data  = array('upload_data' => $this->upload->data());

                    $image = $data['upload_data']['file_name'];                     
                }  
            }else{
                $image = "";
            }  


            $data = array(
                'name'              => $this->input->post('doctor_name'),
                'specialist'        => $this->input->post('specialist'),
                'email'             => $this->input->post('email'),
                'phone'             => $this->input->post('phone'),
                'registration_id'   => $this->input->post('registration_id'),
                'image'             => $image,
                'status'            => $this->input->post('status'),
            );


            $createDoctor = $this->admin_model->createDoctor($data);

            if ($createDoctor) {
                 // error
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Doctor successfully added</div>');
                redirect('index.php/admin_doctor_list');
            }else{
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something went wrong!</div>');
                redirect('index.php/admin_doctor_add');
            }

        }

    }
    public function admin_blood_list(){

        $user_type     = $this->session->flashdata('user_type');

        $data['active_text'] = "Blood";
        $data['user_type']   = $this->session->flashdata('user_type');

        if ($user_type==1) {
            $this->load->view('common/header',$data);
            $this->load->view('Admin/blood/admin_blood_list');
            $this->load->view('common/footer');
        }else{
            redirect('index.php/admin_login');
        }  

    }

    public function admin_blood_add(){

        $user_type           = $this->session->flashdata('user_type');
        $data['active_text'] = "blood";
        $data['user_type']   = $this->session->flashdata('user_type');

        

        if ($user_type==1) {
            $this->load->view('common/header',$data);
            $this->load->view('Admin/blood/admin_blood_add');
            $this->load->view('common/footer');
        }else{
            redirect('index.php/admin_login');
        }  

    }

    public function admin_blood_submit(){


        //set validation rules
        $this->form_validation->set_rules('blood_no', 'Id', 'trim|required');
        $this->form_validation->set_rules('blood_gr','Types_Blood', 'trim|required');
        $this->form_validation->set_rules('Rent', 'Rents', 'trim|required|');
        $this->form_validation->set_rules('hospital_name', 'Hos_Name', 'trim|required|');
        $this->form_validation->set_rules('hospital_registration_id', 'RegistrationID', 'trim|required');
        $this->form_validation->set_rules('hospital_phn_no', 'Phone', 'trim|required|min_length[10]|max_length[30]');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');
        

        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            $this->admin_blood_add();
        }else{

            if(isset($_FILES["image"]))  
            {  

                $config['upload_path']   = './assests/doctor_image';  
                $config['allowed_types'] = 'jpg|jpeg|png|gif'; 

                $this->load->library('upload', $config);

                if(!$this->upload->do_upload('image'))  
                {  
                    echo $this->upload->display_errors();  
                }  
                else  
                {  
                    $data  = array('upload_data' => $this->upload->data());

                    $image = $data['upload_data']['file_name'];                     
                }  
            }else{
                $image = "";
            }  


            $data = array(
                'Id'                    => $this->input->post('blood_no'),
                'blood_gr'             => $this->input->post('blood_gr'),
                'Rent'                  => $this->input->post('Rent'),
                'hospital_name'         => $this->input->post('hospital_name'),
            'hospital_registration_id'  => $this->input->post('hospital_registration_id'),
                'hospital_phn_no'       => $this->input->post('hospital_phn_no'),
                'status'                => $this->input->post('status'),
            );
             


            $createBlood = $this->admin_model->createBlood($data);

            if ($createBlood) {
                 // error
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Blood successfully added</div>');
                redirect('index.php/admin_blood_list');
            }else{
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something went wrong!</div>');
                redirect('index.php/admin_blood_add');
            }

        }

    }


    


    public function admin_bed_list(){

        $user_type     = $this->session->flashdata('user_type');

        $data['active_text'] = "Bed";
        $data['user_type']   = $this->session->flashdata('user_type');

        if ($user_type==1) {
            $this->load->view('common/header',$data);
            $this->load->view('Admin/bed/admin_bed_list');
            $this->load->view('common/footer');
        }else{
            redirect('index.php/admin_login');
        }  

    }

    public function admin_bed_add(){

        $user_type           = $this->session->flashdata('user_type');
        $data['active_text'] = "bed";
        $data['user_type']   = $this->session->flashdata('user_type');

        

        if ($user_type==1) {
            $this->load->view('common/header',$data);
            $this->load->view('Admin/bed/admin_bed_add');
            $this->load->view('common/footer');
        }else{
            redirect('index.php/admin_login');
        }  

    }

    public function admin_bed_submit(){


        //set validation rules
        $this->form_validation->set_rules('bed_no', 'Id', 'trim|required');
        $this->form_validation->set_rules('bed_types','Types_Bed', 'trim|required');
        $this->form_validation->set_rules('Rent', 'Rents', 'trim|required|');
        $this->form_validation->set_rules('hospital_name', 'Hos_Name', 'trim|required|');
        $this->form_validation->set_rules('hospital_registration_id', 'RegistrationID', 'trim|required');
        $this->form_validation->set_rules('hospital_phn_no', 'Phone', 'trim|required|min_length[10]|max_length[30]');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');

        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            $this->admin_doctor_add();
        }else{

            if(isset($_FILES["image"]))  
            {  

                $config['upload_path']   = './assests/doctor_image';  
                $config['allowed_types'] = 'jpg|jpeg|png|gif'; 

                $this->load->library('upload', $config);

                if(!$this->upload->do_upload('image'))  
                {  
                    echo $this->upload->display_errors();  
                }  
                else  
                {  
                    $data  = array('upload_data' => $this->upload->data());

                    $image = $data['upload_data']['file_name'];                     
                }  
            }else{
                $image = "";
            }  


            $data = array(
                'Id'                    => $this->input->post('bed_no'),
                'bed_types'             => $this->input->post('bed_types'),
                'Rent'                  => $this->input->post('Rent'),
                'hospital_name'         => $this->input->post('hospital_name'),
            'hospital_registration_id'  => $this->input->post('hospital_registration_id'),
                'hospital_phn_no'       => $this->input->post('hospital_phn_no'),
                'status'                => $this->input->post('status'),
            );


            $createBed = $this->admin_model->createBed($data);

            if ($createBed) {
                 // error
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Beds successfully added</div>');
                redirect('index.php/admin_bed_list');
            }else{
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something went wrong!</div>');
                redirect('index.php/admin_bed_add');
            }

        }

    }


    



}

