<?php

require "opps1.php";
	$data['fname'] = $_POST['fname'];
	$data['lname'] = $_POST['lname'];
	$data ['address'] = $_POST['address'];
	$data['contact'] = $_POST['contact'];
	$data['gender'] = $_POST['gender'];
	$data['email'] = $_POST['email'];
	$data['mothername'] = $_POST['mothername'];
	$data['fathername'] = $_POST['fathername'];

	
		
if(isset($_POST['studentsave'])){
	$data['slname'] = $_POST['slname'];
	$data['class'] = $_POST['class'];
	$data['rollnm'] = $_POST['rollnm'];

	studentRecord($data);	
}elseif(isset($_POST['teachersave'])){
	$data['classes'] = $_POST['classes'];
	$data['sub'] = $_POST['sub'];
	teacherRecord($data);

}else{
	header("Location:http://localhost/php/opps3.php");
}


	
	



?>