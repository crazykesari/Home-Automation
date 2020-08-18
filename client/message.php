<?php
            echo "<script>";
              echo "alert('Successfully Password Updated')";
              echo "</script>";
			  session_start();
if(session_destroy())
{
//	header("location:login.php");
}
?>
<html>
<title>
</title>
<head>
<meta name="viewport"content="width=device-width,initial-scale=1">
<link rel="stylesheet"type="text/css"href="css/login.css"/>
<link rel="stylesheet"type="text/css"href="css/message.css"/>

<script src="https://kit.fontawesome.com/a81368914c.js"></script>
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
</head>
<body>
  <div id="title-page">
    <h2>Home Automation</h2>
    </div>
	</br>
<img class="back" src="img/11.gif">

<div class="container">
<h5>Your Session Expired!!</h5>
<br>
<p>To Login Again ----><a class="click" href="login.php">Click Here</a></p> 
</div>

</body>
</html>