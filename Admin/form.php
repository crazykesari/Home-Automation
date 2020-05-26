<?php
session_start();
?>
<html>
<title>
New Registration
</title>
<head>
<meta name="viewport"content="width=device-width,initial-scale=1">
<link rel="stylesheet"type="text/css"href="css/form.css"/>
<script src="https://kit.fontawesome.com/a81368914c.js"></script>
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<script src="jquery-ui.js"></script>
<script src="bootstrap.js"></script>
</head>
<body>
  <div id="title-page">
    <h2>Home Automation</h2>
    </div>
	</br>
  <img class="wave3" src="img/wave2.jpg">
  <br/>
  <div class="container">
    <div class="img">
	  <img src="img/form-back2.jpg">
	  </div>
	  <div class="login-container">
	    <form action="" method="post">
		     <h2>New Registration</h2>
			 <input type="text"class="input"placeholder="Name"name="Name">
			 <input type="email"class="input"placeholder="Email"name="Email" id="username">
			 <span id="availability"></span>
             <input type="numeric" placeholder="Mobile"name="number">
			  <div class="room">
			           <h5>Room:</h5>
								 <select name="room">
								 <option>1</option>
								 <option>2</option>
								 <option>3</option>								 
								 </select>
								 </div>
			 <input type="submit"class="btn"name="Register"value="Register">
			 
		  </form>
		  </div>
		  </div>

</body>
</html>


<script>
$(document).ready(function(){
	$('#username').blur(function()
	{
       var username=$(this).val();
        $.ajax({
         url:"sent.php",
         method="POST",
         data:{Email:username},
         dataType:"VARCHAR",
         success:function(html)
         {
           $('#availabilty').html(html);
		 }
		});
	});		
});
</script>

<?php
if(isset($_POST['Register']))
{
	$user = $_POST['Email'];
	$con = mysql_connect("localhost","root","abc");
	$db = mysql_select_db("homeautomation",$con);
	$check = mysql_query("select Email from userdata where Email = '$user'",$con);
	  $row = mysql_fetch_assoc($check);
	  echo $row['Email'];
	if($user == $row['Email'])
	{
		echo "<script>";
		echo "alert('Email is already registered')";
		echo "</script>";
	}
	else
	{
		$_SESSION['Name'] = $_POST['Name'];
	    $_SESSION['Email'] = $_POST['Email'];
	    $_SESSION['room']=$_POST['room'];
	    $_SESSION['mobile']=$_POST['number'];
		header("location:sent.php");
	}
}
		?>