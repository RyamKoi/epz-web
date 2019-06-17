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
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">
     
  <nav class="navbar  myNavbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
        </button>
        <a class="navbar-brand" href="#" style="color: white; ">EPZ WEB</a>
      </div>
      <div class="collapse navbar-collapse myNavbar-centered" id="myNavbar" >
        
        <ul class="nav navbar-nav " id="linavbar" >
          <li><a href="display.php"> Products</a></li>
         <li><a href="customers.php"> Customers</a></li>
          <li ><a href="insert.php"> Add new products</a></li>
           <li class="active"><a href="testing.php"> Testing</a></li>
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
    <nav class="col-sm-3" id="myScrollspy">
       <ul class="nav nav-pills nav-stacked " data-spy="affix">
        <li class="active"><a href="#analytical">Analytical Chemistry testing</a></li>
        <li><a href="#micro">Food Microbiology Testing</a></li>
        <li><a href="#nutrition">Food Nutrition Analysis</a></li>
        <li><a href="#pesticide">Pesticide Residue Testing</a></li>
        <li><a href="#allergen">Food Allergen Testing</a></li>
      </ul>
	</nav>


<div class="col-sm-9">
	 <form action="_details.php" method="post">
      <div id="analytical">    
        <h1>Analytical Chemistry testing</h1>
       
                             <input type="hidden" name="pid" value="<?php echo $id; ?>">
						 	 <div class="form-group">
						 	     <label for="ph">pH tests</label>
						 	 	 <input type="number" class="form-control" name="ph" placeholder="pH tests" required>
						 	 </div>
						 	 <div class="form-group">
						 	    <label for="contaminants">Contaminants</label>
						 	 	 <input type="text" class="form-control" name="contaminants" placeholder="Delivery Contaminants" required>
						 	 </div>	

						 	 <div class="form-group">
						 	      <label for="additives">Additives</label>
						 	 	 <input type="text"  class="form-control" name="additives" placeholder="Additives" required>
						 	 </div>	

						 	  <div class="form-group">
							      <label for="comment">Additional information on analytical chemical tests</label>
							      <textarea class="form-control" rows="5" name="commentp"></textarea>
							   </div>
						 	 
      </div>
      <div id="micro"> 
        <h1>Food Microbiology Testing</h1>
         <input type="hidden" name="pid" value="<?php echo $id; ?>">
						 	 <div class="form-group">
						 	     <label for="pathogens">Pathogens</label>
						 	 	 <input type="text" class="form-control" name="pathogens" placeholder="Pathogens" required>
						 	 </div>
						 	 <div class="form-group">
						 	    <label for="raw">Raw materials</label>
						 	 	 <input type="text"  class="form-control" name="raw" placeholder="Delivery Raw materials" required>
						 	 </div>	

						 	 <div class="form-group">
						 	      <label for="ingredients">Ingredients</label>
						 	 	 <input type="text"  class="form-control" name="ingredients" placeholder="Ingredients" required>
						 	 </div>	
						 	 <div class="form-group">
							      <label for="comment">Additional information on the micorobiology tests</label>
							      <textarea class="form-control" rows="5" name="commentm"></textarea>
							   </div>
        
      </div>        
      <div id="nutrition">         
        <h1>Food Nutrition Analysis</h1>
         <input type="hidden" name="pid" value="<?php echo $id; ?>">
						 	 <div class="form-group">
						 	     <label for="qty">Moisture</label>
						 	 	 <input type="text" class="form-control" name="Moisture" placeholder="Moisture" required>
						 	 </div>
						 	 <div class="form-group">
						 	    <label for="add">Dietary fibre</label>
						 	 	 <input type="text" class="form-control" name="fibre" placeholder="Delivery Dietary fibre" required>
						 	 </div>	

						 	 <div class="form-group">
						 	      <label for="code">Sugars</label>
						 	 	 <input type="text"  class="form-control" name="code" placeholder="Sugars" required>
						 	 </div>	
						 	 <div class="form-group">
							      <label for="comment">Additional information on the tests</label>
							      <textarea class="form-control" rows="5" name="commentf"></textarea>
							   </div>
        
      </div>
      <div id="pesticide">         
        <h1>Pesticide Residue Testing</h1>
         <input type="hidden" name="pid" value="<?php echo $id; ?>">
						 	 <div class="form-group">
						 	     <label for="qty">Fungicides</label>
						 	 	 <input type="text"  class="form-control" name="Fungicides" placeholder="Fungicides" required>
						 	 </div>
						 	 <div class="form-group">
						 	    <label for="add">Herbicides</label>
						 	 	 <input type="text"  class="form-control" name="Herbicides" placeholder="Delivery Herbicides" required>
						 	 </div>	

						 	 <div class="form-group">
						 	      <label for="code">Rodenticide</label>
						 	 	 <input type="text"  class="form-control" name="rodenticide" placeholder="Rodenticide" required>
						 	 </div>	
						 	 <div class="form-group">
							      <label for="comment">Additional information on the tests</label>
							      <textarea class="form-control" rows="5" name="commentr"></textarea>
							   </div>
      </div>      
      <div id="allergen">         
        <h1>Food Allergen Testing</h1> <input type="hidden" name="pid" value="<?php echo $id; ?>">
						 	 <div class="form-group">
						 	     <label for="qty">Gluten</label>
						 	 	 <input type="text"  class="form-control" name="Gluten" placeholder="Gluten" required>
						 	 </div>
						 	 <div class="form-group">
						 	    <label for="add">Milk</label>
						 	 	 <input type="text"  class="form-control" name="Milk" placeholder="Delivery Milk" required>
						 	 </div>	

						 	 <div class="form-group">
						 	      <label for="code">Peanuts and Nuts</label>
						 	 	 <input type="text" class="form-control" name="nuts" placeholder="Peanuts and Nuts" required>
						 	 </div>	
						 	 <div class="form-group">
							      <label for="comment">Additional information on the allergen tests</label>
							      <textarea class="form-control" rows="5" ></textarea>
							   </div>
      </div>
    </div>
     <button type="submit" class="btn btn-primary btn-block">Submit</button>
     </form>
  </div>
</div>

</body>
</html>
