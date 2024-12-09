<?php
session_start(); 
if(isset($_SESSION['username'])){

include_once('connect.php');
if(isset($_POST['submit']))
{
$adate=$_POST['adate'];
$tno=$_POST['tno'];
$tname=$_POST['tname'];
$from=$_POST['fromstation'];
$departure=$_POST['departure'];
$to=$_POST['tostation'];
$arrival=$_POST['arrival'];
$seat3a=$_POST['seat3a'];
$fare3a=$_POST['fare3a'];
$seat2a=$_POST['seat2a'];
$fare2a=$_POST['fare2a'];
$seatsl=$_POST['seatsl'];
$faresl=$_POST['faresl'];


$query=mysql_query("insert into train(adate,tno,tname,fromstation,departure,tostation,arrival,seat3a,fare3a,seat2a,fare2a,seatsl,faresl) values('$adate','$tno','$tname','$from','$departure','$to','$arrival','$seat3a','$fare3a','$seat2a','$fare2a','$seatsl','$faresl')");

if($query>0)
{
	echo "<script>alert('Train Added Successfully!');</script>";
	//header('location:user-login.php');
}
else
{
	echo "<script>alert('Unable to Add Try Again');</script>";
}
}
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
				<li class="active"><a href="admin-dashboard.php">HOME</a> </li>
				<li><a href="addtrain.php">ADD TRAIN</a></li>
                <li><a href="train-list.php">TRAIN LIST</a></li>
                <li><a href="passenger-list.php">PASSENGER LIST</a></li>
                <li><a href="cancel-ticket-list.php">CANCEL TICKETS LIST</a></li>
                <li><a href="user-list.php">USER LIST</a></li>
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
				<img id="image_border" src="image/border1.png" alt="border">
					<div class="contact-form">
						<h1>Add Train</h1>
							<div class="form-group group-coustume">
                            <form method="post">
                            <input type="date" class="form-control name-form" placeholder="Date" name="adate" required>
								<input type="text" class="form-control name-form" placeholder="Train No" name="tno" required>
								<input type="text" class="form-control email-form" placeholder="Train Name" name="tname" required>
                                
                                
                               <select required name="fromstation" class="form-control subject-form">
                                <option value="">From</option>
                                <option value="Coimbatore">Coimbatore</option>
                                <option value="Chennai">Chennai</option>
                                <option value="Bangalore">Bangalore</option>
                            </select>
                            <input type="text" class="form-control subject-form" placeholder="Departure" name="departure" required>
                            <select required name="tostation" class="form-control subject-form">
                            	<option value="">To</option>
                                <option value="Coimbatore">Coimbatore</option>
                                <option value="Chennai">Chennai</option>
                                <option value="Bangalore">Bangalore</option>
                            </select>
                            
							<input type="text" class="form-control subject-form" placeholder="Arrival" name="arrival" required>

                                <input type="text" class="form-control subject-form" placeholder="Seat Available 3A" name="seat3a" required>
                                <input type="text" class="form-control subject-form" placeholder="Fare 3A" name="fare3a" required>
                                <input type="text" class="form-control subject-form" placeholder="Seat Available 2A" name="seat2a" required>
                                <input type="text" class="form-control subject-form" placeholder="Fare 2A" name="fare2a" required>
                                <input type="text" class="form-control subject-form" placeholder="Seat Available SL(Sleeper)" name="seatsl" required>
                                <input type="text" class="form-control subject-form" placeholder="Fare SL(Sleeper)" name="faresl" required>

								<input type="submit" class="btn btn-default btn-submit" value="Submit" name="submit">
                             </form>
							</div>
					</div>
			</div>
			<div class="google-maps">
				<img src="image/side-banner.jpg" />
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