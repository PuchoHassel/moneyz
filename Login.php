<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="action_page.php" method="post">
 <!-- <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div> -->
<h1>Login</h1>
    <p>Please Enter your username & password to login.</p>
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

 <!-- <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div> -->
</form>
</body>
</html>

<?php 

 ?>