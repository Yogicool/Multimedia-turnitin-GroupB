<?php


$nam = $_POST['fname'] . " " . $_POST['lname'];
$eml= $_POST['email'];
$pass =$_POST['password'];
$mob = $_POST['mobile'];
$type = $_POST['r1'];

/*
if(strcmp($type,"moderator"))
{
	echo $type;
}
else{
echo "hello";
}
*/

$encrypt_password = md5($pass);


$link = mysqli_connect("localhost", "root", "", "musicmania");
if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql ="insert into registration values(NULL,'$nam','$eml','$encrypt_password',$mob, '$type','Active')";


if(mysqli_query($link,$sql))
{

echo "Successful ".mysqli_insert_id($link);
header('Location: index.php');	
}
else
{
	echo "Not Successful" .mysqli_error($link);
	
}

mysqli_close($link);

?>


