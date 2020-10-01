<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" width="content-width , initial-scale=1.0 " >
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    	<link rel="stylesheet" type="text/css" href="css/myfile.css">
	<title>Admin Home</title>
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
      <li class="nav-item">
        <a class="nav-link" href="manageEmployee.php">Manage Employee</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="leaves.php">Leaves</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="addEmployee.php">Add Employee<span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <button type="button" class="btn btn-outline-primary" onclick="logout()">Logout</button>
</div>
</nav>
	</header>
	<div id="main-content" class="container-fluid mt-5">
		<div  id="alert-box" class="alert alert-primary centerDiv col-lg-3" role="alert">
                  
            </div>
		<form class="form" id="addEmpform" method="POST" action="addEmployee.php">
				<div class="form-group col-lg-4 col-md-12 col-sm-12 ml-auto mr-auto">
					<label for="emp-name" class="">Name:</label>					
					<input type="text" name="emp-name" class="form-control" id="emp-name" required value="
					<?php echo isset($_POST['emp-name'])?"htmlspecialchars($_POST['emp-name'],ENT_OUOTES):";?>">
				</div>
				<div class="form-group col-lg-4 col-md-12 col-sm-12 ml-auto mr-auto">
					<label for="address">Address:</label>					
					<textarea class="form-control" name="address" id="address" required></textarea>
				</div>
				<div class="form-group col-lg-4 col-md-12 col-sm-12 ml-auto mr-auto">
					<label for="bloodgrp">Blood group:</label>
					<input list="bloodgrp" name="bloodgrp"  class="form-control" required>				
					<datalist id="bloodgrp">
								<option>O+</option>
								<option>O-</option>
								<option>A+</option>
								<option>A-</option>
								<option>B+</option>
								<option>B-</option>
								<option>AB+</option>
								<option>AB-</option>
								
					</datalist>
				</div>
				<div class="form-group col-lg-4 col-md-12 col-sm-12 ml-auto mr-auto">
					<label for="gender">Gender:</label>				
					<input type="radio" name="gender" id="gender" value="male" class="offset-1" required>Male
					<input type="radio" name="gender" id="gender" value="female" class="ml-5" required>Female
					<input type="radio" name="gender" id="gender" value="other" class="ml-5" required>Other
				</div>
				<div class="form-group col-lg-4 col-md-12 col-sm-12 ml-auto mr-auto">
					<label for="mobile">Mobile:</label>					
					<input type="text" name="mobile" class="form-control" id="mobile" required>
				</div>
				<div class="form-group col-lg-4 col-md-12 col-sm-12 ml-auto mr-auto">
					<label for="salary">Salary:</label>					
					<input type="text" name="salary" class="form-control" id="salary" required>
				</div>
				<div class="form-group col-lg-4 col-md-12 col-sm-12 ml-auto mr-auto">
					<label for="emp-post">Post:</label>					
					<input type="text" name="emp-post" class="form-control" id="emp-post" required>
				</div>
				<div class="form-group col-lg-4 col-md-12 col-sm-12 ml-auto mr-auto">
					<label for="emp-email">Email:</label>					
					<input type="email" name="emp-email" class="form-control" id="emp-email" required onblur ="vaildate(this)">
				</div>
				<div class="form-group col-lg-4 col-md-12 col-sm-12 ml-auto mr-auto">
					<label for="emp-password">Password:</label>					
					<input type="password" name="emp-password" class="form-control" id="emp-password" required>
				</div>
				<div class="form-group col-lg-4 col-md-12 col-sm-12 ml-auto mr-auto">
					<button type="submit" class="btn btn-outline-dark">Add Employee</button>
					<button type="reset" class="btn btn-outline-dark float-right">Reset</button>
				</div>
			</form>
			
			
	</div>	
	</div>
	<footer class="mt-5">
		<div id="foot-div" class="container-fluid text-center">
				Employee Management System&reg;
		</div>
	</footer>

</body>
</html>