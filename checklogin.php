<?php 
 $conn = mysqli_connect("localhost","root","","unexplored") or die("Failed to connect the database");
    $usern = $_POST['username'];
    $pass = $_POST['pwd'];
    $select = "select * from login where username='$usern'";
	$result = mysqli_query($conn,$select) or die("Failed to retrieve data");
	if(mysqli_num_rows($result)<0){
		$response = "Wrong username";
	}else{
		$select = "select * from login where password='$pass'";
		$result = mysqli_query($conn,$select) or die("Failed to retrieve data");
		if(mysqli_num_rows($result)<0){
		$response = "Wrong password";
		}
	}
	echo $response;
?>