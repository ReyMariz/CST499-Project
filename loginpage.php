<?php
   error_reporting(E_ALL ^ E_NOTICE);
?>
<?php
session_start();
	include('connectpage.php');
	

	
	if(isset($_POST['submit'])){
	$student_id = $_POST['student_id'];
	$password = $_POST['password'];
	
	$sql = "select * from `student` where student_id = '$student_id' and student_password = '$password'";
	$result = mysqli_query($connect,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);
	if($count ==1){
		header("classes.php");
	}else{
		echo "Invalid";
		
	
		}
	}

?>
<!DOCTYPE html>
<html lang ="en">
<head>
	<title> Login Page </title>
	<meta charset = "utf-8">
	<meta name = "viewpoint" content = "width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</head>
<body>
<div>
	<form method ="POST">
		<div class="container text-center">
		<h1 style="color:violet;"> Start Log in</h1>
		<p><strong>Enter Unique ID and PASSWORD</p></strong>
		<form method="POST">
		<form class="row g-3">
			<div class="col-md-6">
				<label for="student_id" class="form-label">Student ID</label>
				<input type="number" class="form-control" id="student_id">
			</div>
			<div class="col-md-6">
				<label for "password" class="form-label">Password</label>
				<input type="password" class="form-control" id="password">
			</div>
			<div class="col-12">
				<button type="submit" class="btn btn-primary">Log in</button>
			</div>
	</form>
</body>
</div>
</div>
	