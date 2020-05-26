<?php
include('transfer.php');
?>
<html>
<title>
Login Panel
</title>
<head>
<meta name="viewport"content="width=device-width,initial-scale=1">
<link rel="stylesheet"type="text/css"href="css/login.css"/>

<script src="https://kit.fontawesome.com/a81368914c.js"></script>
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
</head>
<body>
  <div id="title-page">
    <h2>Home Automation</h2>
    </div>
	</br>
<img class="wave" src="img/wave.jpg">
  <div class="container">
    <div class="img">
	  <img src="img/login-back2.jpg">
	  </div>
	  <div class="login-container">
	    <form action="" method="post">
		<img class="avtar"src="img/avtar.png">
		<h2>Admin</h2>
		<div class="input-div one">
		<div class="i">
		  <i class="fas fa-user"></i>
		  </div>
		  <div>
		  <!--<h5>Username</h5>-->
		  <input class="input" placeholder="Username"type="text"name="uname">
		  </div>
		  </div>
	    <div class="input-div two">
		<div class="i">
		  <i class="fas fa-lock"></i>
		  </div>
		  <div>
		 <!--<h5>Password</h5>-->
		  <input class="input"placeholder="Password" type="password"name="pass">
		  </div>
		  </div>
		  <input type="submit" class="btn" value="Login" name="login">
		  
		  </form>
		  </div>
		  </div>
		  <script type="text/javascript" src ="js/login.js"></script>
</body>
</html>

