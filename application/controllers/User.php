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



	public function login(){
		$this->load->view('home/login');
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
    }


    public function home(){
        $this->load->view('home/home');
    }

    public function user_about(){
        $this->load->view('home/about_us');
    }

    public function user_services(){
        $this->load->view('home/services/services');
    }

    public function vaccine(){
        $this->load->view('home/services/vaccine');
    }

    public function oxygen(){
        $this->load->view('home/services/oxygen');
    }

    public function blood(){
        $this->load->view('home/services/blood');
    }

    public function doctor(){
        $this->load->view('home/services/doctor');
    }

    
    public function facility(){
        $this->load->view('home/facility');
    }

    

    public function contact_form(){
        $this->load->view('home/contact_form');
    }
    

    public function submit_contact_form(){

        //set validation rules
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email_id', 'Email ID', 'trim|required|valid_email');
        $this->form_validation->set_rules('phone_no', 'Phone No', 'trim|required|min_length[10]|max_length[30]');
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required|valid_subject');
        $this->form_validation->set_rules('message_box', 'Message Box', 'trim|required');

        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            $this->contact();

        }else{

            //insert the user registration details into database
            $data = array(
                'name'        => $this->input->post('name'),
                'email_id'    => $this->input->post('email_id'),
                'phone_no'    => $this->input->post('phone_no'),
                'subject'     => $this->input->post('subject'),
                'message_box' => $this->input->post('message_box'),
            );
            

            // insert form data into database
            if ($this->user_model->contact_form($data))
            {
                $contactformData = $this->user_model->get_contact_form($data);
                $this->session->set_flashdata('contact_us', $contactformData['id']);
                $this->session->set_flashdata('user_type', $userData['type']);
                 
                redirect('index.php/user_contact');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">You have successfully submitted!</div>');
                redirect('index.php/user_home');
            }


        }
    }   


    public function forgotpassword(){
        $this->load->view('home/forgotpassword');
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
    
    public function confirmpassword(){
        $this->load->view('home/confirmpassword');
    }


    public function submit_confirmpassword(){
        $this->load->view('home/confirmpassword');
    }


    public function user_dashboard(){

        $user_type     = $this->session->flashdata('user_type');

        $data['active_text'] = "dashboard";
        $data['user_type']   = $this->session->flashdata('user_type');
        $dashboardData['doctor_count'] = $this->user_model->count_doctor();
        $dashboardData['blood_count'] = $this->user_model->count_blood();
        $dashboardData['bed_count'] = $this->user_model->count_bed();
        $dashboardData['oxygen_count'] = $this->user_model->count_oxygen();
        $dashboardData['vaccine_count'] = $this->user_model->count_vaccine();

        if ($user_type==0) {
            $this->load->view('common/header',$data);
            $this->load->view('User/dashboard',$dashboardData);
            $this->load->view('common/footer');
        }else{
            redirect('index.php/user_login');
        }  
    }

    
    public function profile_deatails(){
        $user_id              = $this->session->flashdata('user_id');

        if (!empty($user_id)) {

            $data['prfile_data']  = $this->user_model->get_profile_details($user_id);
            $data['user_type']    = $this->session->flashdata('user_type');
            $data['active_text']  = "profile";


            $this->load->view('common/header',$data);
            $this->load->view('User/profile_details');
            $this->load->view('common/footer');
        }else{
            redirect('index.php/user_login');
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

	//==================== Doctor ==============================
    public function doctor_list(){
        $user_id             = $this->session->flashdata('user_id');

        $data['active_text'] = "doctor";
        $data['user_type']   = $this->session->flashdata('user_type');


        $doctorData['doctors'] = $this->user_model->doctorList();
        
        if (!empty($user_id)) {
            $this->load->view('common/header', $data);
            $this->load->view('User/doctors/doctor', $doctorData);
            $this->load->view('common/footer');
        }else{
            redirect('index.php/user_login');
        }
    }


     public function doctor_form($doctorId){
        $user_id    = $this->session->flashdata('user_id');
        $user_type  = $this->session->flashdata('user_type');

        if ($user_type==0) {

            $data['doctor_availability'] = $this->user_model->doctoravailabilityList($doctorId);
            $data['user_type']           = $this->session->flashdata('user_type');
            $data['active_text']         = "doctor";
            $data['doctorId']            = $doctorId;



            $this->load->view('common/header',$data);
            $this->load->view('User/doctors/doctor_form');
            $this->load->view('common/footer');
        
        }else{
            redirect('index.php/user_login');
        }
    }


    public function submit_doctor_form($doctorId){

        $user_id = $this->session->flashdata('user_id');

        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('phone_no', 'Phone Number', 'trim|required|min_length[10]|max_length[30]');
        $this->form_validation->set_rules('age', 'Age', 'trim|required');
        $this->form_validation->set_rules('diagnosis', 'Diagnosis', 'trim|required');
        $this->form_validation->set_rules('doctor_availability', 'Doctor Availability', 'trim|required');


        
        if ($this->form_validation->run() == FALSE)
        {
            $this->doctor_form($doctorId);

        }else{

            $data = array(
                'userid'    => $user_id,
                'name'      => $this->input->post('name'),
                'phone'     => $this->input->post('phone_no'),
                'age'       => $this->input->post('age'),
                'diagnosis' => $this->input->post('diagnosis'),
                'availability_id' => $this->input->post('doctor_availability'),
            );

            $insertAppointment = $this->user_model->saveAppointment($data);

            if ($insertAppointment) {
                redirect('index.php/doctor_list');
            }else{
                redirect('index.php/doctor_form/'.$doctorId);
            }
        }
    }


    public function doctor_appointment_list(){

        $user_type           = $this->session->flashdata('user_type');
        $user_id             = $this->session->flashdata('user_id');
        $data['active_text'] = "appointment";
        $data['user_type'] =  $user_type ;

        $appointmentdata['appointment'] = $this->user_model->getAppointmentList($user_id);

        // echo "<pre>";
        // print_r($appointmentdata);
        // die();

        if ($user_type==0) {
            $this->load->view('common/header',$data);
            $this->load->view('User/doctors/doctor_appointment_list',$appointmentdata);
            $this->load->view('common/footer');
        }else{
            redirect('index.php/user_login');
        }  

    }
    //==================== Doctor ==============================




    //==================== Blood ==============================
    public function blood_list(){
        $user_id             = $this->session->flashdata('user_id');
        $user_type           = $this->session->flashdata('user_type');

        $data['active_text'] = "blood";
        $data['user_type']   = $this->session->flashdata('user_type');

        $bloodData['blood'] = $this->user_model->bloodList();

        if (!empty($user_id)) {
            $this->load->view('common/header',$data);
            $this->load->view('User/blood/blood_list',$bloodData);
            $this->load->view('common/footer');
           
        }else{
            redirect('index.php/user_login');
        }  

    }
    //==================== Blood ==============================



    
    //==================== Bed ==============================
    public function bed_list(){
        $user_id             = $this->session->flashdata('user_id');
        $user_type           = $this->session->flashdata('user_type');

        $data['active_text'] = "bed";
        $data['user_type']   = $this->session->flashdata('user_type');

        $bedData['bed'] = $this->user_model->bedList();

        if (!empty($user_id)) {
            $this->load->view('common/header', $data);
            $this->load->view('User/bed/bed_list', $bedData);
            $this->load->view('common/footer');
           
        }else{
            redirect('index.php/user_login');
        }  

    }
    //==================== Bed ==============================




    //==================== Oxygen ==============================
    public function oxygen_list(){
        $user_id             = $this->session->flashdata('user_id');
        $user_type           = $this->session->flashdata('user_type');

        $data['active_text'] = "oxygen";
        $data['user_type']   = $this->session->flashdata('user_type');

        $oxygenData['oxygen'] = $this->user_model->oxygenList();

        if (!empty($user_id)) {
            $this->load->view('common/header',$data);
            $this->load->view('User/oxygen/oxygen_list',$oxygenData);
            $this->load->view('common/footer');
           
        }else{
            redirect('index.php/user_login');
        }  

    }
    //==================== Oxygen ==============================




    //==================== Vaccine ==============================

    public function vaccine_list(){
        $user_id             = $this->session->flashdata('user_id');

        $user_type     = $this->session->flashdata('user_type');

        $data['active_text'] = "vaccine";
        $data['user_type']   = $this->session->flashdata('user_type');
        $vaccineData['vaccine'] = $this->user_model->vaccineList();
        

        if (!empty($user_id)) {
            $this->load->view('common/header',$data);
            $this->load->view('User/vaccine/vaccine_list',$vaccineData);
            $this->load->view('common/footer');
           
        }else{
            redirect('index.php/user_login');
        }  

    }
    //==================== Vaccine ==============================

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

    public function user_logout(){
        $this->session->unset_userdata('user_id'); 

        if ($this->session->flashdata('user_type')==0) {
            redirect('index.php/user_login');
        }

        if ($this->session->flashdata('user_type')==1) {
            redirect('index.php/admin_login');
        }
        
    }

    function callback_date_valid($date){
        $day = (int) substr($date, 0, 2);
        $month = (int) substr($date, 3, 2);
        $year = (int) substr($date, 6, 4);
        return checkdate($month, $day, $year);
    }
    
}

