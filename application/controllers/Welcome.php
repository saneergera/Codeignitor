<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {



function __construct() {
			 parent::__construct();
			 $this->load->library('session');
	 }


	public function index()
	{
		if($this->session->has_userdata('seekerloggedIn'))
		{
				redirect('/seeker', 'refresh');
		}

		elseif($this->session->has_userdata('recruiterloggedIn')){

			redirect('/recruiter', 'refresh');
		}
		else{
				$this->load->view('common/login');
		}
	}
}
