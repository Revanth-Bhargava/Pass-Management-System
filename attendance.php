<?php session_start(); ?>

<html>
<head>
	<title>Attendance</title>
	<style>
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
		.container 
		{
			width:580px;
			height:430px;
			margin:0 auto;
			padding:10px 35px;
			border:5px solid #3090C7;
			background:#CEECF5; 
		}
	</style>
</head>
<body class="body">
	<?php include("connection.php"); ?>
	<table align=center>
	<tr>
	<td width=20%><img src="img\logo.gif"></td>
	<td><marquee direction="right"><font class="f3"><center>WELCOME</center></font><br><font class="f2"><center>Have a Great Day!!!</center></font></marquee></td>
	</tr>
	<tr>
	<td width=20%><a class="f2" href="g_hp.php"><hr><button class="buttn">Worker Details</a></button></td>
	<td rowspan=10>
	<!*********************************************************************************************************************>
		<center>
			<form method="post" action="attendance.php">
			<font class="f2">Select Date:</font><input type="date" name="date" required><br>
			<br><table border=1>
					<tr>
					</tr>
					<tr>
						<th class="f2">Worker ID</th>
						<th class="f2">Name</th>
						<th class="f2">Attendance</th>
					</tr>
					<?php
					$retrive = "SELECT * FROM details";
					$result = $connect->query($retrive);
					while($row = $result->fetch_assoc())
					{?>
						<tr>
							<td class="f2"><?php echo $row["worker_id"]; ?></td>
							<td class="f2"><?php echo $row["name"]; ?></td>
							<td class="f2"><center><input type="checkbox" name="present[]" value="<?php echo $row["worker_id"]; ?>"></center></td>
						</tr>
					<?php }
					?>
				</table>
				<br><input type="submit" class="buttn1" name="submit" value="SUBMIT"></center>
				</form>
	<!*********************************************************************************************************************>
	</td>
	</tr>
	<tr><td>	</td></tr><tr><td>	</td></tr><tr><td>	</td></tr><tr><td>	</td></tr><tr><td>	</td></tr><tr><td>	</td></tr><tr><td>	</td></tr><tr><td>	</td></tr>
	</table>
	<?php 
	if(isset($_POST["submit"]))
	{
		$_SESSION['at'] = $_POST['present'];
		$tot=$_POST["present"];
		$lab=0;
		$elc=0;
		$eng=0;
		$tec=0;
		foreach($tot as $i)
		{
			$retrive = "SELECT * FROM details";
			$result = $connect->query($retrive);
			while($row = $result->fetch_assoc())
			{
				if($i == $row["worker_id"])
				{
					if($row["post"]=="Engineer")
						$eng++;
					else if($row["post"]=="Electrician")
						$elc++;
					else if($row["post"]=="Technician")
						$tec++;
					else if($row["post"]=="Labour")
						$lab++;
				}
			}
		}
		$date=$_POST["date"];
		$total=$lab+$tec+$elc+$eng;
		$add = "INSERT INTO attendance VALUES('$date',$lab,$tec,$elc,$eng,$total);";
		$connect->query($add);
	}
	?>
</body>
</html>