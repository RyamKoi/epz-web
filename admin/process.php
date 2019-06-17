<?php
  include '../connect.php';
  extract($_GET);
 

  $sql="UPDATE `products` SET `status` = 'approved' WHERE id='$tid'";

  mysqli_query($con,$sql);
  header("location:processed.php");
?>