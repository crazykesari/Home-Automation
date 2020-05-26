<?php
   session_start();
   $connection=mysql_connect("localhost","root","abc");
   $db = mysql_select_db("homeautomation",$connection);
   
   //storing session
     $user_check = $_SESSION['login_user'];
//sql query
    $ses_sql = mysql_query("select Email,Name,type from userdata where Email='$user_check'",$connection);
  $row = mysql_fetch_assoc($ses_sql);
  $login_session =$row['Email'];
  $login_name=$row['Name'];
  $type=$row['type'];
  if(!isset($login_session))
  {
	  mysql_close($connection);
	  header('location:login.php');
  }
  else
  {
  }
?>