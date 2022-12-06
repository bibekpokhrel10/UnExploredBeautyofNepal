<!DOCTYPE html>
<html>
    <head>
        <title>UnExplored Beauty of Nepal</title>
        <link rel="stylesheet" href="style.css"/>
        <style type="text/css">
            .viewstyle{
                font-size: 24px;
                color:white;
                font-weight: bolder;
            }
        .viewstyle input[input="text"]{
            border:none;
        }
            
        </style>
        <script src="main.js"></script>	
        <script>
            function myFunction() {
  var x = document.getElementById("pwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
} 
        </script>
       
	</head>
	<body>
	     <?php 
        session_start();
        include 'nav.php';
        $user = $_SESSION['status'];
        $conn = mysqli_connect("localhost","root","","unexplored") or die("Failed to connect the database");
			    	$select = "select * from login where username='$user'";
            $result = mysqli_query($conn,$select) or die("Retrieval Error");
            if(mysqli_num_rows($result)>0){
                  while($arr = mysqli_fetch_array($result)){
			          	?>
				          
                    
				          	 <div class="viewstyle">
                                   
                               <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
<form action="editprofile.php" method="post">
                         <label>Name</label><p><?php echo "$arr[4]"?></p>
                  </div>
                  <div class="viewstyle">
                  <label>Email</label><br/><?php echo $arr[2] ?>
                  </div>
                  <div class="viewstyle">
                  <label>Contact Number</label><br/><?php echo $arr[3]?>
                  </div>
                  <div class="viewstyle">
                  <label>UserName</label><br/><?php echo $arr[0]?>
                  </div>
                  <div class="viewstyle">
                  <label>Password</label><br/><input type="password" value="<?php echo $arr[1]?>" size=50 id="pwd" readonly /><br/>
                          <input type="checkbox" onclick="myFunction()">Show Password  </br>
                  </div>
                  <div class="viewstyle">
                          <input type="submit" value="Edit" />
</form>
                                   </div>                                                            
				             <?php }
              }
              else{
                  ?><div class="view"><?php
                    include 'alert.php';
                    warning("No Record Found");
                    ?>
                    </div><?php
              }	?>
    </body>
</html>			