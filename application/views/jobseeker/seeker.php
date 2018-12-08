<?php require('assets/header.php') ?>

<div class="container">


  <div class="card">
      <div class="box">
        <div class="row">
          <div class="col-md-6">
            <div class="img">
                <img src="<?php echo base_url(); ?>application/assets/default.png">
            </div>
            <h2><?php echo $data["name"]; ?><br><span><?php echo $data["skills"]; ?></span></h2>
          </div>
          <div class="col-md-6 info">
            <span>
                <ul>
                    <p>Field :<?php echo $data["qualifications"];  ?></p>
                    <p>Years Of Expereince :<?php echo $data["experience"];  ?></p>
                    <p>Email:<?php echo $data['email'];  ?></p>
                    <p>Phone :<?php echo $data["phone"];  ?></p>
                </ul>
            </span>
          </div>



      </div>
  </div>




</script>
  <?php require('assets/footer.php') ?>
