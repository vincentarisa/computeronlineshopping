<?php include('server.php') ?>
<!DOCTYPE html>
<html>
 <head>
     <title>Registration </title>
	 <link rel="stylesheet" type="text/css" href="styles.css">
	 <style>

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
	border-radius:2px;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
li a:hover {
    background-color: #111;
}
.active {
    background-color: #4CAF50;
}

#footer{
	display:float;
	background-color:#0099FF;
	margin-top:300px;
	text-align:center;
	border-radius:2px;
}
</style>	
 </head>
 <header>
     <ul>
         <li><a class="active" href="index.php">Home</a></li>
         <li><a href="register.php">Signup</a></li>
		  <li style="float:right"><a href="login.php">Login</a></li>
         <li><a href="about.php">About</a></li>
     </ul>
</header>
  <body>
      <div class="header">
	  <h2>Register</h2>
  </div>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
    <div class="input-group">
      <label>Phone number</label>
      <input type="text" name="phoneno" value="<?php echo $phoneno; ?>">

  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>

  </body>
</html>
