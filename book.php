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
<div class="allcontain" style="height:1300px;">
	<div class="contact">
		<div class="newslettercontent">
			<div class="leftside">
				
					<div class="contact-form">
						
							<div class="form-group group-coustume">
                            
                            <?php
error_reporting(E_ERROR | E_PARSE);
require_once "connect.php";
?>
<h4>Journey Details</h4>
<table border="10" cellpadding="0" style="border:thick;"  bordercolor="#000000" width="1000" align="center">
<tr align="center" style="background-color:#09a9fa; font-size:16px; color:#fff;">
<th>Date</th> <th>Train No</th> <th>Train Name</th><th>From</th><th>Departure</th><th>To</th><th>Arrival</th>
</tr>
<tr>
<td> <?php echo $adate=$_POST['adate']; ?> </td>
<td> <?php echo $tno=$_POST['tno']; ?> </td>
<td> <?php echo $tname=$_POST['tname']; ?> </td>
<td> <?php echo $fromstation=$_POST['fromstation']; ?> </td>
<td> <?php echo $departure=$_POST['departure']; ?> </td>
<td> <?php echo $tostation=$_POST['tostation']; ?> </td>
<td> <?php echo $arrival=$_POST['arrival']; ?> </td>
</tr>
</table><br>

<form action="payment.php" method="post">
<h4>Select Class </h4>
<select required name="class" class="form-control subject-form">
                                <option value="">Select</option>
                                <option value="2A">2A</option>
                                <option value="3A">3A</option>
                                <option value="SL">SL</option>
                            </select>
   <h4>Total Passenger </h4>   <input type="text" class="form-control name-form" placeholder="Enter Total Passenger" name="totalpassenger">                       
 <h4>Passenger Details </h4>
 <table border="10" cellpadding="0" style="border:thick;"  bordercolor="#000000" width="1000" align="center">
<tr align="center" style="background-color:#09a9fa; font-size:16px; color:#fff;">
<th>S. No.</th> <th>Name *</th> <th>Age </th><th>Gender</th><th>Berth Preference</th>
</tr>
<tr>
    <td>1</td>
    <td> <input type="text" class="form-control name-form" placeholder="Enter Name" name="paname1"> </td>
    <td> <input type="text" class="form-control name-form" placeholder="Enter Age" name="age1"> </td>
    <td> <select class="form-control subject-form" name="gender1" >
                                    <option value="">Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select> </td>
    <td> <select class="form-control subject-form" name="preference1" >
                                    <option value="">Select</option>
                                    <option value="Lower">Lower</option>
                                    <option value="Upper">Upper</option>
                                    <option value="Side Lower">Side Lower</option>
                                    <option value="Side Upper">Side Upper</option>
                                    <option value="Window Lower">Window Lower</option>
                                    <option value="Window Upper">Window Upper</option>
                                </select> </td>
</tr>
<tr>
    <td>2</td>
    <td> <input type="text" class="form-control name-form" placeholder="Enter Name" name="paname2"> </td>
    <td> <input type="text" class="form-control name-form" placeholder="Enter Age" name="age2"> </td>
    <td> <select class="form-control subject-form" name="gender2" >
                                    <option value="">Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select> </td>
    <td> <select class="form-control subject-form" name="preference2" >
                                    <option value="">Select</option>
                                    <option value="Lower">Lower</option>
                                    <option value="Upper">Upper</option>
                                    <option value="Side Lower">Side Lower</option>
                                    <option value="Side Upper">Side Upper</option>
                                    <option value="Window Lower">Window Lower</option>
                                    <option value="Window Upper">Window Upper</option>
                                </select> </td>
</tr>
<tr>
    <td>3</td>
    <td> <input type="text" class="form-control name-form" placeholder="Enter Name" name="paname3"> </td>
    <td> <input type="text" class="form-control name-form" placeholder="Enter Age" name="age3"> </td>
    <td> <select class="form-control subject-form" name="gender3" >
                                    <option value="">Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select> </td>
    <td> <select class="form-control subject-form" name="preference3" >
                                    <option value="">Select</option>
                                    <option value="Lower">Lower</option>
                                    <option value="Upper">Upper</option>
                                    <option value="Side Lower">Side Lower</option>
                                    <option value="Side Upper">Side Upper</option>
                                    <option value="Window Lower">Window Lower</option>
                                    <option value="Window Upper">Window Upper</option>
                                </select> </td>
