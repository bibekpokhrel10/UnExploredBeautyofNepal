<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css"/>
		<?php
			$conn = mysqli_connect("localhost","root","","unexplored") or die("Failed to connect the database");
			$uname=$_POST['name'];
			$data=$_POST['iddata'];
			$place=$_POST['placename'];
			$words=$_POST['description'];
            $uemail=$_POST['email'];
            $ucountry=$_POST['country'];
            $uprovince=$_POST['province'];
            $udistrict=$_POST['district'];
            $udetails=$_POST['otherdetails'];
            $uroute=$_POST['route'];
            $filename=time().$_FILES['image']['name'];
			$image = "images/";
            move_uploaded_file($_FILES["image"]["tmp_name"],$image.$filename);
			$updatedata = "update beauty set Name='$uname',Email='$uemail', Country='$ucountry', Province='$uprovince', District='$udistrict',
			PlaceImage='$filename', PlaceName='$place', Description='$words', Route='$uroute' where ID=$data";
			mysqli_query($conn, $updatedata) or die("Error");

			include 'nav.php';	
		?>
	</head>
	<body>
		<div id="middleview">
		<div class="view"><?php
            include 'alert.php';
            insert("Updated Successfully");
            ?>
            </div>
		</div>
	</body>
</html>