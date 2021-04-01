<html>
<head>
	<title>Edit Details</title>
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
			height:465px;
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
		<center><br><h2 class="f3"><u>Edit Details</u></h2></center><br>
		<form class ="container" method="post" action="edit2.php">
		<center>
		<table>
			<tr>
				<td class="f2" width=30%> Name: </td>
				<td><input type="text" name="name" id="name" /></td><br><br>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td class="f2" width=30%> Date Of Birth: </td>
				<td><input type="date" name="dob" id="dob" /></td>
			</tr> 
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>		
			<tr>
				<td class="f2" width=30%> Gender: </td>
				<td class="f1">
					<input  type="radio" name="gender" value="Male">MALE 
					<input  type="radio" name="gender" value="Female">FEMALE
				</td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td class="f2" width=30%> Job: </td>
				<td class="f1">
					<input type="radio" name="job" value="Engineer">Engineer
					<input type="radio" name="job" value="Electrician">Electrician
					<input type="radio" name="job" value="Labour">Labour
					<input type="radio" name="job" value="Technician">Technician
				</td>
			</tr> 
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td class="f2" width=30%> Address: </td>
				<td><textarea rows=3 name="add" id="add" /></textarea></td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td class="f2" width=30%> Username: </td>
				<td><input type="text" name="un" id="un" required /></td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td class="f2" width=30%> Password: </td>
				<td><input type="text" name="pass" id="pass" required /></td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td class="f2" width=30%> Phone No.: </td>
				<td><input type="text" name="num" id="num" /></td>
			</tr>
			</table>
			<br><br>
			<center><a href="login.html"><input class="buttn1" type="submit" name="submit" onclick="confirm()" value="SUBMIT"/></a>
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
		include("connection.php");
		if(isset($_POST["submit"]))
		{
			$wid=$_POST["wid"];
			$remove = "DELETE FROM details "."WHERE worker_id=$wid";
			$connect->query($remove);
			$name=$_POST["name"];
			$dob=$_POST["dob"];
			$gen=$_POST["gender"];
			$job=$_POST["job"];
			$add=$_POST["add"];
			$user=$_POST["un"];
			$pass=$_POST["pass"];
			$add = "INSERT INTO details VALUES($wid,'$name','$user','$pass','$job','$dob','$gen','$add');";
			$connect->query($add);
		}
	?>
</body>
</html>