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
<div class="allcontain">
	<div class="contact">
		<div class="newslettercontent">
			<div class="leftside">
				<img id="image_border" src="image/border.png" alt="border">
					<div class="contact-form">
						<h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
							
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
header('Refresh: 2; URL = index.php');
}
?>

</body>
</html>