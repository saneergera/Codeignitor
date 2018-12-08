<?php

class Seeker extends  CI_Controller
{

  function __construct()
  {
     parent::__construct();
      $this->load->library('session');
      if ($this->session->userdata('seekerloggedIn')) {
          $this->load->model('seeker_m', 's');
      }
      else
      {
       redirect('/', 'refresh');
     }

  }

public function index(){
  $encoded = $this->session->get_userdata('seekerloggedIn');
  $this->load->view('jobseeker/seeker',['data'=>$encoded]);
}


public function getJobs($id){
  $result = $this->s->getJobs($id);
  $id2=$this->session->userdata["id"];
  if($id != $id2)
    {
      echo "unauthorized access";
      }
  else
  {
        $this->load->view('jobseeker/newJobs',['data'=>$result]);
      }
}


public function appliedJobs($id){
  $result = $this->s->allJobs($id);
  $id2=$this->session->userdata["id"];
  if($id != $id2)
    {
      echo "unauthorized access";
    }
  else{
    $this->load->view('jobseeker/appliedJobs',['data'=>$result]);
    }
}


public function applyJob(){
  $job    = $this->input->post('job');
  $seeker = $this->session->userdata["id"];
  $result = $this->s->apply($job,$seeker);
  echo "done";
}

}


 ?>
