<!DOCTYPE html>
<html>
    <head>
      <?php 
      session_start();
      include 'nav.php';?>       
      <script src="main.js"></script>
    </head>
    <?php if($_SESSION["status"]!="Guest"){	?>
    <body>       
        <div id="middle">
            <form action="submitplace.php" method="post" enctype="multipart/form-data" onkeyup="return validate()">
                <label>Full Name: </label><input type="text" name="name" id="pname"/><span id="nspan"></span><br/>
                <label>Email:</label><input type="email" name="email" id="pemail"/><span id="espan"></span><br/>
			        	<label>Place Name:</label><input type="text" name="placename" id="pplace"/><br/>
                <label>Country: </label><input type="text" name="country" value="Nepal" id="cname"/><span id="cspan"></span>
                <label>Province: </label><input type="text" name="province"/>
                <label>District: </label><input type="text" name="district" id="dname"/><span id="dspan"></span><br/>
                <label>Other Address Details: </label><input type="text" name="otherdetails" /><br/>
		        		<label>Insert a Picture of The place: </label><input type="file" id="insert" name="image" accept="image/*"/><br/>
			        	<label>Describe the Place: </label><textarea name="description" placeholder="Explain the beauty with words.."></textarea><br/>				
				        <label>Give Route to the place: </label>
                <textarea  name="route" placeholder="How to Reach there(Route).." id="textroute"></textarea>           
                <input type="submit"  name="submit"  value="Submit"/>
            </form>
        </div>	
    </body>
    <?php } else{
        ?>
        <div id="middleview">
        <div class="view"><?php
            include 'alert.php';
            warning("Please login to Add the beauty");
            ?>

            <a href="signin.php" style="color:white; font-weight:bolder;">Login</a>
            </div>
        </div>
        <?php          
    }?>
</html>