<?php
     session_start();
	 $error='';
	 if(isset($_POST['login']))
	 {
		 if(empty($_POST['uname']) || empty($_POST['pass']))
		 {
			 $error="Username or Password is require";
		 }
		 else
		 {
			 $username=$_POST['uname'];
			 $pass=$_POST['pass'];
			 $conn = mysql_connect("localhost","root","abc");
			  $username=stripslashes($username);

			  $pass=stripslashes($pass);
			   $username = mysql_real_escape_string($username);
			    $pass = mysql_real_escape_string($pass);
			  
          $db = mysql_select_db("homeautomation",$conn);
		   $query = mysql_query("select Name,type from userdata where Password='$pass' AND Email='$username'");
		   $rows = mysql_num_rows($query);
		   $rt=mysql_fetch_assoc($query);
		   if($rows==1 && $rt['type'] !='admin' )
		   {
			   $_SESSION['login_user']=$username;
			  
			   header("location:homepage.php");
		   }
			   else
			   {
                    echo "<script>";
					echo "alert('Username or Password invalid');";
                    echo "</script>";					
				   
			   }
			    
		 }
		 mysql_close($conn);
	 }
		 else
		 {
         }            

?>