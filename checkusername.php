<?php 
 $conn = mysqli_connect("localhost","root","","unexplored") or die("Failed to connect the database");
    $usern = $_POST['username'];
    $select = "select * from login where username='$usern'";
	$result = mysqli_query($conn,$select) or die("Failed to retrieve data");

	if(mysqli_num_rows($result)>0){
		 $response = "<span style='color: red;'>Not Available.</span>";                                                            
	}else{
		$response = "<span style='color: Green;'>Available.</span>";
	}
	echo $response;
?>