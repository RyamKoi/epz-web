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

  <div class="row">
<div class="col-md-4 col-md-offset-4">
 
<form action="_insert.php" method="post">
 <h2>Enter new products here</h2>
         <div class="form-group">
          Customer pid:
           <input type="text" class="form-control" name="pid" placeholder="pid" required>
         </div>
         <div class="form-group">
          Customer name
           <input type="text" class="form-control" name="cname" placeholder="Customer Name" required>
         </div>
         <div class="form-group">
          Product name
           <input type="text" class="form-control" name="pname" placeholder="Product Name" required>
         </div>
         <div class="form-group">
          Quantity:
           <input type="text" class="form-control" name="qty" placeholder="Quantity" required>
         </div>
         <div class="form-group">
          Address:
           <input type="text" class="form-control" name="address" placeholder="Address" required>
         </div>
         <div class="form-group">
          Date:
           <input type="date" class="form-control" name="date" placeholder="Date" required>
         </div>
         <div class="radio">
          <label><input type="radio" name="status" value="approved" checked>Approved</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="status" value="not approved">Not Approved</label>
        </div>

         
           
                 <button type="submit" class="btn btn-primary btn-block">Submit</button>
       </form>
 
</div>
</div>

</body>
</html>