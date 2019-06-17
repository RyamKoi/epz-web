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
          <li "><a href="insert.php"> Add new products</a></li>
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
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Address</th>
                                
              </tr>
            </thead>
            <tbody>
              <?php
                   include '../connect.php';
                   $sql="SELECT * FROM `customers`";

                   $results=mysqli_query($con,$sql);
                   
                   while($row=mysqli_fetch_array($results))
                   {
                     $id=$row[0];
                     $name=$row[1];
                     $phone=$row[2];
                     $email=$row[3];
                     $gender=$row[4];
                     $address=$row[5];
                     
                     
                    
                         echo "<tr>";
                        
                         echo "<td>$id</td>";
                         echo "<td>$name</td>";
                         echo "<td>$phone</td>";
                         echo "<td>$email</td>";
                         echo "<td>$gender</td>";
                         echo "<td>$address</td>";
                         
                         echo "</tr>";
                     


                   }

              ?>
            </tbody>
          </table>      
      </div>
    </div>


</body>
</html>