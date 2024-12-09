<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Railway Maintenance Reservation for a Travel Agency System</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
    <style>
table, th, td {
    border: 1px solid black;
	padding:10px;
}
</style>
</head>
<body>
<!-- Header -->
<div class="allcontain">
	<div class="header"><br></div>
	<!-- Navbar Up -->
	<nav class="topnavbar navbar-default topnav">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
					<span class="sr-only"> Toggle navigaion</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand logo" href="#"><img src="image/logo1.png" alt="logo"></a>
			</div>	 
		</div>
		<div class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">
				<li class="active"><a href="index.php">HOME</a> </li>
				<li><a href="newuser.php">NEW USER</a></li>
                <li><a href="user-login.php">LOGIN</a></li>
                <li><a href="admin.php">ADMIN</a></li>
			</ul>
		</div>
	</nav>
</div>
<!--_______________________________________ Carousel__________________________________ -->
<div class="allcontain">
	<div id="carousel-up" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner " role="listbox">
			<div class="item active">
				<img src="image/train.jpg" alt="oldcar">
				<div class="carousel-caption">
					<h2>Welcome to our agency</h2>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-default midle-nav">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed textcostume" data-toggle="collapse" data-target="#navbarmidle" aria-expanded="false">
						<h1>SEARCH TEXT</h1>
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
		</nav>
	</div>
</div>

	<!-- ______________________________________________________Bottom Menu ______________________________-->
	<div class="bottommenu">
		<div class="bottomlogo" align="center">
		 <?php
error_reporting(E_ERROR | E_PARSE);
require_once "connect.php";
$adate=$_POST['adate'];
$fromstation=$_POST['fromstation'];
$tostation=$_POST['tostation'];

$query = "select * from train where fromstation='$fromstation' AND  tostation='$tostation' AND  adate='$adate'";
$data = mysql_query($query);
?>

<table border="10" cellpadding="0" style="border:thick;"  bordercolor="#000000" width="1000" align="center">
<tr align="center" style="background-color:#09a9fa; font-size:16px; color:#fff;">
<th>Date</th> <th>Train No</th> <th>Train Name</th><th>From</th><th>Departure</th><th>To</th><th>Arrival</th><th>Seat 3A</th><th>Fare 3A</th><th>Seat 2A</th><th>Fare 2A</th><th>Seat SL</th><th>Fare SL</th>
</tr>
<?php while($rec = mysql_fetch_array($data)) { ?>
<tr>
<td> <?php echo $rec['adate']; ?> </td>
<td> <?php echo $rec['tno']; ?> </td>
<td> <?php echo $rec['tname']; ?> </td>
<td> <?php echo $rec['fromstation']; ?> </td>
<td> <?php echo $rec['departure']; ?> </td>
<td> <?php echo $rec['tostation']; ?> </td>
<td> <?php echo $rec['arrival']; ?> </td>
<td> <?php echo $rec['seat3a']; ?> </td>
<td> <?php echo $rec['fare3a']; ?> </td>
<td> <?php echo $rec['seat2a']; ?> </td>
<td> <?php echo $rec['fare2a']; ?> </td>
<td> <?php echo $rec['seatsl']; ?> </td>
<td> <?php echo $rec['faresl']; ?> </td>
</tr>
<?php } ?>
</table><br>
<p>For Booking Please <a href="user-login.php"> Login</a> / New user <a href="newuser.php">signup</a></p>
<br><br><br><br>
		</div>
			<div class="footer">
				<div class="copyright">
				  &copy; Copy right 2018 </div>
				<div class="atisda">
					 
				</div>
			</div>
	</div>
</div>

<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/isotope.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> 
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>