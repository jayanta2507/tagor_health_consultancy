<?php

class User_model extends CI_Model {

        public function insertUser($data){
                return $this->db->insert('users', $data);
        }

        public function loginUser($data){
                $this->db->select('*');
                $this->db->from('users');
                $this->db->where('email', $data['email']);
                $this->db->where('password', $data['password']);
                return $count = $this->db->count_all_results();
        }

        public function get_user_details($data){
 
                $this->db->select('*');
                $this->db->from('users');
                $this->db->where('email', $data['email']);
                $query = $this->db->get();
                return  $query->row_array();
        }

         public function get_contact_form($data){
 
                $this->db->select('*');
                $this->db->from('contact_us');
                $this->db->where('id', $data);
                $query = $this->db->get();
                return  $query->row_array();
        }




        public function get_profile_details($user_id){
 
                $this->db->select('*');
                $this->db->from('users');
                $this->db->where('id', $user_id);
                $query = $this->db->get();
                return  $query->row_array();
        }


        public function update_user_profile($data){

                $user_id     = $this->session->flashdata('user_id');

                $this->db->set($data);
                $this->db->where('id', $user_id);
                $update = $this->db->update('users');

                return $update;

                //"update users set name='Jayanta', phone='9878646464',  where id=1";
        }

        public function save_upload($image){

                $user_id     = $this->session->flashdata('user_id');

                $this->db->set('image', $image);
                $this->db->where('id', $user_id);
                $update = $this->db->update('users');

                return $update;
        }

        public function count_doctor()
        {
            return $this->db->where('status', '1')->count_all("doctors");
        }

        public function doctorList(){
                $this->db->select('*');
                $this->db->from('doctors');
                $this->db->where('status !=', '2');
                $query = $this->db->get();
                return  $query->result_array();
        }

        public function saveAppointment($data){
            return $this->db->insert('appointment', $data);
        }

        public function count_blood()
        {
        return $this->db->where('status', '1')->count_all("blood");
        }

        public function bloodList(){
                $this->db->select('*');
                $this->db->from('blood');
                $this->db->where('status !=', '2');
                $query = $this->db->get();
                return  $query->result_array();
        }

        public function count_bed()
        {
        return $this->db->where('status', '1')->count_all("bed");
        }


        public function bedList(){
                $this->db->select('*');
                $this->db->from('bed');
                $this->db->where('status !=', '2');
                $query = $this->db->get();
                return  $query->result_array();
        } 

        public function count_oxygen()
        {
        return $this->db->where('status', '1')->count_all("oxygen");
        }

        public function oxygenList(){
                $this->db->select('*');
                $this->db->from('oxygen');
                $this->db->where('status !=', '2');
                $query = $this->db->get();
                return  $query->result_array();
        }  

        public function count_vaccine()
        {
        return $this->db->where('status', '1')->count_all("vaccine");
        }   

        public function vaccineList(){
                $this->db->select('*');
                $this->db->from('vaccine');
                $this->db->where('status !=', '2');
                $query = $this->db->get();
                return  $query->result_array();
        }   


        public function doctoravailabilityList($doctorId){
            $this->db->select('*');
            $this->db->from('doctor_availability');
            $this->db->where('status !=', '2');
            $this->db->where('doctor_id', $doctorId);
            $this->db->where('date >=', date('Y-m-d'));
            $query = $this->db->get();
            return  $query->result_array();
        }

        public function getAppointmentList($user_id){
            $this->db->select('appointment.name as appointment_name, appointment.phone as appointment_phone, appointment.age as appointment_age, , appointment.diagnosis as appointment_diagnosis, appointment.status as appointment_status,  doctor_availability.date, doctor_availability.from_time, doctor_availability.to_time, doctors.name as doctor_name, ');
            $this->db->from('appointment');
            $this->db->join('users', 'appointment.userid = users.id');
            $this->db->join('doctor_availability', 'appointment.availability_id = doctor_availability.id');
            $this->db->join('doctors', 'doctor_availability.doctor_id = doctors.id');
            $this->db->where('appointment.status', '1');
            $this->db->where('appointment.userid', $user_id);
            $query = $this->db->get();
            return  $query->result_array();
        }


}

?>