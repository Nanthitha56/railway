<?php session_start(); 
if(isset($_SESSION['username'])){
error_reporting(E_ERROR | E_PARSE);
require_once "connect.php";

$seat1 = isset($_REQUEST['seat1']) ? $_REQUEST['seat1'] : "0";
if($seat1)
{
	$query1= "select * from booking where seat1 = '$seat1'";
	$data1 = mysql_query($query1);
	while($rec = mysql_fetch_array($data1)) 
		{
			$paname = $rec['paname1'];
			$age = $rec['age1'];
			$gender = $rec['gender1'];
			$preference = $rec['preference1'];
			$seat = $rec['seat1'];
		}
	$query2 = "insert into cancel (paname,age,gender,preference,seat) values ('$paname','$age','$gender','$preference','$seat')";
	mysql_query($query2);
	$query3 = "update booking set paname1='',age1='',gender1='',preference1='',seat1='' where seat1 = ".$seat1;
	if(mysql_query($query3))
	{
		echo "Ticket Canceled!";
		header('Refresh: 3; URL = cancel-ticket.php');
	} 
	
}

$seat2 = isset($_REQUEST['seat2']) ? $_REQUEST['seat2'] : "0";
if($seat2)
{
	$query1= "select * from booking where seat2 = '$seat2'";
	$data1 = mysql_query($query1);
	while($rec = mysql_fetch_array($data1)) 
		{
			$paname = $rec['paname2'];
			$age = $rec['age2'];
			$gender = $rec['gender2'];
			$preference = $rec['preference2'];
			$seat = $rec['seat2'];
		}
		
	$query2 = "insert into cancel (paname,age,gender,preference,seat) values ('$paname','$age','$gender','$preference','$seat')";
	mysql_query($query2);
	
	$query3 = "update booking set paname2='',age2='',gender2='',preference2='',seat2='' where seat2 = ".$seat2;
	if(mysql_query($query3))
	{	
		echo "Ticket Canceled!";
		header('Refresh: 3; URL = cancel-ticket.php');
	} 
	
}

$seat3 = isset($_REQUEST['seat3']) ? $_REQUEST['seat3'] : "0";
if($seat3)
{
	$query1= "select * from booking where seat3 = '$seat3'";
	$data1 = mysql_query($query1);
	while($rec = mysql_fetch_array($data1)) 
		{
			$paname = $rec['paname3'];
			$age = $rec['age3'];
			$gender = $rec['gender3'];
			$preference = $rec['preference3'];
			$seat = $rec['seat3'];
		}
		
	$query2 = "insert into cancel (paname,age,gender,preference,seat) values ('$paname','$age','$gender','$preference','$seat')";
	mysql_query($query2);
	
	$query3 = "update booking set paname3='',age3='',gender3='',preference3='',seat3='' where seat3 = ".$seat3;
	if(mysql_query($query3))
	{
		echo "Ticket Canceled!";
		header('Refresh: 3; URL = cancel-ticket.php');
	} 
	
}

$seat4 = isset($_REQUEST['seat4']) ? $_REQUEST['seat4'] : "0";
if($seat4)
{
	$query1= "select * from booking where seat4 = '$seat4'";
	$data1 = mysql_query($query1);
	while($rec = mysql_fetch_array($data1)) 
		{
			$paname = $rec['paname4'];
			$age = $rec['age4'];
			$gender = $rec['gender4'];
			$preference = $rec['preference4'];
			$seat = $rec['seat4'];
		}
		
	$query2 = "insert into cancel (paname,age,gender,preference,seat) values ('$paname','$age','$gender','$preference','$seat')";
	mysql_query($query2);
	
	$query3 = "update booking set paname4='',age4='',gender4='',preference4='',seat4='' where seat4 = ".$seat4;
	if(mysql_query($query3))
	{
		echo "Ticket Canceled!";
		header('Refresh: 3; URL = cancel-ticket.php');
	} 
	
}

$seat5 = isset($_REQUEST['seat5']) ? $_REQUEST['seat5'] : "0";
if($seat5)
{
	$query1= "select * from booking where seat5 = '$seat5'";
	$data1 = mysql_query($query1);
	while($rec = mysql_fetch_array($data1)) 
		{
			$paname = $rec['paname5'];
			$age = $rec['age5'];
			$gender = $rec['gender5'];
			$preference = $rec['preference5'];
			$seat = $rec['seat5'];
		}
		
	$query2 = "insert into cancel (paname,age,gender,preference,seat) values ('$paname','$age','$gender','$preference','$seat')";
	mysql_query($query2);
	
	$query3 = "update booking set paname5='',age5='',gender5='',preference5='',seat5='' where seat5 = ".$seat5;
	if(mysql_query($query3))
	{
		echo "Ticket Canceled!";
		header('Refresh: 3; URL = cancel-ticket.php');
	} 
	
}

$seat6 = isset($_REQUEST['seat6']) ? $_REQUEST['seat6'] : "0";
if($seat6)
{
	$query1= "select * from booking where seat6 = '$seat6'";
	$data1 = mysql_query($query1);
	while($rec = mysql_fetch_array($data1)) 
		{
			$paname = $rec['paname6'];
			$age = $rec['age6'];
			$gender = $rec['gender6'];
			$preference = $rec['preference6'];
			$seat = $rec['seat6'];
		}
		
	$query2 = "insert into cancel (paname,age,gender,preference,seat) values ('$paname','$age','$gender','$preference','$seat')";
	mysql_query($query2);
	
	$query3 = "update booking set paname6='',age6='',gender6='',preference6='',seat6='' where seat6 = ".$seat6;
	if(mysql_query($query3))
	{
		echo "Ticket Canceled!";
		header('Refresh: 3; URL = cancel-ticket.php');
	} 
	
}

}else{
	echo "Please login with user account...";
header('Refresh: 2; URL = admin.php');
}
?>