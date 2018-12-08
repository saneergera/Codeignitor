<?php
class Authentication extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('authenticate_m', 'a');
    }
  
    public function verify_seeker()
    {
        $email    = $this->input->post('email');
        $password = $this->input->post('password');
        $result   = $this->a->verifyseeker($email, $password);
        if ($result != 'Email not found' && $result != 'Wrong password') {

            $array = array(
                'id' => $result['id'],
                'email' => $result['Email'],
                'seekerloggedIn' => true,
                'name' => $result['Name'],
                'qualifications' => $result['Qualifications'],
                'experience' => $result['Experience'],
                'skills' => $result['Skills'],
                'phone' => $result['Phone']
            );
            $this->session->set_userdata($array);
            echo true;

        } else {

            echo $result;
        }



    }
    public function verify_recruiter()
    {
        $email    = $this->input->post('email');
        $password = $this->input->post('password');
        $result   = $this->a->verifyrecruiter($email, $password);
        if ($result != 'Email not found' && $result != 'Wrong password') {

            $array = array(
                'id' => $result['id'],
                'email' => $result['Email'],
                'recruiterloggedIn' => true,
                'name' => $result['Name']
            );
            $this->session->set_userdata($array);
            echo true;

        } else {

            echo $result;
        }



    }
    public function log_out()
    {

        $this->session->sess_destroy();
        redirect('/');

    }

}
?>
