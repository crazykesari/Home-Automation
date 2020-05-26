<?php
session_start();
 	   if(isset($_POST['submit']))
	   {
	  $user_check = $_SESSION['Email'];
	  $room = $_SESSION['room'];
      $connection=mysql_connect("localhost","root","abc");
	  $db = mysql_select_db("homeautomation",$connection);
		 	if($room==1)
		       {
	         $check=mysql_query("Update ro set Ab='$_POST[room1]',Ac='$_POST[room2]',Ad='$_POST[room3]',Ae='$_POST[room4]' where Email='$user_check'",$connection);
            					     

					 if($check)
					 {
						 header('location:appliances.php');
					   }
			   }					   
		if($room==2)
		 {
	 $check=mysql_query("Update ro set Ab='$_POST[room1]',Ac='$_POST[room2]',Ad='$_POST[room3]',Ae='$_POST[room4]',Ba='$_POST[room5]',Bb='$_POST[room6]',Bc='$_POST[room7]',Bd='$_POST[room8]' where Email='$user_check'",$connection);
            					     

					 if($check)
					   {

						 header('location:appliances.php');
					   }
		 }
		 
		 if($room==3)
		    {
	    $check=mysql_query("Update ro set Ab='$_POST[room1]',Ac='$_POST[room2]',Ad='$_POST[room3]',Ae='$_POST[room4]',Ba='$_POST[room5]',Bb='$_POST[room6]',Bc='$_POST[room7]',Bd='$_POST[room8]',Ca='$_POST[room9]',Cb='$_POST[room10]',Cc='$_POST[room11]',Cd='$_POST[room12]' where Email='$user_check'",$connection);
            					     

					 if($check)
					   {
						 header('location:appliances.php');
					   }
		 }
					   
	   }
	   
?>