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
					
					<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<?php
             if(isset($_GET['code']))
             {
                echo'<div class="alert alert-danger">';
        echo'  <strong>Login failed.</strong> Username or password is incorrect. ';
        echo'</div> ';
             }
        ?>
		<div class="col-md-4 col-md-offset-4">
			 <h1> Customers Login</h1> 
			 <form action="products.php" method="post">
			 	 <div class="form-group">
			 	 	 <input type="text" class="form-control" name="phone" placeholder="Phone" required>
			 	 </div>
			 	 <div class="form-group">
			 	 	 <input type="password" class="form-control" name="password" placeholder="Password" required>
			 	 </div>					 	 
                 <button type="submit" class="btn btn-primary btn-block">Login</button>
                 <h5>Please login with your phone number and password</h5>
                 <h5>or sign up if you don't have an account</h5>
			 </form>
		</div>
	</div>
</body>
</html>