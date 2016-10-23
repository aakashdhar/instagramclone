<?php
  $con = mysqli_connect('localhost','root','','instagram');

  if (!$con) {
    echo "<h2>There was a problem connecting to the database. We are working to get it up as soon as possible</h2>";
    die();
  }


?>
