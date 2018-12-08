<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet"  href="<?php echo base_url() ?>/application/assets/css/recruiter.css" type="text/css">

     <title></title>
	</head>

<body>

	<?php
	$encoded = $this->session->get_userdata('recruiterloggedIn');
	 ?>

	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Job Seeker Portal</a>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">


	      <ul class="nav navbar-nav navbar-right">
	       		<li><a href="<?php echo base_url() ?>recruiter">Your Jobs</a></li>
						<li><a href="<?php echo base_url() ?>recruiter/post_job">Post Job</a></li>
					  <li><a href="<?php echo base_url() ?>authentication/log_out">Logout</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
