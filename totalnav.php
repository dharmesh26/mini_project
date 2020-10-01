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
      <li class="nav-item">
        <a class="nav-link" href="addEmployee.html">Add Employee</a>
      </li>
    </ul>
    <button type="button" class="btn btn-outline-primary" onclick="logout()">Logout</button>
</div>
</nav>
	</header>
	<div id="main-content" class="container-fluid ">
		
			
	</div>
		
	</div>
	<footer class="mt-5">
		<div id="foot-div" class="container-fluid text-center">
				Employee Management System&reg;
		</div>
	</footer>

</body>
</html>