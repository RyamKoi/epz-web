<?php

  include '../connect.php';
  extract($_POST);//$username and $password
  $sql="select * from users where email='$email' and password='$password'";

  $results= mysqli_query($con,$sql);
   
   if(mysqli_num_rows($results)>0)
   {
   	 $row= mysqli_fetch_row($results);
   	 $id=$row[0];
     $username=$row[3];  
     $email= $row[4];
     session_start();
     $_SESSION['id']=$id;
     $_SESSION['username']=$username;
     $_SESSION['email']=$email;
     
     header("location:testing.php");

   }
   else
   {
   	 header("location:login.php?code=success");
   }


?>