</tr>
<tr>
    <td>4</td>
    <td> <input type="text" class="form-control name-form" placeholder="Enter Name" name="paname4"> </td>
    <td> <input type="text" class="form-control name-form" placeholder="Enter Age" name="age4"> </td>
    <td> <select class="form-control subject-form" name="gender4" >
                                    <option value="">Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select> </td>
    <td> <select class="form-control subject-form" name="preference4" >
                                    <option value="">Select</option>
                                    <option value="Lower">Lower</option>
                                    <option value="Upper">Upper</option>
                                    <option value="Side Lower">Side Lower</option>
                                    <option value="Side Upper">Side Upper</option>
                                    <option value="Window Lower">Window Lower</option>
                                    <option value="Window Upper">Window Upper</option>
                                </select> </td>
</tr>
<tr>
    <td>5</td>
    <td> <input type="text" class="form-control name-form" placeholder="Enter Name" name="paname5"> </td>
    <td> <input type="text" class="form-control name-form" placeholder="Enter Age" name="age5"> </td>
    <td> <select class="form-control subject-form" name="gender5" >
                                    <option value="">Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select> </td>
    <td> <select class="form-control subject-form" name="preference5" >
                                    <option value="">Select</option>
                                    <option value="Lower">Lower</option>
                                    <option value="Upper">Upper</option>
                                    <option value="Side Lower">Side Lower</option>
                                    <option value="Side Upper">Side Upper</option>
                                    <option value="Window Lower">Window Lower</option>
                                    <option value="Window Upper">Window Upper</option>
                                </select> </td>
</tr>
<tr>
    <td>6</td>
    <td> <input type="text" class="form-control name-form" placeholder="Enter Name" name="paname6"> </td>
    <td> <input type="text" class="form-control name-form" placeholder="Enter Age" name="age6"> </td>
    <td> <select class="form-control subject-form" name="gender6" >
                                    <option value="">Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select> </td>
    <td> <select class="form-control subject-form" name="preference6" >
                                    <option value="">Select</option>
                                    <option value="Lower">Lower</option>
                                    <option value="Upper">Upper</option>
                                    <option value="Side Lower">Side Lower</option>
                                    <option value="Side Upper">Side Upper</option>
                                    <option value="Window Lower">Window Lower</option>
                                    <option value="Window Upper">Window Upper</option>
                                </select> </td>
</tr>
</table>
                          
<input type="text" value="<?php echo $adate=$_POST['adate']; ?>" name="adate" style="display:none;">
<input type="text" value="<?php echo $tno=$_POST['tno']; ?>" name="tno" style="display:none;">
<input type="text" value="<?php echo $tname=$_POST['tname']; ?>" name="tname" style="display:none;">
<input type="text" value="<?php echo $fromstation=$_POST['fromstation']; ?>" name="fromstation" style="display:none;">
<input type="text" value="<?php echo $departure=$_POST['departure']; ?>" name="departure" style="display:none;">
<input type="text" value="<?php echo $tostation=$_POST['tostation']; ?>" name="tostation" style="display:none;">
<input type="text" value="<?php echo $arrival=$_POST['arrival']; ?>" name="arrival" style="display:none;">
<input type="text" value="<?php echo $seat3a=$_POST['seat3a']; ?>" name="seat3a" style="display:none;">
<input type="text" value="<?php echo $fare3a=$_POST['fare3a']; ?>" name="fare3a" style="display:none;">
<input type="text" value="<?php echo $seat2a=$_POST['seat2a']; ?>" name="seat2a" style="display:none;">
<input type="text" value="<?php echo $fare2a=$_POST['fare2a']; ?>" name="fare2a" style="display:none;">
<input type="text" value="<?php echo $seatsl=$_POST['seatsl']; ?>" name="seatsl" style="display:none;">
<input type="text" value="<?php echo $faresl=$_POST['faresl']; ?>" name="faresl" style="display:none;"> <br><br>
<input type="submit" value="Continue" name="submit">
</form>
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