<!DOCTYPE html>
<html>
<head>
  <title>EPZ WEB</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
   <link rel="stylesheet" href="../css/custom.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <style type="text/css">
    .myNavbar{
      background-color: #008000;
      color: white;
         }

      </style>
</head>
<body>
     
  <nav class="navbar  myNavbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
        </button>
        <a class="navbar-brand" href="#" style="color: white;">EPZ WEB</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar" >
        
        <ul class="nav navbar-nav " id="linavbar" >
          <li><a href="display.php"> Products</a></li>
          <li><a href="customers.php"> Customers</a></li>
          <li class="active"><a href="insert.php"> Add new products</a></li>
          <li ><a href="testing.php"> Testing</a></li>
          <li><a href="received.php"> Pending Lot</a></li>
          <li><a href="processed.php"> Approved Lot</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="signup.php"><span class="glyphicon glyphicon-user"></span>
               <?php session_start();  echo $_SESSION['username'];  ?>
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
                
              </tr>
            </thead>
            <tbody>
              <?php
                   include '../connect.php';
                   $sql="SELECT * FROM `products`";

                   $results=mysqli_query($con,$sql);
                   $x=1;
                   while($row=mysqli_fetch_array($results))
                   {
                    
                     $pid=$row[1];
                     $cust_name=$row[2];
                     $product=$row[3];
                     $quantity=$row[4];
                     $address=$row[5];
                     $date=$row[6];
                     
                    
                         echo "<tr>";
                         echo "<td>$x</td>";
                         echo "<td>$pid</td>";
                         echo "<td>$cust_name</td>";
                         echo "<td>$product</td>";
                         echo "<td>$quantity</td>";
                         echo "<td>$address</td>";
                         echo "<td>$date</td>";
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