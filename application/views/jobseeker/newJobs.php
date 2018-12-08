<?php require('assets/header.php') ?>

<div class="container">

  <?php if(count($data) == 0){


    echo "<div class='container'><div class='jumbotron' >
    <h1>No New Jobs</h1>
    <p> You have applied to all the jobs available . Keep checking the portal to look for new postings.</p>
  </div></div>";

  } else{

echo "<div data=".count($data)."id='number' hidden></div>";
foreach ($data as $post) {

  echo"<div class='card1'>
  <p class='heading'>".$post->Title."</p>
  <p class='title'>".$post->Description."</p>
  <p>".$post->Posted_By."</p>
  <p>".$post->salary."LPA</p>

  <p><button id='apply' data=".$post->id.">Apply</button></p>
</div>";
}



  } ?>


</div>



</style>

  <?php require('assets/footer.php') ?>
