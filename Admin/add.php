<?php
session_start();
?>
<html>
<title></title>
<head>
<link rel="stylesheet" href="css/frame.css">
<link rel="stylesheet" href="css/app.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
  <div id="title-page">
    <h2>Home Automation</h2>
    </div>	
	</br>
	<div class="show">
      <form action="appregister.php" method="post">
		<?php
		$user_check = $_SESSION['Email'];
	  $connection=mysql_connect("localhost","root","abc");
	  $db = mysql_select_db("homeautomation",$connection);
	   $ses_sql = mysql_query("select Room from userdata where Email='$user_check'",$connection);
	   $row = mysql_fetch_assoc($ses_sql);
       $room = $row['Room'];
	   $count=1;
	   $c=1;
         while($room>0)
		 {
			 echo '<table >
		      <tr>
		    <th><h5>Room:';echo $count;echo '</h5></th>
		        </tr>
				</table>
		 	<div class="app"> ';?>
			 <input id="check"type="checkbox" name="room<?php echo $c; $c++;?>" value="0"checked> Tube Light
             <input id="check"type="checkbox" name="room<?php echo $c;$c++;?>" value ="0"checked> Led
                   <input id="check"type="checkbox" name="room<?php echo $c;$c++;?>" value="0"checked> Fan
				   <input id="check"type="checkbox" name="room<?php echo $c;$c++;?>" value="0"checked> Other 
                  </div></br>
				 <?php 
				  $room=$room-1;
				  $count = $count+1;
		 }
		?>
				  
	<input type="submit" class="btn" value="Submit"name="submit">
</form>
	  </div>	 
</body>
</html>
