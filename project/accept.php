<?php
	$conn = new mysqli('localhost','root','','admission_system');
$id = $_GET['id'];
$accept_student = "UPDATE `student_details` SET `accept`='true' WHERE id = $id";
$upate = mysqli_query($conn,$accept_student);
header('location:http://localhost/project/student_list.php');
