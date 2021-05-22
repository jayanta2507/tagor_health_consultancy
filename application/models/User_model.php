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

}

?>