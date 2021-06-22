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


        public function doctorList(){
                $this->db->select('*');
                $this->db->from('doctors');
                $this->db->where('status !=', '2');
                $query = $this->db->get();
                return  $query->result_array();
        }
        public function bloodList(){
                $this->db->select('*');
                $this->db->from('blood');
                $this->db->where('status !=', '2');
                $query = $this->db->get();
                return  $query->result_array();
        }

        public function bedList(){
                $this->db->select('*');
                $this->db->from('bed');
                $this->db->where('status !=', '2');
                $query = $this->db->get();
                return  $query->result_array();
        }      

        public function vaccineList(){
                $this->db->select('*');
                $this->db->from('vaccine');
                $this->db->where('status !=', '2');
                $query = $this->db->get();
                return  $query->result_array();
        }      

}

?>