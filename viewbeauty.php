<!DOCTYPE html>
<html>
    <head>
        <?php
        session_start();
         include 'nav.php';?>
    </head>
    <body>
		  <form action="#" method="post">
            <div id="searchbox">
		          	<input type="text" name="search" placeholder="Search a place"/>
		          	<input type="submit" name="subsearch" value="Search"/>		
			        <input type="submit" name="viewall" value="View All"/>
			<?php if($_SESSION["status"]!="Guest"){	?>
					<input type="submit" name="mypost" value="View My Beauty"/>
			<?php } ?>
           </div>
	  	</form>

      <div id="middleview">
         <?php
			  	$conn = mysqli_connect("localhost","root","","unexplored") or die("Failed to connect the database");

			  	function viewallplace(){
			    	$conn = mysqli_connect("localhost","root","","unexplored") or die("Failed to connect the database");
			    	$select = "select * from beauty";
            $result = mysqli_query($conn,$select) or die("Retrieval Error");
            if(mysqli_num_rows($result)>0){
                  while($arr = mysqli_fetch_array($result)){
			          	?>
				          	<h2 style='font-size:40px'><?php echo "$arr[9]"?></h2>
                    <br/><img src='images/<?php echo "$arr[8]"?>' alt='pic' width='500px'></br>
				          	 <div class="viewstyle">
                         <h3>Description</h3>
                          <p><?php echo "$arr[7]"?></p>
                     </div>
                     <div class="viewstyle">
                          <h3>Address</h3>
                          <label>Country: </label><input type="text" value="<?php echo $arr[2]?>" readonly />
							          	<label>Province: </label><input type="text" value="<?php echo $arr[3]?>" readonly />
                          <label>District: </label><input type="text" value="<?php echo $arr[4]?>" readonly /><br/>
						          		<label>OtherDetails: </label><input type="text" value="<?php echo $arr[5]?>" size=50 readonly />                                                                 
                      </div>
				        			<div class="viewstyle">
				              		<h3>Route</h3>
                          <p><?php echo "$arr[6]"?></p>
                      </div>
                       <div>
                          <h3>By <?php echo "$arr[0]"?></h3>
						  <h3>Email: <?php echo "$arr[1]"?></h3>
                       </div>
					          	<hr/>	
				             <?php }
              }
              else{
                  ?><div class="view"><?php
                    include 'alert.php';
                    warning("No Record Found");
                    ?>
                    </div><?php
              }				
		  		}


        if(isset($_POST['mypost'])){
          $conn = mysqli_connect("localhost","root","","unexplored") or die("Failed to connect the database");
			    	$select = "select * from beauty";
            $result = mysqli_query($conn,$select) or die("Retrieval Error");
            if(mysqli_num_rows($result)>0){
                  while($arr = mysqli_fetch_array($result)){
                    if($_SESSION["status"]==$arr[11]){
			          	?>
				          	<h2 style='font-size:40px'><?php echo "$arr[9]"?></h2>
                    <br/><img src='images/<?php echo "$arr[8]"?>' alt='pic' width='500px'></br>
				          	 <div class="viewstyle">
                         <h3>Description</h3>
                          <p><?php echo "$arr[7]"?></p>
                     </div>
                     <div class="viewstyle">
                          <h3>Address</h3>
                          <label>Country: </label><input type="text" value="<?php echo $arr[2]?>" readonly />
							          	<label>Province: </label><input type="text" value="<?php echo $arr[3]?>" readonly />
                          <label>District: </label><input type="text" value="<?php echo $arr[4]?>" readonly /><br/>
						          		<label>OtherDetails: </label><input type="text" value="<?php echo $arr[5]?>" size=50 readonly />                                                                 
                      </div>
				        			<div class="viewstyle">
				              		<h3>Route</h3>
                          <p><?php echo "$arr[6]"?></p>
                      </div>
                       <div>
                          <h3>By <?php echo "$arr[0]"?></h3>
						  <h3>Email: <?php echo "$arr[1]"?></h3>
                       </div>
					          	<form action="#" method="post">
					            	<input type="hidden" name="delete" value="<?php echo $arr[10] ?>"/>
				  	          	<input type="submit" name="deleteplace" value="Delete" />
				          		</form>
			          			<form action="update.php" method="post">
					            	<input type="hidden" name="updatep" value="<?php echo $arr[10]?>"/>
					             	<input type="submit" name="updateplace" value="update"/>
					          	</form>
					          	<hr/>	
				             <?php }
            
        }}}
				
				
				if(isset($_POST['viewall'])){
					viewallplace();
        }
				
				if(isset($_POST['subsearch'])){
					$placesearch = $_POST['search'];
					$searchitem = "select * from beauty where PlaceName='$placesearch'";
					$data = mysqli_query($conn, $searchitem) or die("Didnot found the searched item");
          if(mysqli_num_rows($data)>0){
			  		while($arr = mysqli_fetch_array($data)){
				  	?>
				    	<h2 style='font-size:40px'><?php echo "$arr[9]"?></h2>
              <br/><img src='images/<?php echo "$arr[8]"?>' alt='pic' id="imagepic" width='500px'></br>
					    <div class="viewstyle">
                 <h3>Description</h3>
                 <p><?php echo "$arr[7]"?></p>
              </div>
              <div class="viewstyle">
                 <h3>Address</h3>
                 <label>Country: </label><input type="text" value="<?php echo $arr[2]?>" readonly />
  						   <label>Province: </label><input type="text" value="<?php echo $arr[3]?>" readonly />
                 <label>District: </label><input type="text" value="<?php echo $arr[4]?>" readonly /><br/>
								 <label>OtherDetails: </label><input type="text" value="<?php echo $arr[5]?>" size=50 readonly />                                                                
              </div>
							<div class="viewstyle">
				    		<h3>Route</h3>
                <p><?php echo "$arr[6]"?></p>
              </div>
              <div>
                <h3>By <?php echo "$arr[0]"?></h3>
				<h3>Email: <?php echo "$arr[1]"?></h3>
              </div>
              <form action="#" method="post">
					      <input type="hidden" name="delete" value="<?php echo $arr[9] ?>"/>
					    	<input type="submit" name="deleteplace" value="Delete" />
					  	</form>
              <form action="update.php" method="post">
					      <input type="hidden" name="updatep" value="<?php echo $arr[10]?>"/>
                <input type="submit" name="updateplace" value="update"/>
			      	</form>
					  	<hr/>		
            <?php }
          }
          else {
            ?><div class="view"><?php
            include 'alert.php';
            warning("No Record Found");
            ?>
            </div><?php
          }	                 
				  
				}
				
				if(isset($_POST['deleteplace'])){
          if($_SESSION["status"]!="Guest"){
					$placedelete = $_POST['delete'];
					$deleteitem = "delete from beauty where ID='$placedelete'";
					$del =  mysqli_query($conn, $deleteitem) or die("Did not found the searched item");
            if($del){
              ?><div class="view"><?php
              include 'alert.php';
              insert("Record Deleted Successfully");
              ?>
              </div><?php          
            }
            else{
                include 'alert.php';
                insert("Not found");
           }
          }else{
            ?>
            <div id="middleview">
            <div class="view"><?php
                include 'alert.php';
                warning("Guest Can't Delete the content");
                ?>
                <a href="signin.php" style="color:white; font-weight:bolder;">Login</a>
                </div>
            </div>
            <?php          
          }				
				}


				if(!isset($_POST['viewall']) && !isset($_POST['subsearch']) && !isset($_POST['deleteplace']) && !isset($_POST['mypost'])){
					viewallplace();
				}?>	
        </div>		
    </body>
</html>