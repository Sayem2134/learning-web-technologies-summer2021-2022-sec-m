<?php
	session_start();
	if(isset($_COOKIE['status'])) {
?>
<html>
<head>
	<title>FORM</title>
</head>
<body>
	<center>
		<h1>Welcome <?php echo $_SESSION['user']?></h1>
		
		<table>
				<tr>
					<td>
						<br> </br>
							
							<a href="TeacherOwnProfile.php">View Own Profile </a>
						</td>
					</tr>
				    <tr>
						<td>
						<br> </br>
							
							<a href="TeacherList.php">View Teacher Profile </a>
						</td>
					</tr>
					<tr>
						<td>
						<br> </br>
							
							<a href="TeacherProfileUpdate.php"> Update Profile </a>
						</td>
					</tr>
                    
					<tr>
						<td>
						<br> </br>
							
							<a href="CourseList.php">Course List </a>
						</td>
					</tr>
					<tr>
						<td>
						<br> </br>
							
							<a href="ManageBook.php">Manage Book</a>
						</td>
					</tr>
					<tr>
						<td>
						<br> </br>
							<a href="Studentlist.php">Student List </a>
						</td>
					</tr>
					<tr>
						<td>
						<br> </br>
							
							<a href="AddStudentFeedback.php">Feedback </a>
						</td>
					</tr>
					<tr>
						<td>
						<br> </br>
							
							<a href="LogIn.html"> Back </a>
						</td>
					</tr>
                    
					
					<tr>
						<td>
						<br> </br>
							
							<a href="LogOut.php"> Sign out </a>
						</td>
					</tr>

				</table>
		
	</center>

</body>
</html>

<?php
	}
	else {
		header ('location:LogIn.html');
	}
?>