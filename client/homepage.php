<?php
include('session.php');
?>
<html>
<title></title>
<head>
<meta name="viewport"content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/home.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
  <div class="nav">
  <div id="title-page">
    <h2>Home Automation</h2>
      </div>
	  <div class="uname">
	  </br></br>
	  <h2><?php echo $login_name; ?></h2>
    </div>
 <div class="bar">
<input type="checkbox" id="check">
<label for="check">
<i class="fas fa-times" id="cancel"></i>
<i class="fas fa-bars" id="btn"></i>
</label>
<div class="sidebar">
<header>My App</header>
<ul>
<li><a href="homepage.php"class='home'><i class="fas fa-qrcode"></i>Dashboard</a></li>
<li><a href="service.php"><i class="fas fa-sliders-h"></i>Services</a></li>
<li><a href="chpas.php"class='home'><i class="fas fa-key"></i>Change Password</a></li>
<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
</ul>
</div>
</div>
    
</div>
</br>
<img class="wave" src="img/home.jpg">
</body>
</html>