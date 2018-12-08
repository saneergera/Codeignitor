<?php require('assets/header.php') ?>

<div class="container">
  <div class="alert alert-dismissible alert-danger passworderror hidden">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Oh snap!</strong> <a href="#" class="alert-link">Wrong Credentials. Retry
  </div>
  <div class="container">


    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="applicantlogin-form-link">Job Applicant </a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="recruiterlogin-form-link">Recruiter </a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="applicantlogin-form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username "  class="form-control ua" placeholder="Applicant Username" required>
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password "  class="form-control pa" placeholder="Password" required>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login " value="Log in" >

                      </div>
										</div>
									</div>
								</form>
                <form id="recruiterlogin-form" style="display: none;">
                  <div class="form-group">
                    <input type="text" name="username" id="username " tabindex="3" class="form-control ur"  placeholder="Recruiter Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password " tabindex="4" class="form-control pr" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="login-submit" id="login-submit " tabindex="4" class="form-control btn btn-login" value="Log In">
                      </div>
                    </div>
                  </div>
                </form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



</script>
  <?php require('assets/footer.php') ?>
