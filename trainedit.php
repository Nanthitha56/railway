<?php
session_start(); 
if(isset($_SESSION['username'])){
$msg = "";

include_once('connect.php');
$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : "0";

if(isset($_REQUEST['submit'])) {
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

$query1 = "update train set adate='$adate',tno='$tno',tname='$tname',fromstation='$from',departure='$departure',tostation='$to',arrival='$arrival',seat3a='$seat3a',fare3a='$fare3a',seat2a='$seat2a',fare2a='$fare2a',seatsl='$seatsl',faresl='$faresl' where id = ".$id;

if(mysql_query($query1)){
$msg = "Record Updated!";
header('Refresh: 3; URL = train-list.php');
} else {
$msg = "Unable to Update!";
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
<div class="allcontain" style="height:1300px;">
	<div class="contact">
		<div class="newslettercontent">
			<div class="leftside">
				<img id="image_border" src="image/border1.png" alt="border">
					<div class="contact-form">
                    <?php echo $msg; ?> <br>
						<h1>Edit Train</h1>
                        <?php
						$query = "select * from train where id=".$id;
$data = mysql_query($query);
$rec = mysql_fetch_array($data);
						?>
							<div class="form-group group-coustume">
                            <form method="post">
                            Date<br>
                            <input type="date" class="form-control name-form" value="<?php echo $rec['adate']; ?>" name="adate" required>
                            Train No<br>
								<input type="text" class="form-control name-form" name="tno" value="<?php echo $rec['tno']; ?>" required>
                                Train Name<br>
								<input type="text" class="form-control email-form" name="tname" value="<?php echo $rec['tname']; ?>" required>
                                
                                From<br>
                                <input type="text" class="form-control email-form" name="fromstation" value="<?php echo $rec['fromstation']; ?>" required>
                                
                             Departure<br> 
                            <input type="text" class="form-control subject-form" name="departure" value="<?php echo $rec['departure']; ?>" required>
                            To<br>
                            <input type="text" class="form-control email-form" name="tostation" value="<?php echo $rec['tostation']; ?>" required>
                            Arrival<br>
							<input type="text" class="form-control subject-form" name="arrival" value="<?php echo $rec['arrival']; ?>" required>
								Seat Available 3A<br>
                                <input type="text" class="form-control subject-form" name="seat3a" value="<?php echo $rec['seat3a']; ?>" required>
                                Fare 3A<br>
                                <input type="text" class="form-control subject-form" name="fare3a" value="<?php echo $rec['fare3a']; ?>" required>
                                Seat Available 2A<br>
                                <input type="text" class="form-control subject-form" name="seat2a" value="<?php echo $rec['seat2a']; ?>" required>
                                Fare 2A<br>
                                <input type="text" class="form-control subject-form" name="fare2a" value="<?php echo $rec['fare2a']; ?>" required>
                                Seat Available SL(Sleeper)<br>
                                <input type="text" class="form-control subject-form" name="seatsl" value="<?php echo $rec['seatsl']; ?>" required>
                                Fare SL(Sleeper)<br>
                                <input type="text" class="form-control subject-form" name="faresl" value="<?php echo $rec['faresl']; ?>" required>

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