<?php  
session_start();
$_SESSION["status"]="Guest";
include 'nav.php';
                    ?>
                    <div id="middleview">
					
                    <div class="view"><?php
                        include 'alert.php';
                        insert("Sucessfully Logged Out");
                        ?>
                        </div>
</div>
      