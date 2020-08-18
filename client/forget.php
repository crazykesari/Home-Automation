<?php 
session_start();
?>
<html>
<title>
</title>
<head>
<meta name="viewport"content="width=device-width,initial-scale=1">
<link rel="stylesheet"type="text/css"href="css/forgot.css"/>

<script src="https://kit.fontawesome.com/a81368914c.js"></script>
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
</head>
<body>
  <div id="title-page">
    <h2>Home Automation</h2>
    </div>
	</br>
<div class="container">
  <h5> Forgot Your Password?</h5>
  <br>
  <p> Don't worry. Resetting your password is easy,just tell us the email address you registered with Home Automation. </p>
   <form action="" method="post">
     <input type="email" class="input" name="email"placeholder="Email">
     <input type="submit"name="submit"Value="Send"class="btn">	 
	</form>
 </div>	
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
	if(isset($_POST['email']))
	{
		$_SESSION['Email'] = $_POST['email'];
			header("location:sent.php");
	}
	else
	{
		echo "<script>";
		echo "alert('Email is Require')";
		echo "</script>";
	}
}
?>