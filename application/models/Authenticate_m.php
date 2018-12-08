<?php


class Authenticate_m extends CI_Model {

public function verifyseeker($email,$password){

   $this->db->where('Email', $email);
   $query = $this->db->get('applicant');
   $result = $query->row_array();

   if (!empty($result) && password_verify($password, $result['Password'])) {
       return $result;
   } elseif(empty($result)) {
       return "Email not found";
   }
   else{
     return "Wrong password";
   }
}


public function verifyrecruiter($email,$password){

   $this->db->where('Email', $email);
   $query = $this->db->get('recruiter');
   $result = $query->row_array();

   if (!empty($result) && password_verify($password, $result['Password'])) {
       return $result;
   } elseif(empty($result)) {
       return "Email not found";
   }
   else{
     return "Wrong password";
   }
}
}


 ?>
