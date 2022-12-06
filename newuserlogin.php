<?php 
    
    $conn = mysqli_connect("localhost","root","","unexplored") or die("Failed to connect the database");
    $usern = $_POST['username'];
    $pass = $_POST['pwd'];
    $email = $_POST['uemail'];
    $contact = $_POST['unumber'];
    $fname = $_POST['name'];
    $select = "select * from login where username='$usern'";
	$result = mysqli_query($conn,$select) or die("Failed to retrieve data");

	if(mysqli_num_rows($result)>0){
		 $response = "<span style='color: red;'>Not Available.</span>";
                    include 'nav.php';?>
                    <div id="middleview">
            <div class="view"><?php
                include 'alert.php';
                warning("Username is already used");
                ?>
                <a href="signin.php" style="color:white; font-weight:bolder;">Login</a>
                </div>
            </div><?php
                   
                                                            
	}
	else{

		 $insert = "insert into login values('$usern','$pass','$email','$contact','$fname')";
    mysqli_query($conn, $insert) or die("Failed to insert login data ");
    ?>
            <?php include 'nav.php'?>
            <div id="middleview">
            <div class="view"><?php
                include 'alert.php';
                insert("New Login Successfull");
                ?>
                </div>
            </div>
            <?php          
	}
	echo $response;
   
?>