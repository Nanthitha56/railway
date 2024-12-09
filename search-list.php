<?php session_start(); 
if(isset($_SESSION['username'])){
?>
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
    <link rel="stylesheet" type="text/css" href="style/contactstyle.css">
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
				<li class="active"><a href="user-dashboard.php">HOME</a> </li>
				<li><a href="search-train.php">SEARCH TRAIN</a></li>
                <li><a href="pnr-status.php">PNR STATUS</a></li>
                <li><a href="cancel-ticket.php">CANCEL TICKET</a></li>
                <li><a href="mybooking.php">MY BOOKINGS</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
			</ul>
		</div>
	</nav>
</div>
<!--_______________________________________ Carousel__________________________________ -->
<div class="allcontain">
	<div id="carousel-up" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner " role="listbox">
			<div class="item active">
				<img src="image/train-banner.jpg">
			</div>
		</div>
	</div>
</div>
<div class="allcontain" style="height:1000px;">
	<div class="contact">
		<div class="newslettercontent">
			<div class="leftside">
				
					<div class="contact-form">
						<h1>Train List</h1>
							<div class="form-group group-coustume">
                            
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
<th>Date</th> <th>Train No</th> <th>Train Name</th><th>From</th><th>Departure</th><th>To</th><th>Arrival</th><th>Seat 3A</th><th>Fare 3A</th><th>Seat 2A</th><th>Fare 2A</th><th>Seat SL</th><th>Fare SL</th><th>Book</th>
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
<td> <?php echo $rec['seat3a']; ?></td>
<td> <?php echo $rec['fare3a']; ?> </td>
<td> <?php echo $rec['seat2a']; ?> </td>
<td> <?php echo $rec['fare2a']; ?> </td>
<td> <?php echo $rec['seatsl']; ?></td>
<td> <?php echo $rec['faresl']; ?> </td>
<td> 

<form action="book.php" method="post">
<input type="text" value="<?php echo $rec['adate']; ?>" name="adate" style="display:none;">
<input type="text" value="<?php echo $rec['tno']; ?>" name="tno" style="display:none;">
<input type="text" value="<?php echo $rec['tname']; ?>" name="tname" style="display:none;">
<input type="text" value="<?php echo $rec['fromstation']; ?>" name="fromstation" style="display:none;">
<input type="text" value="<?php echo $rec['departure']; ?>" name="departure" style="display:none;">
<input type="text" value="<?php echo $rec['tostation']; ?>" name="tostation" style="display:none;">
<input type="text" value="<?php echo $rec['arrival']; ?>" name="arrival" style="display:none;">
<input type="text" value="<?php echo $rec['seat3a']; ?>" name="seat3a" style="display:none;">
<input type="text" value="<?php echo $rec['fare3a']; ?>" name="fare3a" style="display:none;">
<input type="text" value="<?php echo $rec['seat2a']; ?>" name="seat2a" style="display:none;">
<input type="text" value="<?php echo $rec['fare2a']; ?>" name="fare2a" style="display:none;">
<input type="text" value="<?php echo $rec['seatsl']; ?>" name="seatsl" style="display:none;">
<input type="text" value="<?php echo $rec['faresl']; ?>" name="faresl" style="display:none;">
<input type="submit" value="Book" name="submit">
</form>
</td>
</tr>
<?php } ?>
</table><br>
							</div>
					</div>
			</div>
			
		</div>

	</div>
</div>
<div class="footer">
	<div class="copyright">
		&copy; Copy right 2018	</div>
	<div class="atisda">
		 
	</div>
</div>

<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> <script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<?php }else{
	echo "Please login with user account...";
header('Refresh: 2; URL = admin.php');
}
?>
</body>
</html>