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
						
							<div class="form-group group-coustume">
                            
                            <?php
error_reporting(E_ERROR | E_PARSE);
require_once "connect.php";
$class=$_POST['class'];
$totalpassenger=$_POST['totalpassenger'];
$fare3a=$_POST['fare3a'];
$fare2a=$_POST['fare2a'];
$faresl=$_POST['faresl'];

$seat3a=$_POST['seat3a'];
$seat2a=$_POST['seat2a'];
$seatsl=$_POST['seatsl'];

if($class == '2A')
{
	$total=$fare2a * $totalpassenger ;
	//echo $total;
}

if($class == '3A')
{
	$total=$fare3a * $totalpassenger ;
	//echo $total;
}

if($class == 'SL')
{
	$total=$faresl * $totalpassenger ;
	//echo $total;
}
//echo "<h4> Total Price </h4>". $total;

if($seat2a >= 200)
{
$pnrstatus = "Confirmed";
}
else
{
$pnrstatus = "W/L";
}


if($seat3a >= 200)
{
$pnrstatus = "Confirmed";
}
else
{
$pnrstatus = "W/L";
}

if($seatsl >= 500)
{
$pnrstatus = "Confirmed";
}
else
{
$pnrstatus = "W/L";
}


if($class == '2A')
{
	$coach = 'A1';
}

if($class == '3A')
{
	$coach = 'B1';
}

if($class == 'SL')
{
	$coach = 'S1';
}
									

?>

<?php
if(isset($_POST['booksubmit']))
{
	
$adate=$_POST['adate'];
$tno=$_POST['tno'];
$tname=$_POST['tname'];
$fromstation=$_POST['fromstation'];
$departure=$_POST['departure'];
$tostation=$_POST['tostation'];
$arrival=$_POST['arrival'];

$seat3a=$_POST['seat3a'];
$seat2a=$_POST['seat2a'];
$seatsl=$_POST['seatsl'];

$paname1=$_POST['paname1'];
$age1=$_POST['age1'];
$gender1=$_POST['gender1'];
$preference1=$_POST['preference1'];

$seat1=$_POST['seat1'];
if (empty($paname1)) {
    $seat1=0;
}

$paname2=$_POST['paname2'];
$age2=$_POST['age2'];
$gender2=$_POST['gender2'];
$preference2=$_POST['preference2'];
$seat2=$_POST['paname2'];
if (empty($paname1)) {
    $seat2=0;
}


$paname3=$_POST['paname3'];
$age3=$_POST['age3'];
$gender3=$_POST['gender3'];
$preference3=$_POST['preference3'];
$seat3=$_POST['seat3'];
if (empty($paname3)) {
    $seat3=0;
}

$paname4=$_POST['paname4'];
$age4=$_POST['age4'];
$gender4=$_POST['gender4'];
$preference4=$_POST['preference4'];
$seat4=$_POST['seat4'];
if (empty($paname4)) {
    $seat4=0;
}

$paname5=$_POST['paname5'];
$age5=$_POST['age5'];
$gender5=$_POST['gender5'];
$preference5=$_POST['preference5'];
$seat5=$_POST['seat5'];
if (empty($paname5)) {
    $seat5=0;
}

$paname6=$_POST['paname6'];
$age6=$_POST['age6'];
$gender6=$_POST['gender6'];
$preference6=$_POST['preference6'];
$seat6=$_POST['seat6'];
if (empty($paname6)) {
    $seat6=0;
}
$coach=$_POST['coach'];
$totalprice=$_POST['totalprice'];
$totalpassenger=$_POST['totalpassenger'];
$selectedclass=$_POST['selectedclass'];
$pnrno=$_POST['pnrno'];
$pnrstatus=$_POST['pnrstatus'];

$username=$_POST['username'];


$query=mysql_query("insert into booking(adate,tno,tname,fromstation,departure,tostation,arrival,paname1,age1,gender1,	preference1,seat1,paname2,age2,gender2,	preference2,seat2,paname3,age3,gender3,	preference3,seat3,paname4,age4,gender4,	preference4,seat4,paname5,age5,gender5,	preference5,seat5,paname6,age6,gender6,	preference6,seat6,coach,totalprice,totalpassenger,selectedclass,pnrno,pnrstatus,username) values('$adate','$tno','$tname','$fromstation','$departure','$tostation','$arrival','$paname1','$age1','$gender1','$preference1','$seat1','$paname2','$age2','$gender2','$preference2','$seat2','$paname3','$age3','$gender3','$preference3','$seat3','$paname4','$age4','$gender4','$preference4','$seat4','$paname5','$age5','$gender5','$preference5','$seat5','$paname6','$age6','$gender6','$preference6','$seat6','$coach','$totalprice','$totalpassenger','$selectedclass','$pnrno','$pnrstatus','$username')");
if($query>0)
{
	echo "<script>alert('You Booked your Tickets! Your PNR No.is $pnrno');</script>";
	//header('location:user-login.php');
	
	if($selectedclass == '2A')
	{
		$seat2a = $seat2a - $totalpassenger ;
	}
	if($selectedclass == '3A')
	{
		$seat3a = $seat3a - $totalpassenger ;
	}
	if($selectedclass == 'SL')
	{
		$seatsl = $seatsl - $totalpassenger ;
	}
	
	
	$query1 = mysql_query("update train set seat2a='$seat2a',seat3a='$seat3a',seatsl='$seatsl' where adate='$adate' AND tno='$tno'");
}
else
{
	echo "<script>alert('Unable to Book. Try Again');</script>";
}
}

