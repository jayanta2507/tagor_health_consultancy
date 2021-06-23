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

    //===================  Doctor Section ==============//

    public function count_doctor()
    {
        return $this->db->where('status', '1')->count_all("doctors");
    }



    public function createDoctor($data){
        return $this->db->insert('doctors', $data);
    }

    public function doctorList(){
        $this->db->select('*');
        $this->db->from('doctors');
        $this->db->where('status !=', '2');
        $query = $this->db->get();
        return  $query->result_array();
    }


    public function editDoctor($doctorId){
        $this->db->select('*');
        $this->db->from('doctors');
        $this->db->where('id', $doctorId);
        $query = $this->db->get();
        return  $query->row_array();
    }


    public function updateDoctor($doctorId,$data){
        return $this->db->where('id', $doctorId)->update('doctors', $data);
    }


    public function deleteDoctor($doctorId){
        return $this->db->where('id', $doctorId)->update('doctors', array('status'=>'2'));
    }

    public function createDoctorAvailability($data)
    {
        return $this->db->insert('doctor_availability', $data);
    }


    //===================  Doctor Section ==============//



    public function count_blood()
    {
        return $this->db->where('status', '1')->count_all("blood");
    }

    public function createBlood($data){
        return $this->db->insert('blood', $data);
    }

    public function bloodList(){
        $this->db->select('*');
        $this->db->from('blood');
        $this->db->where('status !=', '2');
        $query = $this->db->get();
        return  $query->result_array();
    }


    public function editBlood($bloodId){
        $this->db->select('*');
        $this->db->from('blood');
        $this->db->where('id', $bloodId);
        $query = $this->db->get();
        return  $query->row_array();
    }


    public function updateblood($bloodId,$data){
        return $this->db->where('id', $bloodId)->update('blood', $data);
    }


    public function deleteblood($bloodId){
        return $this->db->where('id', $bloodId)->update('blood', array('status'=>'2'));
    }

    //===================  Bed Section ==============//

    public function createBed($data){
        return $this->db->insert('bed', $data);
    }

    public function bedList(){
        $this->db->select('*');
        $this->db->from('bed');
        $this->db->where('status !=', '2');
        $query = $this->db->get();
        return  $query->result_array();
    }

    public function editBed($bedId){
        $this->db->select('*');
        $this->db->from('bed');
        $this->db->where('id', $bedId);
        $query = $this->db->get();
        return  $query->row_array();
    }

    public function updateBed($bedId,$data){
        return $this->db->where('id', $bedId)->update('bed', $data);
    }

    public function deleteBed($bedId){
        return $this->db->where('id', $bedId)->update('bed', array('status'=>'2'));
    }


    //===================  Bed Section ==============//




    //===================  oxygen Section ==============//

    public function createOxygen($data){
        return $this->db->insert('oxygen', $data);
    }

    public function oxygenList(){
        $this->db->select('*');
        $this->db->from('oxygen');
        $this->db->where('status !=', '2');
        $query = $this->db->get();
        return  $query->result_array();
    }


    public function editOxygen($oxygenId){
        $this->db->select('*');
        $this->db->from('oxygen');
        $this->db->where('id', $oxygenId);
        $query = $this->db->get();
        return  $query->row_array();
    }

    public function updateOxygen($oxygenId,$data){
        return $this->db->where('id', $oxygenId)->update('oxygen', $data);
    }

    public function deleteOxygen($oxygenId){

        return $this->db->where('id', $oxygenId)->update('oxygen', array('status'=>'2'));
    }

    

    //===================  oxygen Section ==============//




    //===================  vaccine Section ==============//


    public function createVaccine($data){
        return $this->db->insert('vaccine', $data);
    }


     public function vaccineList(){
        $this->db->select('*');
        $this->db->from('vaccine');
        $this->db->where('status !=', '2');
        $query = $this->db->get();
        return  $query->result_array();
    }

    
    public function editVaccine($vaccineId){
        $this->db->select('*');
        $this->db->from('vaccine');
        $this->db->where('id', $vaccineId);
        $query = $this->db->get();
        return  $query->row_array();
    }


    public function updateVaccine($vaccineId,$data){
        return $this->db->where('id', $vaccineId)->update('vaccine', $data);
    }


    public function deleteVaccine($vaccineId){
        return $this->db->where('id', $vaccineId)->update('vaccine', array('status'=>'2'));
    }






    //===================  vaccine Section ==============//


}

?>