<?php

  include 'connect.php';
  extract($_POST);//$username and $password
  $sql="select * from customers where phone='$phone' and password='$password'";

  $results= mysqli_query($con,$sql);
   
   if(mysqli_num_rows($results)>0)
   {
   	 $row= mysqli_fetch_row($results);
   	 $id=$row[0];
     $names=$row[1]; 
     $phone=$row[2]; 
     $email= $row[3];
     session_start();
     $_SESSION['id']=$id;
     $_SESSION['names']=$names;
     $_SESSION['phone']=$phone;
     $_SESSION['email']=$email;
    ?>
    <!DOCTYPE html>
<html>
<head>
  <title>EPZ WEB</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 <style type="text/css">
    .myNavbar{
      background-color: #008000;
      color: white;
         }

      </style>
</head>
<body>
     
  <nav class="navbar myNavbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
        </button>
        <a class="navbar-brand" href="#">EPZ WEB</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="signup.php"><span class="glyphicon glyphicon-user"></span>
               <?php echo $_SESSION['names'];  ?>
            </a>

          </li>
          <li>
            <a href="logout.php"><span class="glyphicon glyphicon-user"></span>
               Logout
            </a>
          </li> 
        </ul>
      </div>
    </div>
  </nav>
<div class="container">
      <div class="row">
        <h1>Approved Orders</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Customer ID</th>
                <th>Customer Name</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Address</th>
                <th>Delivery</th>
                <TH>Status</TH>
              </tr>
            </thead>
            <tbody>
              <?php
                   include 'connect.php';
                   $sql="SELECT * FROM `products` where pid='$id'";

                   $results=mysqli_query($con,$sql);
                   $x=1;
                   while($row=mysqli_fetch_array($results))
                   {
                    $id=$row[0];
                     $pid=$row[1];
                     $cust_name=$row[2];
                     $product=$row[3];
                     $quantity=$row[4];
                     $address=$row[5];
                     $date=$row[6];
                     $status=$row[7];
                    
                         echo "<tr>";
                         echo "<td>$x</td>";
                         echo "<td>$pid</td>";
                         echo "<td>$cust_name</td>";
                         echo "<td>$product</td>";
                         echo "<td>$quantity</td>";
                         echo "<td>$address</td>";
                         echo "<td>$date</td>";
                         echo "<td>$status</td>";
                         echo "</tr>";
                      $x++;


                   }

              ?>
            </tbody>
          </table>      
      </div>
    </div>
</body>
</html>
<?php 
   }
   else
   {
   	 header("location:login.php?code=success");
   }


?>