<!DOCTYPE html>
<html lang="en">
<head>
	<title>Create Classes Page</title>
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
				<h1 style="color:violet;">Create Classes</h1>
				<p><strong>Enter the following information</p></strong>
				<form method="POST">
					<label for "courseName"><br>Course Name</br></label>
					<input class="form-control" type="text" name="courseName" required>
					
					<label for "courseID"><br>Course ID</br></label>
					<input class="form-control" type="number" name="courseID" required>
				
					<label for "courseSubject"><br>Course Subject</br></label>
					<input class="form-control" type="text" name="courseSubject" required>
					
					<label for "courseAvailability"><br>Course Availability</br></label>
					<input class="form-control" type="text" name="courseAvailability" required>
					
					<label for "courseProfessor"><br>Course Professor</br></label>
					<input class="form-control" type="text" name="courseProfessor" required>
					
					<label for "courseLevel"><br>Course Level</br></label>
					<input class="form-control" type="text" name="courseLevel" required>
					
					<label for "courseCost"><br>Course Cost</br></label>
					<input class="form-control" type="number" name="courseCost" required>
					
					<hr class="mb-5">
					<input class="btn btn-primary" type="submit" name="create" value="Add!">
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
		$courseName = $_POST['courseName'];
		$courseID = $_POST['courseID'];
		$courseSubject = $_POST['courseSubject'];
		$courseAvailability = $_POST['courseAvailability'];
		$courseProfessor = $_POST['courseProfessor'];
		$courseLevel = $_POST['courseLevel'];
		$courseCost = $_POST['courseCost'];
		
		if(!empty($courseName) &&
		!empty ($courseID)  &&
		!empty($courseSubject) &&
		!empty($courseAvailability) &&
		!empty($courseProfessor) &&
		!empty($courseLevel)&&
		!empty($courseCost))
	
	{
	$query = "insert into online_course_list(courseName, courseID, courseSubject, courseAvailability, courseProfessor, courseLevel, courseCost)
			values('$courseName', '$courseID', '$courseSubject', '$courseAvailability', '$courseProfessor', '$courseLevel', '$courseCost')";
			
			mysqli_query($connect, $query);
			header("Location: success.php");
		}else
		{
			echo "Something went wrong";
		}
	}
?>