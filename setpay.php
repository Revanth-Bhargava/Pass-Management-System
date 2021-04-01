<html>
<head>
	<title>Set Pay</title>
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
		<center><h2 class="f3"><u>Set Pay</u></h2></center>
		<form class = "container" method="post" action="setpay.php">
		<center>
		<table>
			<tr>
				<td class="f2" width=20%> Engineer: </td>
				<td><input type="text" name="eng" id="eng" /></td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td class="f2" width=20%> Electrician: </td>
				<td><input type="text" name="ele" id="ele" /></td><br><br>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td class="f2" width=20%> Labourer: </td>
				<td><input type="text" name="lab" id="lab" /></td><br><br>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td class="f2" width=20%> Technician: </td>
				<td><input type="text" name="tec" id="tec" /></td><br><br>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			</table><br>
			<center><a href="login.html"><input class="buttn1" type="submit" name="submit" id="submit" value="SUBMIT"/></a>
			</center>
		</center>
		</form>
	<!*********************************************************************************************************************>
		</td>
	</tr>
	<tr><td><a class="f2" href="edit.php"><hr><button class="buttn">Edit Details</a></button></td></tr>
	<tr><td><a class="f2" href="setpay.php"><hr><button class="buttn">Update Pay</a></button></td></tr>
	<tr><td><a class="f2" href="ah.php"><hr><button class="buttn">Attendance History</a></button></td></tr>
	<tr><td><a class="f2" href="renew.php"><hr><button class="buttn">Renew ID</a></button></td></tr>
	</table>
	<?php
		if(isset($_POST["submit"]))
		{
			if(!empty($_POST["eng"]))
			{
				$pay=$_POST["eng"];
				$change = "UPDATE pay "."SET pay=$pay "."WHERE role='Engineer'";
				$connect->query($change);
			}
			if(!empty($_POST["ele"]))
			{
				$pay=$_POST["ele"];
				$change = "UPDATE pay "."SET pay=$pay "."WHERE role='Electrician'";
				$connect->query($change);
			}
			if(!empty($_POST["lab"]))
			{
				$pay=$_POST["lab"];
				$change = "UPDATE pay "."SET pay=$pay "."WHERE role='Labour'";
				$connect->query($change);
			}
			if(!empty($_POST["tec"]))
			{
				$pay=$_POST["tec"];
				$change = "UPDATE pay "."SET pay=$pay "."WHERE role='Technician'";
				$connect->query($change);
			}
		}
	?>
</body>
</html>