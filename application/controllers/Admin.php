<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	function __construct() {
	    parent::__construct();
	    $this->load->model('admin_model');
	    $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
        $this->session->unset_userdata('msg'); 
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

        

            // check data from database
            if ($this->admin_model->loginAdmin($data))
            {
                $adminData = $this->admin_model->getAdminData($data);


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
        $dashboardData['user_count'] = $this->admin_model->count_user();
        $dashboardData['doctor_count'] = $this->admin_model->count_doctor();
        $dashboardData['blood_count'] = $this->admin_model->count_blood();
        $dashboardData['bed_count'] = $this->admin_model->count_bed();
        $dashboardData['oxygen_count'] = $this->admin_model->count_oxygen();
        $dashboardData['vaccine_count'] = $this->admin_model->count_vaccine();
        $dashboardData['contact_count'] = $this->admin_model->count_contact();

        if ($user_type==1) {
            $this->load->view('common/header',$data);
            $this->load->view('Admin/admin_dashboard', $dashboardData);
            $this->load->view('common/footer');
        }else{
            redirect('index.php/admin_login');
        }  

    }


  
     public function admin_doctor_list(){

        $user_type     = $this->session->flashdata('user_type');

        $data['active_text'] = "doctor";
        $data['user_type']   = $this->session->flashdata('user_type');

        $doctorData['doctors'] = $this->admin_model->doctorList();

        if ($user_type==1) {
            $this->load->view('common/header',$data);
            $this->load->view('Admin/doctor/admin_doctor_list', $doctorData);
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
        //$this->form_validation->set_rules('image', 'Image', 'trim|required');
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



    public function admin_doctor_availability($doctorId){

        $user_type           = $this->session->flashdata('user_type');
        $data['active_text'] = "doctor";
        $data['user_type']   = $this->session->flashdata('user_type');

        $doctorData['doctorId'] = $doctorId;

        if ($user_type==1) {
            $this->load->view('common/header',$data);
            $this->load->view('Admin/doctor/admin_doctor_availability', $doctorData);
            $this->load->view('common/footer');
        }else{
            redirect('index.php/admin_login');
        }  

    }

    public function admin_doctor_availability_list($doctorId){

        $user_type     = $this->session->flashdata('user_type');

        $data['active_text'] = "doctor";
        $data['user_type']   = $this->session->flashdata('user_type');

        $doctoravailabilityData['doctors']       = $this->admin_model->doctoravailabilityList($doctorId);
        $doctoravailabilityData['doctors_data']  = $this->admin_model->getDoctorData($doctorId);
        $doctoravailabilityData['doctorId']      = $doctorId;

        if ($user_type==1) {
            $this->load->view('common/header',$data);
            $this->load->view('Admin/doctor/admin_doctor_availability_list', $doctoravailabilityData);
            $this->load->view('common/footer');
        }else{
            redirect('index.php/admin_login');
        }
    }


    public function admin_doctor_availability_submit(){


        //set validation rules
        $this->form_validation->set_rules('date', 'Date', 'trim|required');
        $this->form_validation->set_rules('from_time', 'From Time', 'trim|required');
        $this->form_validation->set_rules('to_time', 'To Time', 'trim|required');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');
        $doctorId = $this->input->post('doctor_id');

        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            
            $this->admin_doctor_availability($doctorId);
        }else{

            

            $data = array(
                'doctor_id'  => $this->input->post('doctor_id'),
                'date'       => $this->input->post('date'),
                'from_time'  => $this->input->post('from_time'),
                'to_time'    => $this->input->post('to_time'),
                'status'     => $this->input->post('status'),
            );
 
            $createDoctorAvailability = $this->admin_model->createDoctorAvailability($data);

            if ($createDoctorAvailability) {
                 // error
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Doctor successfully added</div>');
                redirect('index.php/admin_doctor_availability_list/'.$doctorId);
            }else{
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something went wrong!</div>');
                redirect('index.php/admin_doctor_availability/'.$doctorId);
            }

        }

    }


    public function admin_doctor_availability_edit($doctorId , $availabilityId){

        $user_type           = $this->session->flashdata('user_type');
        $data['active_text'] = "doctor";
        $data['user_type']   = $this->session->flashdata('user_type');

        $doctorData['doctorId']         = $doctorId;
        $doctorData['availabilityId']   = $availabilityId;
        $doctorData['availability']     = $this->admin_model->getDoctorAvailability($availabilityId);
 

        if ($user_type==1) {
            $this->load->view('common/header',$data);
            $this->load->view('Admin/doctor/admin_doctor_availability_edit', $doctorData);
            $this->load->view('common/footer');
        }else{
            redirect('index.php/admin_login');
        }  

    }


    public function admin_doctor_availability_edit_submit(){


        //set validation rules
        $this->form_validation->set_rules('date', 'Date', 'trim|required');
        $this->form_validation->set_rules('from_time', 'From Time', 'trim|required');
        $this->form_validation->set_rules('to_time', 'To Time', 'trim|required');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');
        echo $doctorId = $this->input->post('doctor_id');
        echo "<br>";
        echo $availabilityId = $this->input->post('availabilityId');

        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            
            $this->admin_doctor_availability_edit($doctorId , $availabilityId);
        }else{

            

            $data = array(
                'date'       => $this->input->post('date'),
                'from_time'  => $this->input->post('from_time'),
                'to_time'    => $this->input->post('to_time'),
                'status'     => $this->input->post('status'),
            );

            $updateDoctor = $this->admin_model->EditDoctorAvailability($availabilityId, $data);

            if ($updateDoctor) {
                 // error
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Doctor successfully added</div>');
                redirect('index.php/admin_doctor_availability_list/'.$doctorId);
            }else{
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something went wrong!</div>');
                redirect('index.php/admin_doctor_availability_edit'.$doctorId.'/'.$availabilityId);
            }

        }

    }

    


    public function admin_doctor_edit($doctorId){

        $user_type           = $this->session->flashdata('user_type');
        $data['active_text'] = "doctor";
        $data['user_type']   = $this->session->flashdata('user_type');
        
        $doctorData['doctor'] = $this->admin_model->editDoctor($doctorId);

        if ($user_type==1) {
            $this->load->view('common/header',$data);
            $this->load->view('Admin/doctor/admin_doctor_edit', $doctorData);
            $this->load->view('common/footer');
        }else{
            redirect('index.php/admin_login');
        }  
    }

    public function admin_doctor_edit_submit($doctorId){

        //set validation rules
        $this->form_validation->set_rules('doctor_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('specialist', 'Specialist', 'trim|required');
        $this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required|min_length[10]|max_length[30]');
        $this->form_validation->set_rules('registration_id', 'Registration Id', 'trim|required');
        //$this->form_validation->set_rules('image', 'Image', 'trim|required');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');

        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            $this->admin_doctor_edit($doctorId);
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


            $updateDoctor = $this->admin_model->updateDoctor($doctorId,$data);

            if ($updateDoctor) {
                 // error
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Doctor successfully updated</div>');
                redirect('index.php/admin_doctor_list');
            }else{
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something went wrong!</div>');
                redirect('index.php/admin_doctor_edit');
            }

        }

    }

    public function admin_doctor_delete($doctorId){
        
        $deleteDoctor = $this->admin_model->deleteDoctor($doctorId);

        if ($deleteDoctor) {
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Doctor successfully deleted</div>');
            redirect('index.php/admin_doctor_list');
        }else{
             $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something went wrong!</div>');
           redirect('index.php/admin_doctor_list');
        }  
    }

    public function admin_doctor_availability_delete($doctorId){
        
        $deleteDoctorAvailability = $this->admin_model->deleteDoctoravailability($doctorId);

        if ($deleteDoctorAvailability) {
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Doctor successfully deleted</div>');
            redirect('index.php/admin_doctor_availabilty_list');
        }else{
             $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something went wrong!</div>');
           redirect('index.php/admin_doctor_availability_list');
        }  
    }

    public function admin_doctor_appointment_list(){

        $user_type           = $this->session->flashdata('user_type');
        $user_id             = $this->session->flashdata('user_id');
        $data['active_text'] = "appointment";
        $data['user_type'] =  $user_type ;;

        $adminappointmentdata['appointment'] = $this->admin_model->getAdminAppointmentList($user_id);

        // echo "<pre>";
        // print_r($adminappointmentdata);
        // die();

        if ($user_type==1) {
            $this->load->view('common/header',$data);
            $this->load->view('Admin/doctor/admin_doctor_appointment_list',$adminappointmentdata);
            $this->load->view('common/footer');
        }else{
            redirect('index.php/admin_login');
        }  

    }

//===================  Doctor Section ==============//


 //===================  Blood Section ==============//


    public function admin_blood_list(){

        $user_type     = $this->session->flashdata('user_type');

        $data['active_text'] = "Blood";
        $data['user_type']   = $this->session->flashdata('user_type');

        $bloodData['blood'] = $this->admin_model->bloodList();

        if ($user_type==1) {
            $this->load->view('common/header',$data);
            $this->load->view('Admin/blood/admin_blood_list', $bloodData);
            $this->load->view('common/footer');
        }else{
            redirect('index.php/admin_login');
        }  

    }

    public function admin_blood_add(){

        $user_type           = $this->session->flashdata('user_type');
        $data['active_text'] = "Blood";
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

        //set validation rulesv
        $this->form_validation->set_rules('blood_group','Blood group', 'trim|required');
        $this->form_validation->set_rules('price', 'Price', 'trim|required');
        $this->form_validation->set_rules('hospital_name', 'Hospital Name', 'trim|required');
        $this->form_validation->set_rules('hospital_registration_number', 'Registration id', 'trim|required');
        $this->form_validation->set_rules('hospital_phn_no', 'Phone', 'trim|required|min_length[10]|max_length[30]');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');
        

        //validate form input
        if ($this->form_validation->run() == FALSE)
        {   
            $this->admin_blood_add();
        }else{

            $data = array(
                'blood_group'               => $this->input->post('blood_group'),
                'price'                     => $this->input->post('price'),
                'hospital_name'             => $this->input->post('hospital_name'),
                'hospital_registration_number'  => $this->input->post('hospital_registration_number'),
                'hospital_phn_no'           => $this->input->post('hospital_phn_no'),
                'status'                    => $this->input->post('status'),
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

  
    public function admin_blood_edit($bloodId){

        $user_type           = $this->session->flashdata('user_type');
        $data['active_text'] = "blood";
        $data['user_type']   = $this->session->flashdata('user_type');
        
        $bloodData['blood'] = $this->admin_model->editBlood($bloodId);

        if ($user_type==1) {
            $this->load->view('common/header',$data);
            $this->load->view('Admin/blood/admin_blood_edit', $bloodData);
            $this->load->view('common/footer');
        }else{
            redirect('index.php/admin_login');
        }  
    }

   public function admin_blood_edit_submit($bloodId){


         //set validation rulesv
        $this->form_validation->set_rules('blood_group','Blood group', 'trim|required');
        $this->form_validation->set_rules('price', 'Price', 'trim|required');
        $this->form_validation->set_rules('hospital_name', 'Hospital Name', 'trim|required');
        $this->form_validation->set_rules('hospital_registration_number', 'Registration id', 'trim|required');
        $this->form_validation->set_rules('hospital_phn_no', 'Phone', 'trim|required|min_length[10]|max_length[30]');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');
        

        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            $this->admin_blood_edit($bloodId);
        }else{

            $data = array(
                'blood_group'               => $this->input->post('blood_group'),
                'price'                     => $this->input->post('price'),
                'hospital_name'             => $this->input->post('hospital_name'),
                'hospital_registration_number'  => $this->input->post('hospital_registration_number'),
                'hospital_phn_no'           => $this->input->post('hospital_phn_no'),
                'status'                    => $this->input->post('status'),
            );
             
            $updateBlood = $this->admin_model->updateBlood($bloodId,$data);

            if ($updateBlood) {
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Blood successfully updated</div>');
                redirect('index.php/admin_blood_list');
            }else{
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something went wrong!</div>');
                redirect('index.php/admin_blood_edit');
            }
        }
    }


    public function admin_blood_delete($bloodId){
        
        $deleteblood = $this->admin_model->deleteBlood($bloodId);

        if ($deleteblood) {
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Bed successfully deleted</div>');
            redirect('index.php/admin_blood_list');
        }else{
             $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something went wrong!</div>');
           redirect('index.php/admin_blood_list');
        }  
    }





    public function admin_bed_list(){

        $user_type     = $this->session->flashdata('user_type');

        $data['active_text'] = "Bed";
        $data['user_type']   = $this->session->flashdata('user_type');

        $bedData['bed'] = $this->admin_model->bedList();

        if ($user_type==1) {
            $this->load->view('common/header',$data);
            $this->load->view('Admin/bed/admin_bed_list',$bedData);
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
        $this->form_validation->set_rules('bed_types','Types of Bed', 'trim|required');
        $this->form_validation->set_rules('rent', 'Rents', 'trim|required');
        $this->form_validation->set_rules('hospital_name', 'Hospital Name', 'trim|required');
        $this->form_validation->set_rules('hospital_registration_id', 'RegistrationID', 'trim|required');
        $this->form_validation->set_rules('hospital_phn_no', 'Phone', 'trim|required|min_length[10]|max_length[30]');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');

        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            $this->admin_bed_add();
        }else{

        
            $data = array(
                'bed_types'             => $this->input->post('bed_types'),
                'rent'                  => $this->input->post('rent'),
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

    public function admin_bed_edit($bedId){

        $user_type           = $this->session->flashdata('user_type');
        $data['active_text'] = "bed";
        $data['user_type']   = $this->session->flashdata('user_type');
        
        $bedData['bed'] = $this->admin_model->editBed($bedId);

        if ($user_type==1) {
            $this->load->view('common/header',$data);
            $this->load->view('Admin/bed/admin_bed_edit', $bedData);
            $this->load->view('common/footer');
        }else{
            redirect('index.php/admin_login');
        }  
    }

    public function admin_bed_edit_submit($bedId){


        //set validation rules
        $this->form_validation->set_rules('bed_types','Types of Bed', 'trim|required');
        $this->form_validation->set_rules('rent', 'Rents', 'trim|required');
        $this->form_validation->set_rules('hospital_name', 'Hospital Name', 'trim|required');
        $this->form_validation->set_rules('hospital_registration_id', 'RegistrationID', 'trim|required');
        $this->form_validation->set_rules('hospital_phn_no','Phone','trim|required|min_length[10]|max_length[30]');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');

        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            $this->admin_bed_edit($bedId);
        }else{

        
            $data = array(
                'bed_types'             => $this->input->post('bed_types'),
                'rent'                  => $this->input->post('rent'),
                'hospital_name'         => $this->input->post('hospital_name'),
                'hospital_registration_id'  => $this->input->post('hospital_registration_id'),
                'hospital_phn_no'       => $this->input->post('hospital_phn_no'),
                'status'                => $this->input->post('status'),
            );


            $updateBed = $this->admin_model->updateBed($bedId,$data);
             

            if ($updateBed) {
                 // error
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Beds successfully updated</div>');
                redirect('index.php/admin_bed_list');
            }else{
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something went wrong!</div>');
                redirect('index.php/admin_bed_edit');
            }

        }
    }

    public function admin_bed_delete($bedId){
        
        $deleteBed = $this->admin_model->deleteBed($bedId);

        if ($deleteBed) {
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Bed successfully deleted</div>');
            redirect('index.php/admin_bed_list');
        }else{
             $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something went wrong!</div>');
           redirect('index.php/admin_bed_list');
        }  
    }



    public function admin_oxygen_list(){

        $user_type     = $this->session->flashdata('user_type');

        $data['active_text'] = "Oxygen";
        $data['user_type']   = $this->session->flashdata('user_type');

        $oxygenData['oxygen'] = $this->admin_model->oxygenList();

        if ($user_type==1) {
            $this->load->view('common/header',$data);
            $this->load->view('Admin/oxygen/admin_oxygen_list',$oxygenData);
            $this->load->view('common/footer');
        }else{
            redirect('index.php/admin_login');
        }  

    }


    public function admin_oxygen_add(){

        $user_type           = $this->session->flashdata('user_type');
        $data['active_text'] = "oxygen";
        $data['user_type']   = $this->session->flashdata('user_type');

        

        if ($user_type==1) {
            $this->load->view('common/header',$data);
            $this->load->view('Admin/oxygen/admin_oxygen_add');
            $this->load->view('common/footer');
        }else{
            redirect('index.php/admin_login');
        }  

    }

    public function admin_oxygen_submit(){


        //set validation rules
        $this->form_validation->set_rules('oxygen_type','Types of Oxygen', 'trim|required');
        $this->form_validation->set_rules('oxygen_refilling', 'Refilling', 'trim|required');
        $this->form_validation->set_rules('rent', 'Rents', 'trim|required');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');

        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            $this->admin_oxygen_add();
        }else{

            $data = array(
                'oxygen_type'           => $this->input->post('oxygen_type'),
                'oxygen_refilling'      => $this->input->post('oxygen_refilling'),
                'rent'                  => $this->input->post('rent'),
                'status'                => $this->input->post('status'),
            );


            $createOxygen = $this->admin_model->createOxygen($data);

            if ($createOxygen) {
                 // error
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Oxygen successfully added</div>');
                redirect('index.php/admin_oxygen_list');
            }else{
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something went wrong!</div>');
                redirect('index.php/admin_oxygen_add');
            }

        }
    }


    public function admin_oxygen_edit($oxygenId){

        $user_type           = $this->session->flashdata('user_type');
        $data['active_text'] = "oxygen";
        $data['user_type']   = $this->session->flashdata('user_type');
        
        $oxygenData['oxygen'] = $this->admin_model->editOxygen($oxygenId);

        if ($user_type==1) {
            $this->load->view('common/header',$data);
            $this->load->view('Admin/oxygen/admin_oxygen_edit', $oxygenData);
            $this->load->view('common/footer');
        }else{
            redirect('index.php/admin_login');
        }  
    }

    public function admin_oxygen_edit_submit($oxygenId){


        //set validation rules
        $this->form_validation->set_rules('oxygen_type','Types of Oxygen', 'trim|required');
        $this->form_validation->set_rules('oxygen_refilling', 'Refilling', 'trim|required');
        $this->form_validation->set_rules('rent', 'Rents', 'trim|required');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');

        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            $this->admin_oxygen_edit($oxygenId);
        }else{

            $data = array(
                'oxygen_type'           => $this->input->post('oxygen_type'),
                'oxygen_refilling'      => $this->input->post('oxygen_refilling'),
                'rent'                  => $this->input->post('rent'),
                'status'                => $this->input->post('status'),
            );


            $updateOxygen = $this->admin_model->updateOxygen($oxygenId,$data);

            if ($updateOxygen) {
                 // error
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Oxygen successfully updated</div>');
                redirect('index.php/admin_oxygen_list');
            }else{
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something went wrong!</div>');
                redirect('index.php/admin_oxygen_edit/'.$oxygenId);
            }

        }

    }


    public function admin_oxygen_delete($oxygenId){
        
        $deleteOxygen = $this->admin_model->deleteOxygen($oxygenId);

        if ($deleteOxygen) {
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Oxygen successfully deleted</div>');
            redirect('index.php/admin_oxygen_list');
        }else{
             $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something went wrong!</div>');
           redirect('index.php/admin_oxygen_list');
        }  
    }



// **************************VACCINE PART*******************************//


    public function admin_vaccine_list(){

        $user_type     = $this->session->flashdata('user_type');

        $data['active_text'] = "Vaccine";
        $data['user_type']   = $this->session->flashdata('user_type');
        $vaccineData['vaccines'] = $this->admin_model->vaccineList();


        if ($user_type==1) {
            $this->load->view('common/header',$data);
            $this->load->view('Admin/vaccine/admin_vaccine_list', $vaccineData);
            $this->load->view('common/footer');
        }else{
            redirect('index.php/admin_login');
        }  

    }


    public function admin_vaccine_add(){

        $user_type           = $this->session->flashdata('user_type');
        $data['active_text'] = "vaccine";
        $data['user_type']   = $this->session->flashdata('user_type');

        

        if ($user_type==1) {
            $this->load->view('common/header',$data);
            $this->load->view('Admin/vaccine/admin_vaccine_add');
            $this->load->view('common/footer');
        }else{
            redirect('index.php/admin_login');
        }  

    }
    

    


    public function admin_vaccine_submit(){


        //set validation rules
        $this->form_validation->set_rules('vaccine_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('vaccine_types','Types', 'trim|required');
        $this->form_validation->set_rules('dose_date', 'Date', 'trim|required');
        $this->form_validation->set_rules('center', 'Center', 'trim|required');
        $this->form_validation->set_rules('price', 'Price', 'trim|required');
        $this->form_validation->set_rules('phone_no', 'Phone', 'trim|required|min_length[10]|max_length[30]');
        $this->form_validation->set_rules('email_id', 'Email', 'trim|required');
        $this->form_validation->set_rules('age', 'Age', 'trim|required');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');


        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            $this->admin_vaccine_add();
        }else{

           
            $data = array(
                'vaccine_name'            => $this->input->post('vaccine_name'),
                'vaccine_types'           => $this->input->post('vaccine_types'),
                'dose_date'               => date('Y-m-d', strtotime($this->input->post('dose_date'))) ,
                'center'                  => $this->input->post('center'),
                'price'                   => $this->input->post('price'),
                'phone_no'                => $this->input->post('phone_no'),
                'email_id'                => $this->input->post('email_id'),
                'age'                     => $this->input->post('age'),
                'status'                  => $this->input->post('status'),
            );
            //  echo "<pre>";
            // print_r($data);
            // echo "</pre>";
            // die();


            $createVaccine = $this->admin_model->createVaccine($data);

            if ($createVaccine) {
                 // error
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Vaccine successfully added</div>');
                redirect('index.php/admin_vaccine_list');
            }else{
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something went wrong!</div>');
                redirect('index.php/admin_vaccine_add');
            }

        }

    }

    public function admin_vaccine_edit($vaccineId){

        $user_type           = $this->session->flashdata('user_type');
        $data['active_text'] = "vaccine";
        $data['user_type']   = $this->session->flashdata('user_type');
        
        $vaccineData['vaccine'] = $this->admin_model->editVaccine($vaccineId);

        if ($user_type==1) {
            $this->load->view('common/header',$data);
            $this->load->view('Admin/vaccine/admin_vaccine_edit', $vaccineData);
            $this->load->view('common/footer');
        }else{
            redirect('index.php/admin_login');
        }  
    }

    public function admin_vaccine_edit_submit($vaccineId){


        //set validation rules
        $this->form_validation->set_rules('vaccine_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('vaccine_types','Types', 'trim|required');
        $this->form_validation->set_rules('dose_date', 'Date', 'trim|required');
        $this->form_validation->set_rules('center', 'Center', 'trim|required');
        $this->form_validation->set_rules('price', 'Price', 'trim|required');
        $this->form_validation->set_rules('phone_no', 'Phone', 'trim|required|min_length[10]|max_length[30]');
        $this->form_validation->set_rules('email_id', 'Email', 'trim|required');
        $this->form_validation->set_rules('age', 'Age', 'trim|required');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');


        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            $this->admin_vaccine_edit($vaccineId);
        }else{

           
            $data = array(
                'vaccine_name'            => $this->input->post('vaccine_name'),
                'vaccine_types'           => $this->input->post('vaccine_types'),
                'dose_date'               => date('Y-m-d', strtotime($this->input->post('dose_date'))) ,
                'center'                  => $this->input->post('center'),
                'price'                   => $this->input->post('price'),
                'phone_no'                => $this->input->post('phone_no'),
                'email_id'                => $this->input->post('email_id'),
                'age'                     => $this->input->post('age'),
                'status'                  => $this->input->post('status'),
            );
            //  echo "<pre>";
            // print_r($data);
            // echo "</pre>";
            // die();


            $updateVaccine = $this->admin_model->updateVaccine($vaccineId,$data);

            if ($updateVaccine) {
                 // error
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Vaccine successfully updated</div>');
                redirect('index.php/admin_vaccine_list');
            }else{
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something went wrong!</div>');
                redirect('index.php/admin_vaccine_edit',$vaccineId);
            }

        }

    }

    public function admin_vaccine_delete($vaccineId){
        
        $deleteVaccine = $this->admin_model->deleteVaccine($vaccineId);

        if ($deleteVaccine) {
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Vaccine successfully deleted</div>');
            redirect('index.php/admin_vaccine_list');
        }else{
             $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something went wrong!</div>');
           redirect('index.php/admin_vaccine_list');
        }  
    }

    public function admin_user_list(){

        $user_type     = $this->session->flashdata('user_type');

        $data['active_text'] = "users";
        $data['user_type']   = $this->session->flashdata('user_type');

        $userData['users'] = $this->admin_model->userList();

        if ($user_type==1) {
            $this->load->view('common/header',$data);
            $this->load->view('Admin/admin_user_list', $userData);
            $this->load->view('common/footer');
        }else{
            redirect('index.php/admin_login');
        }  

    }

    public function admin_contact_list(){

        $user_type           = $this->session->flashdata('user_type');

        $data['active_text'] = "contact";
        $data['user_type'] =  $user_type ;;

        $contactdata['contact'] = $this->admin_model->contactList();

        // echo "<pre>";
        // print_r($adminappointmentdata);
        // die();

        if ($user_type==1) {
            $this->load->view('common/header',$data);
            $this->load->view('Admin/contact/admin_contact_list',$contactdata);
            $this->load->view('common/footer');
        }else{
            redirect('index.php/admin_login');
        }  

    }


}
