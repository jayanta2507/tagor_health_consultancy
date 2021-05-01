<?php

class User_model extends CI_Model {

        public function user_registration($data){
                /*echo "<pre>";
                echo "string";
                print_r($data);*/
                

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

}

?>