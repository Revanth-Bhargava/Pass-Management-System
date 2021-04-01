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
	<script>
		
		function pop()
		{
			window.alert("Renewal Request Sent!!!");
		}
	
	
	</script>
	</head>
	<body class="body"> 
		<?php include("connection.php"); 
		?>
				<img src="img/logo.gif"><br><br>
		<table class="hp">
		
			<marquee direction="right"><font class="f3">WELCOME</font></marquee>
		
		<div align="right">
		<form method="post" action="logout.php"><input class="button" type="submit" name="submit5" value="Logout"></form>
		</div>
		
			<tr>
				<td rowspan=5 colspan=1><center><img src="img\worker.png" height="125%" width="70%"></center></td>
			</tr>
			<tr><td><form method="post"><a class="f3" ><hr><button type="submit" class="buttn" name="submit1">View Attendance</a></button></form></td>
			<td><?php 
			if(empty($_SESSION['at']))
			{?>
				<a class="f3" >Today's Attendance is not taken !! </a>
			<?php 
			}
			else
			{
			if(!empty($_SESSION['at']))
				$at = $_SESSION['at'];
			if(isset($_POST['submit1']))
			{
				$ret1 = "SELECT * FROM details";
				$res1 = $connect->query($ret1);
				$t = 0;
				$p = 0;
				$t1 ="";
				while($row1 = $res1->fetch_assoc())
				{
					if($row1['username'] == $_SESSION['id'] and $row1['password'] == $_SESSION['pass'] )
					{
						$t = $row1['worker_id'];
						$t1 = $row1['post'];
						
					}
				}
				foreach($at as $f)
				{
					if($f == $t)
					{
						$p = 1;
					}
				}
					if($p == 1)
					{
					?><a class="f3" > PRESENT </a> <?php } ?>
					<?php 
					if($p == 0) 
					{
			?><a class="f3"> ABSENT </a> <?php } }}?>
					
				</td>
			</tr><br>

			<tr><td><form method="post"><a class="f3" ><hr><button type="submit" name="submit2" class="buttn">View Salary</a></button></form></td>
			<td>
			<?php 
				if(empty($_SESSION['id']) and empty($_SESSION['pass']))
				{?>
					<a class="f3" >LOGIN FIRST !!!</a>
				<?php 
				}
				else
				{
					$pay = 0;
					$dw = 0;
					$sal = 0;
					$check = 0;
					if(isset($_POST['submit2']))
					{
						$ret1 = "SELECT * FROM details";
						$res1 = $connect->query($ret1);
						$t = 0;
						$p = 0;
						$t1 ="";
						while($row1 = $res1->fetch_assoc())
						{
							if($row1['username'] == $_SESSION['id'] and $row1['password'] == $_SESSION['pass'] )
							{
								$t = $row1['worker_id'];
								$t1 = $row1['post'];
						
							}
						}
						$ret2 = "SELECT * FROM pay";
						$res2 = $connect->query($ret2);
						while($row2 = $res2->fetch_assoc())
						{
							if($row2['role'] == $t1)
							{
								$pay = $row2['pay'];
								
							}
						}
					
						$ret3 = "SELECT * FROM working_days";
						$res3 = $connect->query($ret3);
						while($row3 = $res3->fetch_assoc())
						{
							if($row3['worker_id'] == $t)
							{
								$dw = $row3['days worked'];
								$check = 1;
							}
						}
						 $sal = $dw * $pay;
			
						}
						if($check == 1){
						?><a class="f3"> <?php echo "₹".$sal."/-"?></a>
				<?php }} ?>
			</td>
			</tr><br>
			<tr><td><form action="det.php" method="post"><a class="f3" ><hr><button type="submit" name="submit3" class="buttn">View Details</a></button></form></td></tr><br>
			<tr><td><form method="post"><a class="f3" ><hr><button name="submit4" type="submit" class="buttn" onclick="pop()">ID Renewal</a></button></form></td><td>
			<?php 
					if(empty($_SESSION['id']) and empty($_SESSION['pass']))
					{?>
						<a class="f3" >LOGIN FIRST !!!</a>
					<?php 
					}
					else
					{
					if(isset($_POST['submit4']))
					{
						$ret1 = "SELECT * FROM details";
						$res1 = $connect->query($ret1);
						$t = 0;
						$p = 0;
						$t1 = "";
						$t2 = "";
						while($row1 = $res1->fetch_assoc())
						{
							if($row1['username'] == $_SESSION['id'] and $row1['password'] == $_SESSION['pass'] )
							{
								$t = $row1['worker_id'];
								$t2 = $row1['name'];
								$t1 = $row1['post'];
						
							}
						}
						$ret = "INSERT INTO renewal VALUES('$t','$t2','$t1')";
						$connect->query($ret);
					}
					}
			?></td>
			</tr><br><hr>
			</table>
		
	</body>
</html>