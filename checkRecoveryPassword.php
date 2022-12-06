<?php 
    session_start();
    $conn = mysqli_connect("localhost","root","","unexplored") or die("Failed to connect the database");
    $usern = $_POST['username'];
    $contact = $_POST['unumber'];
	$email = $_POST['uemail'];
    $select = "select * from login where username='$usern' and contact='$contact' and email='$email'";
	$result = mysqli_query($conn,$select) or die("Failed to retrieve data");

	if(mysqli_num_rows($result)>0){
		while($arr = mysqli_fetch_array($result)){
                    
                    include 'nav.php';
                    ?>
                    <div id="middleview">
                    <div class="view"><?php
                        include 'alert.php';
                        insert("Your Password is");
                        echo $arr[1];
                        ?>
                        </div>
                    </div>
                    <?php           
            }
	}
	else{
        include 'nav.php';
                    ?>
                    <div id="middleview">
                    <div class="view"><?php
                        include 'alert.php';
                        warning("Your Credientials are wrong");
                        ?>
                        </div>
                    </div>
                    <?php          
	}
   
?>