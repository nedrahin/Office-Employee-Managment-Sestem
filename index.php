<?php
	session_start();
	if ($_SESSION['re_email'] == false) {
		header("Location: login.php");
		exit();
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="index.php"><img src="img/<?php echo $_SESSION['re_image']; ?>" alt=""></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="departments.php">Departments</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="designations.php">Designations</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="employee.php">Employee</a>
	      </li>
	      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Users</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="user.php">Add User</a>
              <a class="dropdown-item" href="view_user.php">View User</a>
            </div>
          </li>
	      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Salary</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="add_salary.php">Add Salary</a>
              <a class="dropdown-item" href="view_salary.php">View Salary</a>
            </div>
          </li>
	      <li class="nav-item dropdown">
		    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Hi, <?php echo $_SESSION['re_name']; ?></a>
		    <div class="dropdown-menu">
		      <a class="dropdown-item" href="logout.php">Logout</a>
		    </div>
		  </li>
	    </ul>
	  </div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-12"><h2 class="text-center mt-5">Welcome To The Employee Management System</h2></div>
	</div>
</div>

<?php require('footer.php'); ?>

