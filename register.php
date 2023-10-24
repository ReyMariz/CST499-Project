<!DOCTYPE html>
<html lang="en">
<head>
	<title>Page to Register</title>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</head>
<body>
<div>
	<form method="POST">
		<div class="container text-center">
		
		<div class="ROW">
			<div class="col-sm-5">
				<h1 style="color:violet;">Start Enrollment</h1>
				<p><strong>Enter the following information</p></strong>
				<form method="POST">
					<label for "student_id"><br>Student ID</br></label>
					<input class="form-control" type="number" name="student_id" required>
				
					<label for "student_fname"><br>First Name</br></label>
					<input class="form-control" type="text" name="student_fname" required>
					
					<label for "student_lname"><br>Last Name</br></label>
					<input class="form-control" type="text" name="student_lname" required>
					
					<label for "DOB"><br>Date of Birth</br></label>
					<input class="form-control" type="date" name="DOB" required>
					
					<label for "phone_number"><br>Phone Number</br></label>
					<input class="form-control" type="tel" name="phone_number" required>
					
					<label for "email_address"><br>Email Address</br></label>
					<input class="form-control" type="email" name="email_address" required>
					
					<label for "password"><br>Create your password (minimum 5 characters)</br></label>
					<input class="form-control" type="password" name="password" required>
					
					<hr class="mb-5">
					<input class="btn btn-primary" type="submit" name="create" value="Register!">
				</form>
			</div>
		</div>
	</body>
</html>

<?php
session_start();
	include("connectpage.php");
	
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$student_id = $_POST['student_id'];
		$student_fname = $_POST['student_fname'];
		$student_lname = $_POST['student_lname'];
		$DOB = $_POST['DOB'];
		$phone_number = $_POST['phone_number'];
		$email_address = $_POST['email_address'];
		$password = $_POST['password'];
		
		if(!empty($student_id) &&
		!empty($student_fname) &&
		!empty($student_lname) &&
		!empty($DOB) &&
		!empty($phone_number)&&
		!empty($email_address)&&
		!empty($password))
	
	{
	$query = "insert into student(student_id, student_fname, student_lname, DOB, phone_number, email_address, student_password)
			values('$student_id', '$student_fname', '$student_lname', '$DOB', '$phone_number', '$email_address', '$password')";
			
			mysqli_query($connect, $query);
			header("Location: loginpage.php");
		}else
		{
			echo "Invalid information";
		}
	}
?>