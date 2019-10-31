<?php
include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>BMS</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="img/LOGO.png" type="img/icon" rel="icon">
	
	
</head>
<body>
	<div id="full">
		<div  style="background-image: url('img/bms.jpg');background-size: 100% 710px; width: 100%; height: 710px">
		<div id="header">
			<div id="logo">
				<h1><font color="white">My Project</font></h1>
			</div>
			<div id="cl"><input type="button" name="btn" id="btn"></div>
			<div id="nav">
				<ul id="a1">
					<li><a href="index.php">Home</a></li>
					<li><a href="contect.php">Contect Us</a></li>
					<li><a href="bms.php">BOOK MY STAY</a></li>
					<li><a href="index.php#OH">Our Hotel</a></li>
					<li><a href="tac.php">T&C</a></li>
				</ul>
			</div>
		</div>
		<div id="banner"></div>
	<center>
	<div style="background:rgba(255,255,255,.5); width: 80%;">
		
		<div id="f1">
		<form action="r1.php" method="get">
		<center><table>
			<tr>
				<th width="20%" height="50px">Destination</th>
				<th width="20%" height="50px">Check In Date</th>
				<th width="20%" height="50px">Check Out Date</th>
				<th width="20%" height="50px">Room</th>
				<td rowspan="2"><input type="submit" value="Check" name="sub"></td>
			</tr>
			<tr>
				<td width="20%" height="50px"><center><input type="text" name="d1" placeholder="Enter Destination"></center></td>
				<td width="20%" height="50px"><center><input type="date" name="ci"></center></td>
				<td width="20%" height="50px"><center><input type="date" name="co"></center></td>
				<td width="20%" height="50px">
					<center><select name="room">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select></center>
				</td>
			</tr>
		</table></center>
	</form>
	</div>
	
	</div>
	</center>
	</div>
  </div>
</body>

</html>