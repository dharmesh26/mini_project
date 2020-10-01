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
	<title>Home</title>
</head>
<body>
	
	<header>
		<nav id="header-nav" class="navbar navbar-deafult">
			<div class="container-fluid">
				<div class="navbar-header">
				<div id="brand-name-div" class="navbar-brand">
					<a href="index.php" id="brand-name-a"><b>Employee Management System</b></a>
				</div>
				</div>
				<div>
					<ul id="nav-list" class="nav justify-content-center">
						<li class="nav-item"><a href="index.php" id="home-a" class="nav-link">Home</a></li>
						<li class="nav-item"><a href="adminLogin.html" id="admin-login-a" class="nav-link">Admin login</a></li>
						<li class="nav-item"><a href="employeeLogin.html" id="employee-login-a" class="nav-link">Employee login</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<div id="main-content" class="container-fluid">
		<div id="home-tiles" class="row">
			<div class="col-lg-6">
				<a href="adminLogin.html">
				<div id="admin-tile">
					
					<span>Admin</span></div>
			</a>
			</div>
			<div class="col-lg-6">
				<a href="employeeLogin.html">
				<div id="employee-tile"><span>Employee</span></div>
			</a>
			</div>
		</div>
	</div>
	<footer class="panel-footer">
		<div id="foot-div" class="container-fluid text-center">
				Employee Management System&reg;
		</div>
	</footer>
</body>
</html>