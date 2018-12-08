<?php require('assets/header.php') ?>

<div class="container">

  <?php
if (count($data) == 0) {
    echo "<div class='jumbotron' style= 'background:white'>
    <h1>No Jobs Applied</h1>
    <p> You have not applied to any jobs.</p>
  </div>";
} else {
    foreach ($data as $post) {
        echo "
        <div class='col-md-4'>
        <div class='card1'>
  <p class='heading'>" . $post->Title . "</p>

  <p>" . $post->Posted_By . "</p>
  <p>" . $post->salary . " LPA</p>
</div>
</div>
";
    }
}
?>
</div>



  <?php require('assets/footer.php') ?>
