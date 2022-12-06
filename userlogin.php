<?php 
    session_start();
    $conn = mysqli_connect("localhost","root","","unexplored") or die("Failed to connect the database");
    $usern = $_POST['username'];
    $pass = $_POST['pwd'];
    $select = "select * from login where username='$usern' and password='$pass'";
	$result = mysqli_query($conn,$select) or die("Failed to retrieve data");

	if(mysqli_num_rows($result)>0){
		while($arr = mysqli_fetch_array($result)){
                    $_SESSION["status"]=$usern;
                    include 'nav.php';
                    ?>
                    <div id="middleview">
                    <div class="view"><?php
                        include 'alert.php';
                        insert("Welcome");
                        echo $_SESSION["status"];
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
                        warning("Username or Password is Wrong");
                        ?>
                        <a href="signin.php" style="color:white; font-weight:bolder;">Login</a>
                        </div>
                    </div>
                    <?php          
	}
   
?>