<?php

class Admin_model extends CI_Model {

    public function loginAdmin($data){
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('email', $data['email']);
        $this->db->where('password', $data['password']);
        return $count = $this->db->count_all_results();
    }

    public function getAdminData($data){
    	$this->db->select('*');
        $this->db->from('admin');
        $this->db->where('email', $data['email']);
        $query = $this->db->get();
        return  $query->row_array();
    }


    public function createDoctor($data){
        return $this->db->insert('doctors', $data);
    }

    public function createBed($data){
        return $this->db->insert('beds', $data);
    }
}

?>