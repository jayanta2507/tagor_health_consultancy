<?php

class User_model extends CI_Model {

        public function user_registration($data){
               
                $name  = $data['name'];
                $email = $data['email'];
                $pass  = $data['password'];
                $cnfpass  = $data['confirm_password'];

                if($pass == $cnfpass){

                        $insert = $this->db->insert('users', [
                                'name'    => $name,
                                'email'   => $email,
                                'password' => sha1($pass)
                        ]);

                        if ($insert) {
                                echo "Success";
                        }else{
                                echo "Failure";
                        }

                }else{
                        echo "Password does not match";
                }

                die();

        
        }
        

        public function user_login($data){
                echo "<pre>";
                echo "string";
                print_r($data);
                die();
        }

        public function insertUser($data){
                return $this->db->insert('users', $data);
        }

        public function loginUser($data){

                $this->db->select('*');
                $this->db->from('users');
                $this->db->where('email', $data['email']);
                $this->db->where('password', $data['password']);
                return $count = $this->db->count_all_results();

                // $query  = $this->db->get();
                // $result = $query->result();
                // echo "<pre>";
                // print_r($result);
                die();
        }

}

?>