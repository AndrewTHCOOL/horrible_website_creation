<html lang="en">
<body>
<?php
$pavadinimas = "Svetainės pavadinimas";
?>
    <main>
    <div class="jumbotron">
    <div class="container">
      <h1 class="display"><?php echo "$pavadinimas" ?></h1>
      <p>Ziogas Voras
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
    <?php
  //  for ($i = 0; $i < 3; $i++){
    //    echo '<div class="col-md-4">';
     //   echo '<h2>Heading '.($i+1).'</h2>';
     //   echo '<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>';
      //  echo '<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>';
      //  echo '</div>';
   // }
    ?>
    </div>
<?php
$paveiksliukas='/img/FordGT2.jpg';
?>
    <hr>
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" <?php echo "$paveiksliukas"?> alt="Image">
  <div class="card-body">
    <h5 class="card-title">Ford GT40</h5>
    <p class="card-text">power</p>
    <a href="indx.html" class="btn btn-primary">skaityti daugiau</a>
  </div>
</div>
  </div> <!-- /container -->


</main>
</body>
</html>