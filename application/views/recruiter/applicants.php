<?php require('assets/header.php') ?>


<div class="container">
  <?php
  if (count($data) == 0) {
      echo "<div class='jumbotron' >
      <h1>No applicants</h1>
      <p> No one has applied Yet.Please check again </p>
      </div>";
} else {
    foreach ($data as $post) {
        echo "
        <div class='col-md-4'>

        <div class='card1'>
  <p class='heading'>" . $post->Name . "</p>
  <p class='title'>" . $post->Skills. "</p>
  <p class='title'>" . $post->Qualifications . "</p>
  <p>" . $post->GPA . " GPA</p>
  <p>" . $post->Experience . "years</p>
    <p>" . $post->Phone . "</p>
      <p>" . $post->Email . "</p>
</div>
</div>
";
    }
}
?>
</div>




  <?php require('assets/footer.php') ?>
