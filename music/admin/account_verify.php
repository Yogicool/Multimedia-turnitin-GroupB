



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />

<script src="../js/bootstrap.min.js" type="application/javascript">

</script>

<style>
.back{

width:100%;	
}
body{

font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;	
}
.nav-link{
color:#FFF;	
}
.table{
color:black;	

}
.back{
background-color:#000;	
}
</style>

</head>


<body>

<div class="container-fluid">
<div class="row back">

<div class="col-lg-2 col-sm-2">
<img src="../image/logo.svg" /> <br />

</div>

<div class="col-lg-7 col-sm-7">
<nav class="nav nav-fill navbar-dark float-right">
 
  <a class="nav-link active" href="../index.php">Home</a>
  <a class="nav-link active" href="admin_display.php">All Songs</a>
  <a class="nav-link active" href="account_verify.php">Account Requests</a>
  
  <a class="nav-link" href="../logout.php">Sign Out</a>
  <a class="nav-link" href=''><?php session_start(); echo "Profile: ".$_SESSION['email'];?> </a>

</nav>
</div>
</div>
<div class="row clearfix">
<div class="col-12 clearfix">
<h1 class="text-center"><u> Admin Profile</u></h1>
</div>


<?php


$link = mysqli_connect("localhost", "root", "", "musicmania");
if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql ="select * from registration";

?>

<table class="table table-hover">

<th>Name</th><th>Email</th><th>Account</th><th>Status</th> <th>Accept </th>

<?php
if($result = mysqli_query($link,$sql))
{
while($row=mysqli_fetch_assoc($result))
{
	$id =$row['regid']; 
	echo "<tr><td>".$row['regname']."</td>";
	echo "<td>".$row['regemail']."</td>";
	echo "<td>".$row['regtype']."</td>";	
	echo "<td>".$row['regstatus']."</td>";
	echo "<td><a href='account_verify_approve.php?id=$id'> Accept </a></td>";		
	echo "</tr>";

}
}
else
{
	echo "Not Successful" .mysqli_error($link);
	
}

mysqli_close($link);

?>


