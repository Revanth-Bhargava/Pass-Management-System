<html>
<head>
	<title>Attendance History</title>
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
	</tr>
	<tr>
	<td width=20%><a class="f2" href="signup.php"><hr><button class="buttn">Add New Worker</a></button></td>
	<td  rowspan=5>
	<!*********************************************************************************************************************>
	<center><table border=1>
		<tr>
			<th class="f2">DATE</th>
			<th class="f2">LABOURS</th>
			<th class="f2">TECHNIAN</th>
			<th class="f2">ELECTRICIAN</th>
			<th class="f2">ENGINEER</th>
			<th class="f2">TOTAL</th>
		</tr>
		<?php
			include("connection.php");
			$i=0;
			$retrive = "SELECT * FROM attendance";           
			$result = $connect->query($retrive);
			while($row = $result->fetch_assoc())
			{
				{?>
				<tr>
				<td class="f2"><?php echo $row['date']; ?></td>
				<td class="f2"><?php echo $row['labour']; ?></td>
				<td class="f2"><?php echo $row['technician']; ?></td>
				<td class="f2"><?php echo $row['electrician']; ?></td>
				<td class="f2"><?php echo $row['engineer']; ?></td>
				<td class="f2"><?php echo $row['total']; ?></td>
				</tr>
		<?php } 
			}?>
		</table></center>
	<!*********************************************************************************************************************>
	</td>
	</tr>
	<tr><td><a class="f2" href="edit.php"><hr><button class="buttn">Edit Details</a></button></td></tr>
	<tr><td><a class="f2" href="setpay.php"><hr><button class="buttn">Update Pay</a></button></td></tr>
	<tr><td><a class="f2" href="ah.php"><hr><button class="buttn">Attendance History</a></button></td></tr>
	<tr><td><a class="f2" href="renew.php"><hr><button class="buttn">Renew ID</a></button></td></tr>
	</table>
</body>
</html>