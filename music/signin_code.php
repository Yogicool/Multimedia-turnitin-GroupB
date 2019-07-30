<?php



$eml= $_POST['email'];
$pass =$_POST['password'];
$encrypt_password = md5($pass);

$link = mysqli_connect("localhost", "root", "", "musicmania");
if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql ="select * from registration where regemail='$eml' and regpass='$encrypt_password' ";

if($result = mysqli_query($link,$sql))
{
if($row=mysqli_fetch_assoc($result))
{
	
session_start();

echo "Successful";	
if(strcmp($row['regtype'],"admin") == 0)
{
	$_SESSION['email'] = $row['regemail'];
	header('Location: admin/account_verify.php');
}
else if(strcmp($row['regtype'],"moderator") == 0){
		
$_SESSION['email'] = $row['regemail'];

		header('Location: moderator/songsupload.php');
}
else{
	
$_SESSION['email'] = $row['regemail'];

echo $row['regemail'];
header('Location: user/index.php');
}
}
else{
	header('Location: index.php');
}
}
else
{
	echo "Not Successful" .mysqli_error($link);

	
}

mysqli_close($link);

?>


