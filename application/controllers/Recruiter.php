<?php
class Recruiter extends CI_Controller{

  function __construct()
  {
      parent::__construct();
      $this->load->library('session');
      if ($this->session->userdata('recruiterloggedIn')) {
        $this->load->model('recruiter_m', 'r');
      }
      else
      {
       redirect('/', 'refresh');
     }

  }


public function index(){

  $name=$this->session->userdata["name"];
  $result = $this->r->viewall($name);
  $this->load->view('recruiter/recruiter',['data'=>$result]);

}
public function post_job(){
  $this->load->view('recruiter/form');
}

public function post(){
  $position    = $this->input->post('position');
  $posted_by = $this->input->post('posted_by');
  $salary = $this->input->post('salary');
  $description = $this->input->post('description');

  $result   = $this->r->createJob($position,$description,$posted_by,$salary);
  echo true;


}
public function getApplicants($id){
  $id2=$this->session->userdata["id"];
  $name=$this->session->userdata["name"];
  $result = $this->r->getName($id);
 $result[0]->Posted_By;
  if($name != $result[0]->Posted_By){
    echo "unauthorized access";
  }
  else{
    $result = $this->r->applications($id);
    $this->load->view('recruiter/applicants',['data'=>$result]);
  }
}

}



 ?>
