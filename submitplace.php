<!DOCTYPE html>
<html>
    <head>
        <?php 
        session_start();
        include 'nav.php';?>
    </head>
    <body>
        <div id="middleview">
<?php    
       
       
        if($_SESSION["status"]!="Guest"){	
        if(isset($_POST['submit'])){
            $conn=mysqli_connect("localhost","root","","unexplored") or die("Failed to connect to database");
      		$place=$_POST['placename'];
            $words=$_POST['description'];
            $uname=$_POST['name'];
            $uemail=$_POST['email'];
            $ucountry=$_POST['country'];
            $uprovince=$_POST['province'];
            $udistrict=$_POST['district'];
            $udetails=$_POST['otherdetails'];
            $uroute=$_POST['route'];
            $filename=time().$_FILES['image']['name'];
		      	$image = "images/";
            move_uploaded_file($_FILES["image"]["tmp_name"],$image.$filename);
            $user = $_SESSION["status"];
            $insert="insert into  beauty (Name,Email,Country,Province,District,OtherDetails,Route,Description,PlaceImage,PlaceName,user) 
		      	values('$uname','$uemail','$ucountry','$uprovince','$udistrict','$udetails','$uroute','$words','$filename','$place','$user')";
            $input = mysqli_query($conn,$insert) or die("Failed to insert into table");
            if($input){
                ?><div class="view"><?php
                include 'alert.php';
                insert("Record Submitted Successfully");
                ?>
                </div><?php ;                 
            }
 }}else{
            
        ?>
        <div id="middleview">
        <div class="view"><?php
            include 'alert.php';
            warning("Please login to submit the data");
            ?>

            <a href="signin.php" style="color:white; font-weight:bolder;">Login</a>
            </div>
        </div>
        <?php          
        }?>
        </div>
    </body>
 </html>