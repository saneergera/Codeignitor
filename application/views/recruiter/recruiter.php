<?php require('assets/header.php') ?>
<div class="container">
<?php
if (count($data) == 0) {
    echo "<div class='jumbotron' >
    <h1>You have not posted any jobs</h1>
    <p> Click on post job to post new jobs</p>
  </div>";
} else {

  echo "<h1 class='intro'>Jobs posted by you</h1>";

    foreach ($data as $post) {
        echo "
        <div class='col-md-4'>
        <a href=".base_url()."recruiter/getApplicants/". $post->id.">
        <div class='card1'>
        <p class='heading'>" . $post->Title . "</p>
        </div>
        </a>
        </div>";
    }
} ?>
</div>
<?php require('assets/footer.php') ?>
