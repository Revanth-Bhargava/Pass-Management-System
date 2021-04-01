<?php 
		SESSION_START();

?>

<html>
	<head>
		<title> Homepage </title> 
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
		.button 
		{
			background-color: #2874A6;
			color: #FFFFFF;
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
			background-color:#FFFFFF ;
			color: #2874A6;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 15px;
			border-radius: 15px;
		}
		.container 
		{
			width:980px;
			height:335px;
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
		<body class="body">
			<?php
			include('connection.php');
			if(empty($_SESSION['id']) and empty($_SESSION['pass']))
					{?>
						<a class="f3" >LOGIN FIRST !!!</a>
					<?php 
					}
			else
			{
			if(isset($_POST['submit3']))
								{
									$ret1 = "SELECT * FROM details";
									$res1 = $connect->query($ret1);
									while($row = $res1->fetch_assoc())
									{
										if($row['username'] == $_SESSION['id'] and $row['password'] == $_SESSION['pass'] )
										{ ?>
									<div class="container">
									<center>
									<table >
										<tr> <td><a class="f3">WORKER ID :<?php echo $row['worker_id'] ?></a></td></tr>
										<tr> <td><a class="f3">NAME :<?php echo $row['name'] ?></a></td></tr>
										<tr> <td><a class="f3">USER ID :<?php echo $row['username'] ?></a></td></tr>
										<tr> <td><a class="f3">POST :<?php echo $row['post'] ?></a></td></tr>
										<tr> <td><a class="f3">DOB :<?php echo $row['dob'] ?></a></td></tr>
										<tr> <td><a class="f3">GENDER :<?php echo $row['gender'] ?></a></td></tr>
										<tr> <td><a class="f3">ADDRESS :<?php echo $row['address'] ?></a></td></tr>
									</table><br><br><br>
									<a href="w_hp.php"><button  class="button">BACK</button></a>
									</center>
									</div>
										<?php	
									
										}
									}
								} 
			}	
?>
									
									
			
		</body>
		</html>
		