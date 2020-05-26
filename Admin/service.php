<?php
include('session.php');
?>
<html>
<title></title>
<head>
<link rel="stylesheet" href="css/service.css">
<link rel="stylesheet" href="css/popup.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
  <div class="nav">
  <div id="title-page">
    <h2>Home Automation</h2>
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
<li><a href="homepage.php"><i class="fas fa-qrcode"></i>Dashboard</a></li>
<li><a href="service.php"><i class="fas fa-sliders-h"></i>Services</a></li>
<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
</ul>
</div>
</div>
</div>
</br>
<img src="img/back1.jpg"class="wave">
 <div id="parent">
		   <div class="child">
		      <p class="font"><a class="link"href="form.php">Add Client</a></p>
		      </div>
		   <div class="child">
		   		      <p class="font"><span id="myBtn"class="link">View Client</span></p>
		      </div>
		   <div class="child">
		   		      <p class="font"><span id="myBtn1"class="link">Delete Client</a></p>
		      </div>
                                       
		
             </div>

   <div id="popview">
  <div id="myModal" class="modal">
  <div class="modal-content">
 <span class="close0"></span>
    <form action="view.php"name="vform"method="post"style="text-align:center; font-size:30px">
	   <p>Username</p>
	   <input type="text"name="username"></br></br>
	   <span style="color:blue;font-size:20px; font-family:sans-serif;border:1px solid blue"><b>OR</b></span></br>
	   </br> <p>Total</p>
	   <input type="text"name="all"value="All" ></br></br>
	   <input type="submit"name="view" value="Submit">
	  </form>
  </div>

</div>
</div>

 <div id="popdel">
<div id="myModal1" class="modal">
  <div class="modal-content">
     <span class="close1"></span>
	      <form action=""method="post"name="delform" onsubmit="return Validate()"style="text-align:center; font-size:25px">
    	 <p>Username</p>
	   <input type="text"name="id"></br></br>
	   <input type="submit"name="del" value="Submit">
	  </form>
  </div>
<script>

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close0")[0];
btn.onclick = function() {
    modal.style.display = "block";
}


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1||event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</div>
</body>
</html>
  <script>
  var modal1 = document.getElementById('myModal1');
  var btn1 = document.getElementById("myBtn1");
  var span1 = document.getElementsByClassName("close1")[0];

  btn1.onclick = function() {
    modal1.style.display = "block";
}  
span.onclick = function() {
    modal1.style.display = "none";
}  
  window.onclick = function(event) {
    if (event.target == modal1||event.target==modal) {
        modal1.style.display = "none";
		modal.style.display="none";
    }
}

  function Validate()
  {
	  var check = document.delform.id.value;
	  if(check=="")
	  {
		  alert("Username is required");
		  return false;
	  }
  }
  
  </script>
  
 <?php
  $connection=mysql_connect("localhost","root","abc");
  $db = mysql_select_db("homeautomation",$connection);
   if(isset($_POST['del']))
   {
	   
      $username = $_POST['id'];
	  $check = mysql_query("select Email from userdata where Email='$username'");
	  $row=mysql_fetch_assoc($check);
	  
	  if($row['Email']==$username)
	  {
         $ch = mysql_query("delete from userdata where Email = '$username'");
         $c = mysql_query("delete from ro where Email = '$username'");
          if($ch)
		  {
			  if($c)
			  {
				  echo "<script>";
		  echo "alert('Successfully Deleted')";
		  echo "</script>";
          			  
	  }
		  }
	  }
	  else
	  {
		  echo "<script>";
		  echo "alert('Username is not exist')";
		  echo "</script>";
	  }
   }
 ?>