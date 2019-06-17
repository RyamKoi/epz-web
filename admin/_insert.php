<?php
  include '../connect.php';
  extract($_POST);
  $sql= "INSERT INTO `products`(`id`, `pid`, `cust_name`, `product`, `quantity`, `address`, `date`,`status`) VALUES
					 			('','$pid','$cname','$pname','$qty','$address','$date','$status')";
 mysqli_query($con,$sql);
	

 header("location:received.php");

?>