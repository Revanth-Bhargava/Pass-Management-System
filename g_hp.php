<?php SESSION_START(); ?>

<html>
<head>
	<title>HomePage</title>
	<style>
		.body
		{
			background:#CEECF5;
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
		.buttn2 
		{
			box-shadow:inset 0px 1px 0px 0px #CEECF5;
			background:linear-gradient(to bottom, #CEECF5 5%, #CEECF5 100%);
			background-color:#CEECF5;
			border:0px solid #2874A6;
			display:inline-block;
			cursor:pointer;
			color:#2874A6;
			font-family:Arial;
			font-size:10px;
			padding:5px 15px;
		}
		.buttn2:hover 
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
	<td><form method="post" action="logout.php"><input class="button" type="submit" name="submit5" value="Logout"></form></td>
	</tr>
	<tr>
	<td width=20%><a class="f2" href="attendance.php"><hr><button class="buttn">Take Attendance</a></button></td>
	<td rowspan=10>
	<!*********************************************************************************************************************>
		<center><table border=1>
		<tr>
			<th class="f2">Worker ID</th>
			<th class="f2">Name</th>
			<th class="f2">Username</th>
			<th class="f2">Gender</th>
			<th class="f2">Job</th>
		</tr>
		<?php
			include("connection.php");
			$i=0;
			$retrive = "SELECT * FROM details";           
			$result = $connect->query($retrive);
			while($row = $result->fetch_assoc())
			{
				{?>
				<tr>
				<td class="f2"><?php echo $row['worker_id']; ?></td>
				<td class="f2"><?php echo $row['name']; ?></td>
				<td class="f2"><?php echo $row['username']; ?></td>
				<td class="f2"><?php echo $row['gender']; ?></td>
				<td class="f2"><?php echo $row['post']; ?></td>
				</tr>
		<?php } 
			}?>
		</table></center>
	<!*********************************************************************************************************************>
	</td>
	</tr>
	<tr><td>	</td></tr><tr><td>	</td></tr><tr><td>	</td></tr><tr><td>	</td></tr><tr><td>	</td></tr><tr><td>	</td></tr><tr><td>	</td></tr><tr><td>	</td></tr>
	</table>
</body>
</html>