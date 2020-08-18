<?php 
     include('forget.php');
     $email = $_SESSION['Email'];
$connection=mysql_connect("localhost","root","abc");
$check=mysql_select_db("homeautomation",$connection);	
$rt = mysql_query("select Name from userdata where Email = '$email'",$connection);
$row = mysql_fetch_assoc($rt);
$name = $row['Name'];  
     if(isset($email))
   {
	   require 'PHPMailerAutoload.php';
	   $mail = new PHPMailer;
	   $mail -> Host = 'smtp.gmail.com';
	   $mail -> Port = 587;
	   $mail -> SMTPAuth = true; 
	   $mail -> SMTPSecure = 'tls';
	   $mail -> Username = 'harshkesarwani37@gmail.com';
	   $mail -> Password = '7081916009';
	   $mail -> setFrom('n0-reply@homesolution.com','Home Automation');
	   $mail -> addAddress($email);
	   $mail -> IsSMTP(true);
	   $mail -> SMTPDebug = 3;
	   $mail -> Subject = "Smart Solution";
	   $mail -> Body = "Hello $name,
	   
Your Password reset Successfully in Home Automation.

Username=$email 
Password=123

Thank you
Home Automation";


$query = mysql_query("update userdata set Password = 123 where Email = '$email'",$connection);
if($query && $mail ->send()) 
{
	header("location:message1.php");
}
else
{
	header("location:error.php");
}
   }
?>