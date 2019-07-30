<?php

$password="john856";
$encrypt_password=md5($password);

echo $encrypt_password; 


$dec = md5($encrypt_password);

echo "<br> $dec";


?>