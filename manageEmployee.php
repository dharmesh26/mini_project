<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" width="content-width , initial-scale=1.0 " >
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
    	<link rel="stylesheet" type="text/css" href="css/myfile.css">
	<title>Manage Employee</title>
	<?php include("config.php");?>
</head>
<body>
	<script type="text/javascript">
		function logout(){
			
			var retVal = confirm("Do you want to continue ?"); 
			if( retVal == true ){
				window.location="index.php";
				return true;
				}
				
		}
	</script>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-dark" >
  <a class="navbar-brand" href="#">Employee management system</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-items" aria-controls="#navbar-items" aria-expanded="false" aria-label="navbar toggle">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar-items">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="admin.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="manageEmployee.php">Manage Employee <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="leaves.php">Leaves</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addEmployee.html">Add Employee</a>
      </li>
    </ul>
    <button type="button" class="btn btn-outline-primary" onclick="logout()">Logout</button>
</div>
</nav>
	</header>
	<div id="main-content" class="container-fluid ">
		<div  id ="list-div"class=" container row mt-5 ml-0">
			 <?php
                        session_start();
                        $sql="SELECT * FROM employee";
                        $result=mysqli_query($conn,$sql);						
                        while($row=mysqli_fetch_assoc($result)) {
			 ?>

			  <div class="col-8"><?php echo $row['name']?></div>
			 <div class="col-2"><a href="viewEmployee.php?employ_id=<?php echo $row['id']?>">View</a></div>
			 <div class="col-2"><a href="removeEmployeelink.php?employ_id=<?php echo $row['id']?>">Remove</a></div>

			 
			
			 <?php

				}

			 ?>	
			</div>
			
			
	</div>
		
	</div>
	<footer class="mt-5">
		<div id="foot-div" class="container-fluid text-center">
				Employee Management System&reg;
		</div>
	</footer>

</body>
</html>