?>

<table border="10" cellpadding="0" style="border:thick;"  bordercolor="#000000" width="1000" align="center">
<tr align="center" style="background-color:#09a9fa; font-size:16px; color:#fff;">
<th>Class Type</th> <th>Total Persons</th> <th>Total Price </th>
</tr>
<tr>
    <td><?php echo $class ?></td>
    <td><?php echo $totalpassenger ?></td>
    <td><?php echo $total ?></td>
</tr>
</table>
<br>
<form method="post">
 <h4>Card Details </h4>
 <table border="10" cellpadding="0" style="border:thick;"  bordercolor="#000000" width="1000" align="center">
<tr align="center" style="background-color:#09a9fa; font-size:16px; color:#fff;">
<th>Card Type</th> <th>Card Number</th> <th>Expire Date </th><th>CVV Code</th>
</tr>
<tr>
    <td><select class="form-control subject-form" name="cardtype" required >
                                    <option value="">Select</option>
                                    <option value="Credit">Credit</option>
                                    <option value="Debit">Debit</option>
                                </select></td>
    <td> <input type="text" class="form-control name-form" placeholder="Card Number" name="cno" maxlength="12" required> </td>
    <td> <select class="form-control subject-form" name="expmon" >
                                    <option value="">Select Month</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                                
                                 / 
                                 
                                 <select class="form-control subject-form" name="expyr" required >
                                    <option value="">Select Year</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                </select></td>
                                
                                <td><input type="text" class="form-control name-form" placeholder="Enter CVV Code" name="cvv" maxlength="3" required></td>

</tr>

</table>
<br>
<input type="text" value="<?php echo $_POST['adate']; ?>" name="adate" style="display:none;">
<input type="text" value="<?php echo $_POST['tno']; ?>" name="tno" style="display:none;">
<input type="text" value="<?php echo $_POST['tname']; ?>" name="tname" style="display:none;">
<input type="text" value="<?php echo $_POST['fromstation']; ?>" name="fromstation" style="display:none;">
<input type="text" value="<?php echo $_POST['departure']; ?>" name="departure" style="display:none;">
<input type="text" value="<?php echo $_POST['tostation']; ?>" name="tostation" style="display:none;">
<input type="text" value="<?php echo $_POST['arrival']; ?>" name="arrival" style="display:none;">
<input type="text" value="<?php echo $_POST['seat3a']; ?>" name="seat3a" style="display:none;">
<input type="text" value="<?php echo $_POST['fare3a']; ?>" name="fare3a" style="display:none;">
<input type="text" value="<?php echo $_POST['seat2a']; ?>" name="seat2a" style="display:none;">
<input type="text" value="<?php echo $_POST['fare2a']; ?>" name="fare2a" style="display:none;">
<input type="text" value="<?php echo $_POST['seatsl']; ?>" name="seatsl" style="display:none;">
<input type="text" value="<?php echo $_POST['faresl']; ?>" name="faresl" style="display:none;">

