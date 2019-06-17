<?php
  include 'connect.php';
  extract($_POST);
  $sql= "INSERT INTO `customers`(`id`, `names`, `phone`, `email`, `gender`, `address`, `password`) VALUES ('','$names','$phone','$email','$gender','$address','$password')";

  mysqli_query($con,$sql);

  header("location:login.php");

?>