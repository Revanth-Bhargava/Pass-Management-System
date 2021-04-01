<?php 
		include('connection.php');
		SESSION_START();
		$message = "";
		$t = 0;
		if(isset($_POST['submit']))
		{
			$ret = "SELECT * FROM details";
			$ret1 = "SELECT * FROM admin";
			$ret2 = "SELECT * FROM guard";
			$res = $connect->query($ret);
			$res1 = $connect->query($ret1);
			$res2 = $connect->query($ret2);
			while($row = $res->fetch_assoc())
			{
				if($row['username'] == $_POST['myname'] and $row['password'] == $_POST['mypass'])
				{
					$_SESSION['id'] = $_POST['myname'];
					$_SESSION['pass'] = $_POST['mypass'];
					$t = 1;
				}
				else 
					$message = "Invalid username or password !";
			}
			while($row1 = $res1->fetch_assoc())
			{
				if($row1['username'] == $_POST['myname'] and $row1['password'] == $_POST['mypass'])
				{
					$_SESSION['id'] = $_POST['myname'];
					$_SESSION['pass'] = $_POST['mypass'];
					$t = 2;
				}
				else 
					$message = "Invalid username or password !";
			}
			while($row2 = $res2->fetch_assoc())
			{
				if($row2['username'] == $_POST['myname'] and $row2['password'] == $_POST['mypass'])
				{
					$_SESSION['id'] = $_POST['myname'];
					$_SESSION['pass'] = $_POST['mypass'];
					$t = 3;
				}
				else 
					$message = "Invalid username or password !";
			}
		}
		
		if($t == 1)
		{
			if(isset($_SESSION['id']))
			{
				header("Location:w_hp.php");
			}
		}
		if($t == 2)
		{ 
			if(isset($_SESSION['id']))
			{
				header("Location:a_hp.php");
			}
		}
		if($t == 3)
		{ 
			if(isset($_SESSION['id']))
			{
				header("Location:g_hp.php");
			}
		}
		
			
				
		

?>


<html>
	<head> 
		<title> Login Form </title> 
		<style>
		
.login 
{
	position:absolute;
	top:170px;
	left:270px;
	border: 1px;
	border-collapse: collapse;
	width:60%;
	height:50%;
	text-align:center;
	padding: 10px;
	background-color: #FFFFFF;
	table-layout: fixed;
}

.hp 
{
	margin-left:auto;
	margin-right:auto;
	border: 0px;
	border-collapse: collapse;
	width:60%;
	height:50%;
	padding: 10px;
	background-color: #FFFFFF;
	table-layout: fixed;
}

.f1 
{
	font-size: 40px;
	color: #2874A6;
	font-weight:bold;
	text-decoration:underline;
}

.f2 
{
	font-size: 20px;
	color: #2874A6;
	font-weight:bold;
}

.f3 
{
	font-size: 30px;
	color: #2874A6;
	font-weight:bold;
	text-decoration:none;
}

input 
{
	background-color: #FFFFFF;
	color: #2874A6;
	border: 1px solid #2874A6;
	padding: 15px;
	text-align: left;
	font-size: 15px;
	border-radius: 5px;
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

.role 
{
	height:60%;
	width:70%;
}

.role:hover 
{
	border-radius: 50%;
	box-shadow: 0 0 2px 1px;
}
.container 
{
	width:980px;
    margin:0 auto;
    padding:10px 35px;
    border:5px solid #3090C7;
    background:#CEECF5; 
}
.buttn {
	box-shadow:inset 0px 1px 0px 0px #CEECF5;
	background:linear-gradient(to bottom, #CEECF5 5%, #CEECF5 100%);
	background-color:#CEECF5;
	border-radius:6px;
	border:1px solid #84bbf3;
	display:inline-block;
	cursor:pointer;
	color:#CEECF5;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:5px 15px;
	text-decoration:none;
}
.buttn:hover {
	background:linear-gradient(to bottom, #80b5ea 5%, #bddbfa 100%);
	background-color:#CEECF5;
}
.buttn:active {
	position:relative;
	top:1px;
}
hr
{
	border:5px solid #3090C7;
	
}

		
		</style>
	</head>
	
	<body background="img\logo.gif">
	
	<form action="" method="post">
	<table class="login">
		<tr>
		<td align="center" colspan=2><div align="center"><a class="f3"><?php if($message!=""){ echo $message; } ?> </a> </div></td>
		</tr>
		<tr>
			<td align="center" colspan=2><font class="f1">LOGIN</font></td>
		</tr>
		<tr>
			<td><font class="f2">EMAIL : </font></td>
			<td><input type="text" name="myname" id="myname" placeholder="Enter Your Email" required /></td>
		</tr>
		<tr>
			<td><font class="f2">PASSWORD : </font></td>
			<td><input type="password" name="mypass" id="mypass" placeholder="Enter Your Password" required /></td>
		</tr>
		<tr>
			<td align="center" colspan="2" width=40%><input class="button" type="submit" name="submit" id="submit" value="Login"/>
			<input class="button" type="reset" name="reset" id="reset" value="Reset"/></td>
		</tr>
		
	</table>	
	</form>
	
</body>
</html>