<input type="text" value="<?php echo $_POST['paname1']; ?>" name="paname1" style="display:none;">
<input type="text" value="<?php echo $_POST['age1']; ?>" name="age1" style="display:none;">
<input type="text" value="<?php echo $_POST['gender1']; ?>" name="gender1" style="display:none;">
<input type="text" value="<?php echo $_POST['preference1']; ?>" name="preference1" style="display:none;">
<input type="text" value="<?php echo rand(1,100);?>" name="seat1" style="display:none;" />

<input type="text" value="<?php echo $_POST['paname2']; ?>" name="paname2" style="display:none;">
<input type="text" value="<?php echo $_POST['age2']; ?>" name="age2" style="display:none;">
<input type="text" value="<?php echo $_POST['gender2']; ?>" name="gender2" style="display:none;">
<input type="text" value="<?php echo $_POST['preference2']; ?>" name="preference2" style="display:none;">
<input type="text" value="<?php echo rand(1,100);?>" name="seat2" style="display:none;" />

<input type="text" value="<?php echo $_POST['paname3']; ?>" name="paname3" style="display:none;">
<input type="text" value="<?php echo $_POST['age3']; ?>" name="age3" style="display:none;">
<input type="text" value="<?php echo $_POST['gender3']; ?>" name="gender3" style="display:none;">
<input type="text" value="<?php echo $_POST['preference3']; ?>" name="preference3" style="display:none;">
<input type="text" value="<?php echo rand(1,100);?>" name="seat3" style="display:none;" />

<input type="text" value="<?php echo $_POST['paname4']; ?>" name="paname4" style="display:none;">
<input type="text" value="<?php echo $_POST['age4']; ?>" name="age4" style="display:none;">
<input type="text" value="<?php echo $_POST['gender4']; ?>" name="gender4" style="display:none;">
<input type="text" value="<?php echo $_POST['preference4']; ?>" name="preference4"  style="display:none;">
<input type="text" value="<?php echo rand(1,100);?>" name="seat4" style="display:none;" />

<input type="text" value="<?php echo $_POST['paname5']; ?>" name="paname5" style="display:none;">
<input type="text" value="<?php echo $_POST['age5']; ?>" name="age5" style="display:none;">
<input type="text" value="<?php echo $_POST['gender5']; ?>" name="gender5" style="display:none;">
<input type="text" value="<?php echo $_POST['preference5']; ?>" name="preference5" style="display:none;">
<input type="text" value="<?php echo rand(1,100);?>" name="seat5" style="display:none;" />

<input type="text" value="<?php echo $_POST['paname6']; ?>" name="paname6" style="display:none;">
<input type="text" value="<?php echo $_POST['age6']; ?>" name="age6" style="display:none;">
<input type="text" value="<?php echo $_POST['gender6']; ?>" name="gender6" style="display:none;">
<input type="text" value="<?php echo $_POST['preference6']; ?>" name="preference6" style="display:none;">
<input type="text" value="<?php echo rand(1,100);?>" name="seat6" style="display:none;" />

<input type="text" value="<?php echo $total; ?>" name="totalprice" style="display:none;">
<input type="text" value="<?php echo $totalpassenger; ?>" name="totalpassenger" style="display:none;">
<input type="text" value="<?php echo $class; ?>" name="selectedclass" style="display:none;">

<input type="text" value="<?php echo rand(1111,9999);?>" name="pnrno" style="display:none;" />
<input type="text" value="<?php echo $pnrstatus; ?>" name="pnrstatus" style="display:none;">

<input type="text" value="<?php echo $coach; ?>" name="coach" style="display:none;">

<input type="text" value="<?php echo $_SESSION['username']; ?>" name="username" style="display:none;">

<input type="submit" value="Submit" name="booksubmit">
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