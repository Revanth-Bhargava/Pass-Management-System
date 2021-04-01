<?php SESSION_START(); ?>

<html>
<head>
	<title>HomePage</title>
	<style>
	hr
	{
		border:5px solid #3090C7;
	
	}
		.body
		{
			background:#CEECF5;
		}
		
		.f3
		{
			font-size: 30px;
			color: #2874A6;
			font-weight:bold;
			text-decoration:none;
		}
		.f2
		{
			font-size: 19px;
			color: #2874A6;
			font-weight:bold;
			text-decoration:none;
		}
		.button 
		{
			background-color: #FFFFFF;
			color: #2874A6;
			border: 2px solid #2874A6;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 15px;
			border-radius: 15px;
		}
		.button:hover
		{
			background-color: #2874A6;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 15px;
			border-radius: 15px;
		}
		.buttn1 
		{
			box-shadow:inset 0px 1px 0px 0px #CEECF5;
			background:linear-gradient(to bottom, #CEECF5 5%, #CEECF5 100%);
			background-color:#CEECF5;
			border-radius:20px;
			border:3px solid #2874A6;
			display:inline-block;
			cursor:pointer;
			color:#2874A6;
			font-family:Arial;
			font-size:18px;
			font-weight:bold;
			padding:5px 15px;
		}
		.buttn1:hover 
		{
			background:linear-gradient(to bottom, #80b5ea 5%, #bddbfa 100%);
			background-color:#CEECF5;
		}
		.buttn 
		{
			box-shadow:inset 0px 1px 0px 0px #CEECF5;
			background:linear-gradient(to bottom, #CEECF5 5%, #CEECF5 100%);
			background-color:#CEECF5;
			border-radius:20px;
			border:0px solid #2874A6;
			display:inline-block;
			cursor:pointer;
			color:#2874A6;
			font-family:Arial;
			font-size:18px;
			font-weight:bold;
			padding:5px 15px;
		}
		.buttn:hover 
		{
			background:linear-gradient(to bottom, #80b5ea 5%, #bddbfa 100%);
			background-color:#CEECF5;
		}
		.buttn:active 
		{
			position:relative;
			top:1px;
		}
		.container 
		{
			width:400px;
			height:300px;
			margin:0 auto;
			padding:10px 35px;
			border:5px solid #3090C7;
			background:#CEECF5; 
		}
		input[type=text] 
		{
			background: transparent;
			border: none;
			border-bottom: 2px solid #3090C7;
		}
	</style>
</head>
<body class="body">
	<?php include("connection.php"); ?>
	<table align=center>
	<tr>
	<td width=20%><img src="img\logo.gif"></td>
	<td><marquee direction="right"><font class="f3"><center>WELCOME</center></font><br><font class="f2"><center>Have a Great Day!!!</center></font></marquee></td>
	<td>	<a align="right" class="f2"><form method="post" action="logout.php"><input class="button" type="submit" value="Logout" name="submit6"></input></form></td>
	</tr>
	<tr>
	<td width=20%><a class="f2" href="signup.php"><hr><button class="buttn">Add New Worker</a></button></td>
	<td  rowspan=5>
	<!*********************************************************************************************************************>
	<center>
	<table>
	<font class="f2">
		<tr>
		<td><font class="f2">Number of Workers:</font></td>
		<td><center><font class="f2">
				<?php
				$i=0;
				$retrive = "SELECT * FROM details";           
				$result = $connect->query($retrive) or die($connect->error);
				while($row = $result->fetch_assoc())
					$i++;
				echo $i;
				?>
			</font></center></td>
			
			<td rowspan=2><img src="img/admin.png"></td>
		</tr>
		<tr>
		<td><font class="f2">Number of Renewal Requests:		</font></td>
		<td><center><font class="f2">
				<?php
				$i=0;
				$retrive = "SELECT * FROM renewal";           
				$result = $connect->query($retrive) or die($connect->error);
				while($row = $result->fetch_assoc())
					$i++;
				echo $i;
				?>
			</font></center></td>
			
		</tr>
	</table>
	</center>
	<!*********************************************************************************************************************>
	</td>
	</tr>
	<tr><td><a class="f2" href="edit.php"><hr><button class="buttn">Edit Details</a></button></td></tr>
	<tr><td><a class="f2" href="setpay.php"><hr><button class="buttn">Update Pay</a></button></td></tr>
	<tr><td><a class="f2" href="ah.php"><hr><button class="buttn">Attendance History</a></button></td></tr>
	<tr><td><a class="f2" href="renew.php"><hr><button class="buttn">Renew ID</a></button></td></tr>
</body>
</html>