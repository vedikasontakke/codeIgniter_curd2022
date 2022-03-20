<?php

class User_model extends CI_model{

  

    function create($formArray){
        $this->db->insert('users' , $formArray);   // INSERT INTO user(name,email) values (? , ?)
    }

    function all(){

        return $users = $this->db->get('users')->result_array();  // SELECT * from users 
 
     }

     function getUser($userId){
      
        return  $this->db->where('user_id' , $userId)->get('users')->row_array(); // select * from users where user_id= ? 
    }

    function updateUser($userId,$formArray){

        $this->db->where('user_id',$userId);
        $this->db->update('users',$formArray); // update user SRT name = ? , email = ? where user_id = ? 
    }

    function deleteUser($userId){

        $this->db->where('user_id' , $userId);
        $this->db->delete('users');  // DELETE FROM users where user_id = ? 
    }
}

?>