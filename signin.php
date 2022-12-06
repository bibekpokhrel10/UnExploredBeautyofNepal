<!DOCTYPE html>
<html>
    <head>

        <?php 
        session_start();
        include 'nav.php';?>
    <style>
         input.larger {
        height: 20px;
      }
      </style>
    </head>
    <body>
        <div id="middleview">
            <div id="loginform">
            <h1> Login </h1>
            <form action="userlogin.php" method="post"> 
            <label><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg></label>
            <input type="text" name="username" placeholder="Username" id = "lname" required/><br/><span id="u1"></span><br/>
            <label><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
  <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
</svg></label>
<input type="password" name="pwd" id="pwd1" placeholder="Password"  required/><br/><span id="p1"></span><br/>
<input type="checkbox" onclick="myFunction()" class="larger" style="width:20px;"><label>show Password</label></br>
            <input type="submit" name="submit" value="Login"/><br/>
            <label>Create New Account </label><a href="newloginform.php">Sign Up!</a>
			<br/>
			<label>Forgot Password</label><a href="recoveryPassword.php">Recover Password</a>
        </form>
        </div>
        </div>
    </body>
</html>

