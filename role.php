<html>
	<head> 
		<title> Choosing Role </title> 
		<link rel="stylesheet" type="text/css" href="styles.css">
		<script>
			function display(x)
			{
				if(x==1)
					document.getElementById('n1').style.visibility="visible";
				else if(x==2)
					document.getElementById('n2').style.visibility="visible";
				else if(x==3)
					document.getElementById('n3').style.visibility="visible";
				
			}
			function hide(x)
			{
				if(x==1)
					document.getElementById('n1').style.visibility="hidden";
				else if(x==2)
					document.getElementById('n2').style.visibility="hidden";
				else if(x==3)
					document.getElementById('n3').style.visibility="hidden";
			}
		</script>
	</head>
	
	<body background="img\logo.gif">
	
	
	<table class="login">

		<tr>
			<td align="center" colspan=3><font class="f1">CHOOSE YOUR ROLE</font></td>
		</tr>
		<tr>
			<td onmouseenter="display('1');" onmouseleave="hide('1');"><a href="login.php"><img class="role" src="img\admin.png"></a></td>
			<td onmouseenter="display('2');" onmouseleave="hide('2');"><a href="login.php"><img class="role" src="img\guard.png"></a></td>
			<td onmouseenter="display('3');" onmouseleave="hide('3');"><a href="login.php"><img class="role" src="img\worker.png"></a></td>
		</tr>
		<tr>
			<td>
				<div id="n1" style="visibility:hidden">
					<font class="f2">ADMIN</font>
				</div>
			</td>
			<td>
				<div id="n2" style="visibility:hidden">
					<font class="f2">SECURITY GUARD</font>
				</div>
			</td>
			<td>
				<div id="n3" style="visibility:hidden">
					<font class="f2">WORKER</font>
				</div>
			</td>
		</tr>
		
	</table>		
</html>