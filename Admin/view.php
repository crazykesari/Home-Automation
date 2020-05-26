<?php
include('session.php');
?>
<html>
<title></title>
<head>
<link rel="stylesheet" href="css/frame.css">
<link rel="stylesheet" href="css/view.css">
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
<div class="container">
<?php

    if(isset($_POST['view']))
	{
		$id=$_POST['username'];
		$all  = $_POST['all'];
		$connection=mysql_connect("localhost","root","abc");
		$db=mysql_select_db("homeautomation",$connection);
        echo " <table >";
        echo "<tr>";
        echo "<th>Sno</th>";
        echo "<th>Name</th>";
        echo "<th>Username</th>";
        echo "<th>Mobile</th>";
        echo " <th>Room</th>";
        echo "</tr>";

		if(!empty($id))
		{
			$s="select * from userdata where Email='$id'";
			$resource=mysql_query($s);
			$rows=mysql_num_rows($resource);
			$i=1;
			for($i=1;$i<=$rows;$i++)
			{
				$p = mysql_fetch_assoc($resource);
				echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$p['Name']."</td>";
                echo "<td>".$p['Email']."</td>";
                echo "<td>".$p['Mobile']."</td>";
                echo " <td>".$p['Room']."</td>";
                echo "</tr>";	
		  				
            }				
			echo "</table>";
			echo "</div>";
			
		}
				if(!empty($all)&&empty($id))
		{
			$s="select * from userdata";
			$resource=mysql_query($s);
			$rows=mysql_num_rows($resource);
			$i=1;
			for($i=1;$i<=$rows;$i++)
			{
				$p = mysql_fetch_assoc($resource);
				echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$p['Name']."</td>";
                echo "<td>".$p['Email']."</td>";
                echo "<td>".$p['Mobile']."</td>";
                echo " <td>".$p['Room']."</td>";
                echo "</tr>";	
		  				
            }				
			echo "</table>";
			echo "</div>";
			
		}
			if(!empty($all)&&!empty($id))
		        {
			$s="select * from userdata";
			$resource=mysql_query($s);
			$rows=mysql_num_rows($resource);
			$i=1;
			for($i=1;$i<=$rows;$i++)
			{
				$p = mysql_fetch_assoc($resource);
				echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$p['Name']."</td>";
                echo "<td>".$p['Email']."</td>";
                echo "<td>".$p['Mobile']."</td>";
                echo " <td>".$p['Room']."</td>";
                echo "</tr>";	
		  				
            }				
			echo "</table>";
			echo "</div>";
			
		}
	}
		?>

</body>
</html>