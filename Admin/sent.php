<?php
    session_start();
	$name = $_SESSION['Name'];
	$email = $_SESSION['Email'];
	$room = $_SESSION['room'];
	$mobile = $_SESSION['mobile'];		
	$pas=123;
	$mu=$room*4;
   if(isset($email))
   {
	   require 'PHPMailerAutoload.php';
	   $mail = new PHPMailer;
	   $mail -> Host = 'smtp.gmail.com';
	   $mail -> Port = 587;
	   $mail -> SMTPAuth = true; 
	   $mail -> SMTPSecure = 'tls';
	   $mail -> Username = 'akesarwani558@gmail.com';
	   $mail -> Password = '9335118218';
	   $mail -> setFrom('n0-reply@homesolution.com','Home Automation');
	   $mail -> addAddress($email);
	   $mail -> IsSMTP(true);
	   $mail -> SMTPDebug = 3;
	   $mail -> Subject = "Smart Solution";
	   $mail -> Body = "Hello $name,
	   
Your Account is Successfully Created in Home Solution.
You Choose the $room Room Package means $mu connection.

Username=$email 
Password=123

Thank you
Home Automation";

$connection=mysql_connect("localhost","root","abc");
$check=mysql_select_db("homeautomation",$connection);

$data = mysql_query("insert into userdata values('$name','$email','$mobile','$pas','client','$room')",$connection);	   
	   if($mail ->send() && $data )
	   {
           $d=mysql_query("insert into ro(Email) Values('$email')",$connection);
		   header('location:add.php');
       }

  } 
?>