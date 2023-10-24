<?php
session_start();
	include "connectpage.php";
$sql = " SELECT * FROM online_course_list ORDER BY courseName DESC ";
$result = $connect->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Classes</title>
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
</head>
 
<body>
    <section>
        <h1>Avalilable Classes</h1>
        <table>
		 <tr>
                <th>Course Name</th>
                <th>Course ID</th>
                <th>Course Subject</th>
                <th>Course Availability</th>
				<th>Course Professor</th>
				<th>Course Level</th>
				<th>CourseCost</th>
            </tr>
     
            <?php 
                
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                
                <td><?php echo $rows['courseName'];?></td>
                <td><?php echo $rows['courseID'];?></td>
                <td><?php echo $rows['courseSubject'];?></td>
                <td><?php echo $rows['courseAvailability'];?></td>
				<td><?php echo $rows['courseProfessor'];?></td>
				<td><?php echo $rows['courseLevel'];?></td>
				<td><?php echo $rows['courseCost'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
	
	
		<h2 style="color:violet;">Choose Courses</h2>
		<div>	
			<form method="POST">
				<div class="container text center">
				<div class="ROW">
					<div class="col-sm-5">
					<p><strong>Choose the following options by selecting the dropdown menu</p></strong>
					<form method="POST">
					<label for "student_id"><br>Type in your Student ID</br></label>
					<input class="form-control" type="number" name="student_id" required><br></br>
					
					<label for="courseName">Course Name:</label>
					<input list="chosen_courseName" name="chosen_courseName" id="chosen_courseName">
				<datalist id="chosen_courseName">
					<option value="Introduction to Food Science">
					<option value="Introduction to Biology">
					<option value="Introduction to Algebra">
					<option value="Introduction to World History">
					<option value="Introduction to College English">
					<option value="Yoga">
					<option value="3D Art">
					<option value="Food Science II">
					<option value="Biology II">
					<option value="Algebra II">
					<option value="World History II">
					<option value="Yoga II">
					<option value="3D Art II">
					<option value="English II">
					</datalist><br></br>
					
					<label for="chosen_courseID">Course ID:</label>
					<input list="chosen_courseID" name="chosen_courseID" id="chosen_courseID">
				<datalist id="chosen_courseID">
					<option value="111000">
					<option value="222000">
					<option value="333000">
					<option value="444000">
					<option value="555000">
					<option value="66600">
					<option value="777000">
					<option value="111001">
					<option value="222001">
					<option value="333001">
					<option value="444001">
					<option value="66601">
					<option value="777001">
					<option value="555001">
					</datalist><br></br>
					
					<label for="chosen_courseSubject">Course Subject:</label>
					<input list="chosen_courseSubject" name="chosen_courseSubject" id="chosen_courseSubject">
				<datalist id="chosen_courseSubject">
					<option value="Science">
					<option value="Math">
					<option value="History">
					<option value="English">
					<option value="Physical Education">
					<option value="Elective">
					</datalist><br></br>
					
					<label for="chosen_courseProfessor">Course Professor:</label>
					<input list="chosen_courseProfessor" name="chosen_courseProfessor" id="chosen_courseProfessor">
				<datalist id="chosen_courseProfessor">
					<option value="Gonzalez">
					<option value="Kim">
					<option value="Stanton">
					<option value="Clark">
					<option value="Thomas">
					<option value="Nyguen">
					<option value="Kansas">
					<option value="Chance">
					<option value="Stevenson">
					<option value="Lopez">
					<option value="Roi">
					</datalist><br></br>
					
					<label for="chosen_courseLevel">Course Level:</label>
					<input list="chosen_courseLevel" name="chosen_courseLevel" id="chosen_courseLevel">
				<datalist id="chosen_courseLevel">
					<option value="Beginner">
					<option value="Intermediate">
					</datalist><br></br>
					
					<label for="chosen_courseCost">Course Cost:</label>
					<input list="chosen_courseCost" name="chosen_courseCost" id="chosen_courseCost">
				<datalist id="chosen_courseCost">
					<option value="$100">
					<option value="$105">
					<option value="$120">
					<option value="$125">
					</datalist><br></br>
					
					</div>
					
					<input class="btn btn-primary" type="submit" name="create" value="Register Courses">
			</form>
</body>
</html>
<?php

	include("connectpage.php");
	
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$student_id = $_POST['student_id'];
		$chosen_courseName = $_POST['chosen_courseName'];
		$chosen_courseID = $_POST['chosen_courseID'];
		$chosen_courseSubject = $_POST['chosen_courseSubject'];
		$chosen_courseProfessor = $_POST['chosen_courseProfessor'];
		$chosen_courseLevel = $_POST['chosen_courseLevel'];
		$chosen_courseCost = $_POST['chosen_courseCost'];
		
		if(!empty($student_id) &&
		!empty($chosen_courseName) &&
		!empty($chosen_courseID) &&
		!empty($chosen_courseSubject) &&
		!empty($chosen_courseProfessor)&&
		!empty($chosen_courseLevel)&&
		!empty($chosen_courseCost))
	
	{
	$query = "insert into enrolled_students(student_id, chosen_courseName, chosen_courseID, chosen_courseSubject, chosen_courseProfessor, chosen_courseLevel, chosen_courseCost)
			values('$student_id', '$chosen_courseName', '$chosen_courseID', '$chosen_courseSubject', '$chosen_courseProfessor', '$chosen_courseLevel', '$chosen_courseCost')";
			
			mysqli_query($connect, $query);
			header("Location:success.php");
		}else
		{
			echo "Invalid information";
		}
	}
?>