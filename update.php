 <!DOCTYPE html>
<html>
    <head>
        <title>UnExplored Beauty of Nepal</title>
        <link rel="stylesheet" href="style.css"/>
        <script src="main.js"></script>	
	</head>
	<body>
	     <?php 
        session_start();
        include 'nav.php';
        $updte=$_POST["updatep"];
        if($_SESSION["status"]!="Guest"){	
		$conn = mysqli_connect("localhost","root","","unexplored") or die("Failed to connect the database");
		$select = "select * from beauty where ID='$updte'";
		
        $result = mysqli_query($conn,$select) or die("Retrieval Error");
		
		While($arr = mysqli_fetch_array($result)){			
    	?>
		<div id="middle">
            <form action="submitdata.php" method="post" enctype="multipart/form-data" onsubmit="return validate()">
                <label>Full Name: </label><input type="text" name="name" value="<?php echo $arr[0] ?>" size=50 id="pname"/><span id="nspan"></span><br/>
                <label>Email:</label><input type="text" name="email" id="pemail" value="<?php echo $arr[1] ?>" size=50/><span id="espan"></span><br/>
				<label>Place Name:</label><input type="text" name="placename" id="pplace" value="<?php	echo $arr[9] ?>" size=50/><br/>
                <label>Country: </label><input type="text" name="country" value="<?php echo $arr[2] ?>" id="cname"/><span id="cspan"></span>
                <label>Province: </label><input type="text" name="province" value="<?php echo $arr[3] ?>"/>
                <label>District: </label><input type="text" name="district" value="<?php echo $arr[4] ?>" id="dname"/><br/><span id="dspan"></span>
                <label>Other Address Details: </label><input type="text" name="otherdetails" value="<?php echo $arr[5] ?>" size=50 /><br/>
				<label>Insert a Picture of The place: </label><input type="file" id="insert" name="image" value="<?php "$arr[8]"?>"accept="image/*" required/><br/>
				<label>Describe the Place: </label><textarea name="description" ><?php echo $arr[7] ?></textarea><br/>				
				<label>Give Route to the place: </label>
                <textarea  name="route" id="textroute"><?php echo $arr[6] ?></textarea>           
                <input type="submit"  name="submit"  value="Submit"/>
				<input type="hidden" name="iddata" value="<?php echo $updte ?>" />
            </form>
        </div>
        <?php } }else{
            
            ?>
            <div id="middleview">
            <div class="view"><?php
                include 'alert.php';
                warning("Guest Can't Update the content");
                ?>
                <a href="signin.php" style="color:white; font-weight:bolder;">Login</a>
                </div>
            </div>
            <?php          
            }?>
	</body>
</html>