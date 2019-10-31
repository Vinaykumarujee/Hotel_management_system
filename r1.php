<?php
include("connection.php");
 $r=$_GET['room'];
$ci=$_GET['ci'];
$co=$_GET['co'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home (Hotel Management)</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="img/LOGO.png" type="img/icon" rel="icon">
</head>
<body>
	<div id="full">
		<div id="bg" style="background-image: url('img/bed.jpg'); height: 1200px;">
		<div id="header">
			<div id="logo">
				<h1><font color="white">My Project</font></h1>
			</div>
			<div id="nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="contect.php">Contect Us</a></li>
					<li><a href="bms.php">BOOK MY STAY</a></li>
					<li><a href="index.php#OH">Our Hotel</a></li>
					<li><a href="tac.php">T&C </a></li>
				</ul>
			</div>
		</div>
		<div id="banner">
			<div id="form">
				<form action="r1.php" method="post">
			<table style="color: yellow;">
				<?php
						$q2 = "SELECT * FROM room WHERE status = 'unbook'";
                        $run = mysqli_query($a,$q2); //or die (mysqli_error());
						if(!$run)
						{
							printf("Error: %s\n", mysqli_error($a));
							//exit();
						}
                        $row = mysqli_fetch_array($run, MYSQLI_ASSOC);// or die(mysqli_error());
                        $rno = $row['rno'];
                        $q = "select rno from room where status='unbook'";
                        $run = mysqli_query($a,$q);// or die(mysqli_error());
                        $num = mysqli_num_rows($run);// or die(mysqli_error());
                        echo $num;
                        if($r<=$num)
                        {
                        	?>
                        	<tr>
					<td>Status</td>
					<td><input type="text" name="Status" value="Available" disabled="disabled" title="Status"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="Name" placeholder="Enter Name" title="Name"></td>
					<td>ID no.</td>
					<td><input type="text" name="Id" placeholder="Enter ID" title="ID"></td>
				</tr>
				
				<tr>
					<td>City</td>
					<td><select name="city">
						<option>--select--</option>
						<option>Mumbai</option>
						<option>Delhi</option>
						<option>Bengrulu</option>
					</select></td>
				</tr>
				<tr>
					<td>District</td>
					<td><select name="dis">
						<option>--select--</option>
						<option>Mumbai</option>
						<option>Delhi</option>
						<option>Bengrulu</option>
					</select></td>
				</tr>
				<tr>
					<td>State</td>
					<td><select name="state">
						<option>--select--</option>
						<option>Maharashtra</option>
						<option>Delhi</option>
						<option>A.P</option>
					</select></td>
				</tr>
				<tr>
					<td>Enter E-mail</td>
					<td><input type="text" name="email" placeholder="Enter E-mail" title="E-mail"></td>
				</tr>
				<tr>
					<td>Checkin date</td>
					<td><input type="text" name="coin" value="<?php echo $ci;  ?>" title="Check in"></td>
					<td>Check out</td>
					<td><input type="text" name="coout" value="<?php echo $co;  ?>" title="Check out"></td>
				</tr>
				<tr>
					<td>Enter Members</td>
					<td><input type="text" name="mem" placeholder="Enter Members" title="Members"></td>
				</tr>
				<td>
					<td><input style="width: 120px; height: 30px; border-radius: 20px; opacity: 0.7" type="submit" name="submit" value="submit"></td>
				</td>

                    <?php    }
                    else
                    {
                    	?>
                           <tr>
					<td>Status</td>
					<td><input type="text" name="Status" value="Not- Available" disabled="disabled" title="Status"></td>
				</tr>          
                    	<?php
                    }
				
				?>
				
				
			</table>
		</form>
		<?php
        if(isset($_POST['submit']))
        {
        	$name=$_POST['Name'];
        	$id=$_POST['Id'];
            $city=$_POST['city'];
        	$dis=$_POST['dis'];
        	$state=$_POST['state'];
            $email=$_POST['email'];
            $coin=$_POST['coin'];
        	$coout=$_POST['coout'];
        	$m=$_POST['mem'];


        		if(mysqli_query($a,"insert into f1 (`name`, `city`, `dis`, `state`, `email`, `cidate`, `codate`, `m`, `idno`) values('$name','$city','$dis','$state','$email','$coin','$coout','$m','$id')"))
        		{
        			mysqli_query($a,"update room set status='Book' where rno=$rno");
        			header("Location:fi.php");
        		}
        		else
        		{
        			echo "data not insert";
        		}
       }
       
		?>			</div>
		</div>
	</div>
	</div>
	
  </div>
</body>

</html>